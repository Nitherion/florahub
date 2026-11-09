<?php

use App\Http\Controllers\Dev\QuickLoginController;
use App\Http\Middleware\SetLocale;
use App\Models\Family;
use App\Models\Species;
use App\Models\User;
use App\Notifications\UsersReportReady;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::view('/', 'home')->name('home');

// Início de sessão rápido: apenas em desenvolvimento (APP_ENV=local)
Route::post('dev/login/{role}', QuickLoginController::class)
    ->middleware('guest')
    ->whereIn('role', ['admin', 'user'])
    ->name('dev.login');

// Alternar o idioma da aplicação, guardado na sessão.
Route::get('locale/{locale}', function (Request $request, string $locale) {
    if (in_array($locale, SetLocale::SUPPORTED_LOCALES, true)) {
        $request->session()->put('locale', $locale);
    }

    return back();
})->whereIn('locale', SetLocale::SUPPORTED_LOCALES)->name('locale.update');

Route::middleware(['auth', 'verified', 'role:user'])->group(function () {
    Route::view('dashboard', 'user.dashboard')->name('dashboard');

    Route::livewire('notifications', 'pages::notifications.index')->name('notifications.index');
});

Route::middleware(['auth', 'verified', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')

    ->group(function () {

        Route::get('dashboard', function () {
            return view('admin.dashboard', [
                'familiesCount' => Family::count(),
                'speciesCount' => Species::count(),
                'usersCount' => User::role('user')->count(),
            ]);
        })->name('dashboard');

        Route::livewire('species', 'pages::admin.species')
            ->can('viewAny', Species::class)
            ->name('species.index');

        Route::livewire('families', 'pages::admin.families')
            ->can('viewAny', Family::class)
            ->name('families.index');

        // Ficha da família em PDF, gerada e descarregada no próprio pedido (síncrono).
        Route::get('families/{family:slug}/pdf', function (Family $family) {
            return Pdf::loadView('pdf.family', [
                'family' => $family,
                'species' => $family->species()->orderBy('scientific_name')->get(),
                'imagePath' => $family->image ? Storage::disk('public')->path($family->image) : null,
            ])->download($family->slug.'.pdf');
        })
            ->withTrashed()
            ->can('view', 'family')
            ->name('families.pdf');

        Route::livewire('users', 'pages::admin.users')
            ->can('viewAny', User::class)
            ->name('users.index');

        Route::get('reports/{notification}', function (Request $request, string $notification) {
            $notification = $request->user()->notifications()->findOrFail($notification);

            abort_unless($notification->type === UsersReportReady::class, 404);

            $path = $notification->data['path'];

            abort_unless(Storage::disk('local')->exists($path), 404);

            $notification->markAsRead();

            return Storage::disk('local')->download($path, 'florahub-users.pdf');
        })->name('reports.download');

    });

require __DIR__.'/settings.php';
