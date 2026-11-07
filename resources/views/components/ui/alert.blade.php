@props(['type' => 'info', 'title' => null])

@php
    $styles = match ($type) {
        'success' => 'border-brand-200 bg-brand-50 text-brand-800',
        'error' => 'border-red-200 bg-red-50 text-red-800',
        default => 'border-sky-200 bg-sky-50 text-sky-800',
    };
@endphp

<div role="alert" {{ $attributes->class(['rounded-lg border p-4 text-sm', $styles]) }}>
    @if ($title)
        <p class="font-semibold">{{ $title }}</p>
    @endif

    <div>{{ $slot }}</div>
</div>


<section class="space-y-4">
    <h2 class="text-xl font-semibold text-stone-900">6. x-ui.alert</h2>

    <x-ui.alert>Mensagem informativa (tipo por omissão).</x-ui.alert>
    <x-ui.alert type="success" title="Guardado">A família foi criada com sucesso.</x-ui.alert>
    <x-ui.alert type="error" title="Erro">Não foi possível guardar. <x-badge color="red">422</x-badge></x-ui.alert>
</section>
