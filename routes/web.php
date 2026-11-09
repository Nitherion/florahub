<?php

use App\Http\Controllers\Dev\QuickLoginController;
use App\Models\Family;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;
use Illuminate\Http\Request;


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
});

Route::middleware(['auth', 'verified', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard', [
                'familiesCount' => Family::count(),
            ]);
        })->name('dashboard');

        Route::livewire('families', 'pages::admin.families')
            ->can('viewAny', Family::class)
            ->name('families.index');

    });

require __DIR__.'/settings.php';
