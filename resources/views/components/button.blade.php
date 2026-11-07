@props(['variant' => 'primary', 'href' => null])

@php
    $variants = match ($variant) {
        'secondary' => 'border border-stone-300 bg-white text-stone-800 hover:bg-stone-50',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        default => 'bg-brand-600 text-white hover:bg-brand-700',
    };
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class(['inline-flex items-center rounded-lg px-4 py-2 text-sm font-semibold transition', $variants]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->class(['inline-flex items-center rounded-lg px-4 py-2 text-sm font-semibold transition', $variants])->merge(['type' => 'button']) }}>
        {{ $slot }}
    </button>
@endif

<section class="space-y-4">
    <h2 class="text-xl font-semibold text-stone-900">5. x-button</h2>

    <div class="flex flex-wrap items-center gap-3">
        <x-button>Guardar</x-button>
        <x-button variant="secondary">Cancelar</x-button>
        <x-button variant="danger">Eliminar</x-button>
        <x-button href="{{ route('dev.tailwind') }}">Ir para Tailwind (link)</x-button>
        <x-button type="submit" class="w-48 justify-center">type="submit"</x-button>
    </div>
</section>
