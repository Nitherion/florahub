<x-layouts::admin title="Painel">
        <h2 class="text-2xl font-semibold tracking-tight text-stone-900">Painel de administração</h2>
        <p class="mt-1 text-sm text-stone-500">Vista geral do catálogo e da comunidade FloraHub.</p>

        <!-- Stats -->
        <div class="mt-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <x-stat-card label="Total de utilizadores" value="184" icon-class="bg-brand-100 text-brand-700">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21C7 21 3 17 3 11.5 3 6 7.5 3 12 3c1 4 5 5.5 5 10.5S15 21 12 21Z"/></svg>
            </x-stat-card>

            <x-stat-card label="Espécies no catálogo" value="96" icon-class="bg-sky-100 text-sky-700">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21C7 21 3 17 3 11.5 3 6 7.5 3 12 3c1 4 5 5.5 5 10.5S15 21 12 21Z"/></svg>
            </x-stat-card>

            <x-stat-card label="Famílias botânicas" value="14" icon-class="bg-amber-100 text-amber-700">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21C7 21 3 17 3 11.5 3 6 7.5 3 12 3c1 4 5 5.5 5 10.5S15 21 12 21Z"/></svg>
            </x-stat-card>

            <x-stat-card label="Plantas registadas" value="512" icon-class="bg-stone-100 text-stone-600">
                <x-app-logo-icon class="h-4 w-4" />
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21C7 21 3 17 3 11.5 3 6 7.5 3 12 3c1 4 5 5.5 5 10.5S15 21 12 21Z"/></svg>
            </x-stat-card>

        </div>

        <!-- Recent activity table -->
        <div class="mt-6">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-semibold text-stone-900">Espécies adicionadas recentemente</h3>
                <a href="#" class="text-sm font-medium text-brand-700 hover:text-brand-800">Gerir espécies</a>
            </div>
            <div class="mt-4 overflow-hidden rounded-t-2xl border border-stone-200 bg-white">
                <div class="border-b border-stone-200 p-4">
                    <div class="relative max-w-sm">
                        <svg class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-stone-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/></svg>
                        <input type="text" placeholder="Pesquisar espécie…" class="w-full rounded-lg border border-stone-300 bg-white py-2 pl-9 pr-3 text-sm text-stone-900 placeholder:text-stone-400 focus:border-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-500/20" />
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-stone-200 text-sm">
                        <thead class="bg-stone-50">
                        <tr>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-stone-500">Espécie</th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-stone-500">Família</th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-stone-500">Adicionado por</th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-stone-500">Data</th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-stone-500">Estado</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-200">
                        <tr class="hover:bg-stone-50">
                            <td class="px-5 py-3 font-medium text-stone-900">Monstera deliciosa</td>
                            <td class="px-5 py-3 text-stone-600">Araceae</td>
                            <td class="px-5 py-3 text-stone-600">Rui Mendes</td>
                            <td class="px-5 py-3 text-stone-500">28 set. 2026</td>
                            <td class="px-5 py-3"><span class="inline-flex items-center rounded-full bg-brand-100 px-2.5 py-1 text-xs font-medium text-brand-800">Publicado</span></td>
                        </tr>
                        <tr class="hover:bg-stone-50">
                            <td class="px-5 py-3 font-medium text-stone-900">Calathea orbifolia</td>
                            <td class="px-5 py-3 text-stone-600">Marantaceae</td>
                            <td class="px-5 py-3 text-stone-600">Rui Mendes</td>
                            <td class="px-5 py-3 text-stone-500">27 set. 2026</td>
                            <td class="px-5 py-3"><span class="inline-flex items-center rounded-full bg-stone-100 px-2.5 py-1 text-xs font-medium text-stone-600">Rascunho</span></td>
                        </tr>
                        <tr class="hover:bg-stone-50">
                            <td class="px-5 py-3 font-medium text-stone-900">Crassula ovata</td>
                            <td class="px-5 py-3 text-stone-600">Crassulaceae</td>
                            <td class="px-5 py-3 text-stone-600">Ana Ferreira</td>
                            <td class="px-5 py-3 text-stone-500">25 set. 2026</td>
                            <td class="px-5 py-3"><span class="inline-flex items-center rounded-full bg-brand-100 px-2.5 py-1 text-xs font-medium text-brand-800">Publicado</span></td>
                        </tr>
                        <tr class="hover:bg-stone-50">
                            <td class="px-5 py-3 font-medium text-stone-900">Sansevieria trifasciata</td>
                            <td class="px-5 py-3 text-stone-600">Asparagaceae</td>
                            <td class="px-5 py-3 text-stone-600">Ana Ferreira</td>
                            <td class="px-5 py-3 text-stone-500">22 set. 2026</td>
                            <td class="px-5 py-3"><span class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-1 text-xs font-medium text-red-700">Precisa de revisão</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex items-center justify-between rounded-b-2xl border-x border-b border-stone-200 bg-white px-5 py-4">
                <p class="text-sm text-stone-500">A mostrar <span class="font-medium text-stone-700">1–4</span> de <span class="font-medium text-stone-700">96</span></p>
                <nav class="flex items-center gap-1">
                    <a href="#" class="rounded-lg px-3 py-1.5 text-sm text-stone-400">Anterior</a>
                    <a href="#" class="rounded-lg bg-brand-600 px-3 py-1.5 text-sm font-medium text-white">1</a>
                    <a href="#" class="rounded-lg px-3 py-1.5 text-sm text-stone-600 hover:bg-stone-100">2</a>
                    <a href="#" class="rounded-lg px-3 py-1.5 text-sm text-stone-600 hover:bg-stone-100">3</a>
                    <a href="#" class="rounded-lg px-3 py-1.5 text-sm font-medium text-stone-600 hover:bg-stone-100">Seguinte</a>
                </nav>
            </div>
        </div>
</x-layouts::admin>
