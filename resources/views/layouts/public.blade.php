<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="bg-stone-50 font-sans text-stone-800 antialiased">

<!-- Cabeçalho -->
<header class="sticky top-0 z-40 border-b border-stone-200 bg-white/90 backdrop-blur">
    <div class="relative mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-brand-600 text-white">
                    <x-app-logo-icon class="h-5 w-5" />
                </span>
            <span class="text-lg font-semibold tracking-tight text-stone-900">FloraHub</span>
        </a>

        <nav class="hidden items-center gap-8 md:flex">
            <a href="{{ route('home') }}" class="text-sm font-medium text-brand-700">{{ __('Home') }}</a>
            <a href="#" class="text-sm font-medium text-stone-600 hover:text-brand-700">{{ __('Species') }}</a>
        </nav>

        <div class="hidden items-center gap-4 md:flex">
            <x-locale-switcher />
            <a href="{{ route('login') }}" class="rounded-lg px-3 py-2 text-sm font-semibold text-stone-700 hover:bg-stone-100">{{ __('log in') }}</a>
            <a href="{{ route('register') }}" class="rounded-lg bg-brand-600 px-4 py-2 text-sm font-semibold text-white hover:bg-brand-700">{{ __('Create account') }}</a>
        </div>

        <details class="md:hidden">
            <summary class="flex h-9 w-9 list-none items-center justify-center rounded-lg text-stone-600 hover:bg-stone-100 [&::-webkit-details-marker]:hidden">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/></svg>
            </summary>
            <div class="absolute inset-x-0 top-16 border-b border-stone-200 bg-white px-4 py-4 shadow-lg">
                <div class="flex flex-col gap-1">
                    <a href="{{ route('home') }}" class="rounded-lg bg-brand-50 px-3 py-2 text-sm font-medium text-brand-700">{{ __('Home') }}
                    </a>
                    <a href="#" class="rounded-lg px-3 py-2 text-sm font-medium text-stone-700 hover:bg-stone-50">{{ __('Species') }}</a>
                    <div class="my-2 border-t border-stone-200"></div>
                    <a href="{{ route('login') }}" class="rounded-lg px-3 py-2 text-sm font-medium text-stone-700 hover:bg-stone-50">{{ __('log in') }}
                    </a>
                    <a href="{{ route('register') }}" class="rounded-lg bg-brand-600 px-3 py-2 text-center text-sm font-semibold text-white hover:bg-brand-700">{{ __('Create account') }}</a>
                </div>
            </div>
        </details>
    </div>
</header>

<!-- Conteúdo da página -->
<main>
    <!-- Hero -->
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div>
                <span class="inline-flex items-center rounded-full bg-brand-100 px-3 py-1 text-xs font-medium text-brand-800">{{ __('Botanical catalogue and personal plant care') }}</span>
                <h1 class="mt-5 text-4xl font-semibold tracking-tight text-stone-900 sm:text-5xl">
                    {{ __('Grow your plant collection with confidence.') }}
                </h1>
                <p class="mt-5 max-w-xl text-lg text-stone-600">
                    {{ __('FloraHub brings together a botanical catalogue of species and a personal plant log, so you always know what your plants need and when they were last cared for.') }}
                </p>
                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="#" class="inline-flex items-center justify-center gap-2 rounded-lg bg-brand-600 px-5 py-3 text-sm font-semibold text-white hover:bg-brand-700">
                        {{ __('Explore the catalogue') }}
                    </a>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center gap-2 rounded-lg border border-stone-300 bg-white px-5 py-3 text-sm font-semibold text-stone-700 hover:bg-stone-50">
                        {{ __('Create free account') }}
                    </a>
                </div>
                <dl class="mt-10 grid grid-cols-3 gap-6 border-t border-stone-200 pt-8">
                    <div>
                        <dt class="text-2xl font-semibold text-stone-900">1200+</dt>
                        <dd class="text-sm text-stone-500">{{ __('cataloged species') }}</dd>
                    </div>
                    <div>
                        <dt class="text-2xl font-semibold text-stone-900">8</dt>
                        <dd class="text-sm text-stone-500">{{ __('botanical families') }}</dd>
                    </div>
                    <div>
                        <dt class="text-2xl font-semibold text-stone-900">Grátis</dt>
                        <dd class="text-sm text-stone-500">{{ __('personal plant log') }}</dd>
                    </div>
                </dl>
            </div>

            <div class="flex aspect-4/3 w-full flex-col items-center justify-center gap-3 rounded-2xl border border-stone-200 bg-stone-100 text-stone-400">
                <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25A2.25 2.25 0 0018.75 6H5.25A2.25 2.25 0 003 8.25zM10.5 8.25h.008v.008h-.008V8.25z"/></svg>
                <span class="text-xs">images/hero-plants-placeholder.jpg</span>
            </div>
        </div>
    </section>

    <!-- Featured species -->
    <section class="border-t border-stone-200 bg-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between">
                <div>
                    <h2 class="text-2xl font-semibold tracking-tight text-stone-900">{{ __('Featured species') }}</h2>
                    <p class="mt-1 text-stone-500">{{ __('Some of the most popular plants in the catalogue to get you started.') }}</p>
                </div>
                <a href="#" class="hidden text-sm font-medium text-brand-700 hover:text-brand-800 sm:inline-flex">{{ __('View all species →') }}</a>
            </div>

            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <a href="species-show.html" class="group flex flex-col overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-md">
                    <div class="flex aspect-4/3 w-full flex-col items-center justify-center gap-2 bg-stone-100 text-stone-400">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25A2.25 2.25 0 0018.75 6H5.25A2.25 2.25 0 003 8.25zM10.5 8.25h.008v.008h-.008V8.25z"/></svg>
                        <span class="text-[11px]">images/species-placeholder.jpg</span>
                    </div>
                    <div class="flex flex-1 flex-col gap-2 p-5">
                        <span class="inline-flex w-fit items-center rounded-full bg-brand-100 px-2.5 py-0.5 text-xs font-medium text-brand-800">Araceae</span>
                        <h3 class="text-base font-semibold text-stone-900">Monstera deliciosa</h3>
                        <p class="text-sm italic text-stone-500">{{ __('Swiss cheese plant') }}</p>
                    </div>
                </a>
                <a href="species-show.html" class="group flex flex-col overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-md">
                    <div class="flex aspect-[4/3] w-full flex-col items-center justify-center gap-2 bg-stone-100 text-stone-400">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25A2.25 2.25 0 0018.75 6H5.25A2.25 2.25 0 003 8.25zM10.5 8.25h.008v.008h-.008V8.25z"/></svg>
                        <span class="text-[11px]">images/species-placeholder.jpg</span>
                    </div>
                    <div class="flex flex-1 flex-col gap-2 p-5">
                        <span class="inline-flex w-fit items-center rounded-full bg-brand-100 px-2.5 py-0.5 text-xs font-medium text-brand-800">Moraceae</span>
                        <h3 class="text-base font-semibold text-stone-900">Ficus lyrata</h3>
                        <p class="text-sm italic text-stone-500">{{ __('Fiddle-leaf fig') }}</p>
                    </div>
                </a>
                <a href="species-show.html" class="group flex flex-col overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-md">
                    <div class="flex aspect-[4/3] w-full flex-col items-center justify-center gap-2 bg-stone-100 text-stone-400">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25A2.25 2.25 0 0018.75 6H5.25A2.25 2.25 0 003 8.25zM10.5 8.25h.008v.008h-.008V8.25z"/></svg>
                        <span class="text-[11px]">images/species-placeholder.jpg</span>
                    </div>
                    <div class="flex flex-1 flex-col gap-2 p-5">
                        <span class="inline-flex w-fit items-center rounded-full bg-brand-100 px-2.5 py-0.5 text-xs font-medium text-brand-800">Asparagaceae</span>
                        <h3 class="text-base font-semibold text-stone-900">Sansevieria trifasciata</h3>
                        <p class="text-sm italic text-stone-500">{{ __('Snake plant') }}</p>
                    </div>
                </a>
                <a href="species-show.html" class="group flex flex-col overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-md">
                    <div class="flex aspect-[4/3] w-full flex-col items-center justify-center gap-2 bg-stone-100 text-stone-400">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25A2.25 2.25 0 0018.75 6H5.25A2.25 2.25 0 003 8.25zM10.5 8.25h.008v.008h-.008V8.25z"/></svg>
                        <span class="text-[11px]">images/species-placeholder.jpg</span>
                    </div>
                    <div class="flex flex-1 flex-col gap-2 p-5">
                        <span class="inline-flex w-fit items-center rounded-full bg-brand-100 px-2.5 py-0.5 text-xs font-medium text-brand-800">Araceae</span>
                        <h3 class="text-base font-semibold text-stone-900">Zamioculcas zamiifolia</h3>
                        <p class="text-sm italic text-stone-500">{{ __('ZZ plant') }}</p>
                    </div>
                </a>
            </div>
            <a href="#" class="mt-6 inline-flex text-sm font-medium text-brand-700 hover:text-brand-800 sm:hidden">{{ __('View all species →') }}</a>
        </div>
    </section>

    <!-- Features -->
    <section class="py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold tracking-tight text-stone-900">{{ __('Everything your collection needs') }}</h2>
            <div class="mt-8 grid gap-6 sm:grid-cols-3">
                <div class="rounded-2xl border border-stone-200 bg-white p-6">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand-100 text-brand-700">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/></svg>
                        </span>
                    <h3 class="mt-4 text-base font-semibold text-stone-900">{{ __('Explore the catalogue') }}</h3>
                    <p class="mt-2 text-sm text-stone-600">{{ __('Search and filter botanical species by name, family and care characteristics.') }}</p>
                </div>
                <div class="rounded-2xl border border-stone-200 bg-white p-6">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand-100 text-brand-700">
                            <x-app-logo-icon class="h-5 w-5" />                        </span>
                    <h3 class="mt-4 text-base font-semibold text-stone-900">{{ __('Track your collection') }}</h3>
                    <p class="mt-2 text-sm text-stone-600">{{ __('Keep all your plants organised, with photos and a care history.') }}</p>
                </div>
                <div class="rounded-2xl border border-stone-200 bg-white p-6">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-brand-100 text-brand-700">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/></svg>
                        </span>
                    <h3 class="mt-4 text-base font-semibold text-stone-900">{{ __('Never miss a care task') }}</h3>
                    <p class="mt-2 text-sm text-stone-600">{{ __('Set reminders for watering, fertilising and pruning, and see what is due.') }}.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA banner -->
    <section class="bg-brand-700">
        <div class="mx-auto max-w-7xl px-4 py-16 text-center sm:px-6 lg:px-8">
            <h2 class="text-2xl font-semibold tracking-tight text-white sm:text-3xl">{{ __('Ready to grow your collection?') }}</h2>
            <p class="mx-auto mt-3 max-w-xl text-brand-100">{{ __('Create a free account and start tracking your plants in minutes.') }}</p>
            <a href="{{ route('register') }}" class="mt-7 inline-flex items-center justify-center gap-2 rounded-lg bg-white px-5 py-3 text-sm font-semibold text-brand-800 hover:bg-brand-50">
                {{ __('Create free account') }}
            </a>
        </div>
    </section>
</main>

<!-- Rodapé -->
<footer class="border-t border-stone-200 bg-white">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-4">
            <div class="md:col-span-2">
                <div class="flex items-center gap-2">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-600 text-white">
                            <x-app-logo-icon class="h-4 w-4" />
                        </span>
                    <span class="text-base font-semibold text-stone-900">FloraHub</span>
                </div>
                <p class="mt-4 max-w-sm text-sm text-stone-500">{{ __('A botanical catalogue and a personal plant care companion, built to help you get to know species and keep your own collection healthy.') }}</p>
            </div>
            <div>
                <h3 class="text-sm font-semibold text-stone-900">{{ __('Explore') }}</h3>
                <ul class="mt-4 space-y-2.5 text-sm text-stone-500">
                    <li><a href="{{ route('home') }}" class="hover:text-brand-700">{{ __('log in') }}</a></li>
                    <li><a href="#" class="hover:text-brand-700">{{ __('Species catalogue') }}</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-sm font-semibold text-stone-900">{{ __('Account') }}
                </h3>
                <ul class="mt-4 space-y-2.5 text-sm text-stone-500">
                    <li><a href="{{ route('login') }}" class="hover:text-brand-700">{{ __('log in') }}</a></li>
                    <li><a href="{{ route('register') }}" class="hover:text-brand-700">{{ __('Create account') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-10 border-t border-stone-200 pt-6 text-xs text-stone-400">
            {{ __(':year FloraHub — educational project.', ['year' => '© ' . date('Y')]) }}
        </div>
    </div>
</footer>

</body>
</html>
