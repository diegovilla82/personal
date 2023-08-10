<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="ffont-semibold text-xl text-gray-800 leading-tight">
                {{ __('Licencias') }}

            </h2>
            @livewire('admin.licencia.create')
        </div>

    </x-slot>

    <!-- New Table -->

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3 text-center">Concepto</th>
                        <th class="px-4 py-3 text-center">Días</th>
                        <th class="px-4 py-3 text-center">Activo</th>
                        <th class="px-4 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($licencias as $licencia)
                        <tr class="text-gray-700 dark:text-gray-400" wire:key="{{ $licencia->id }}">
                            <td class="px-4 py-1">
                                {{ $licencia->id }}
                            </td>
                            <td class="px-4 py-1">
                                {{ $licencia->concept }}
                            </td>
                            <td class="px-4 py-3 text-center text-sm">
                                {{ $licencia->days }} @if ($licencia->days == 1)
                                    día
                                @else
                                    días
                                @endif
                            </td>
                            <td class="px-4 py-1 text-center text-xs">


                                @if (!$licencia->is_active)
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                        No activa
                                    </span>
                                @else
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        Activo
                                    </span>
                                @endif

                            </td>
                            <td class="flex px-4 py-1 justify-center">
                                @livewire('admin.licencia.edit', [$licencia], key('edit-licencia' . now() . $licencia->id))

                                @livewire('admin.licencia.delete', [$licencia], key('delete-licencia' . now() . $licencia->id))
                            </td>
                        </tr>

                    @empty
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-center text-sm" colspan="4">
                                no hay registros para mostrar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div
            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
                Showing 21-30 of 100
            </span>
            <span class="col-span-4"></span>
            <!-- Pagination -->
            {{ $licencias->links() }}
        </div>
    </div>
</div>
