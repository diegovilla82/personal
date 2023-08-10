<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="ffont-semibold text-xl text-gray-800 leading-tight">
                {{ __('Personal de viviendas') }}

            </h2>
            @livewire('admin.personal.create')
        </div>

    </x-slot>

    <!-- New Table -->

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 text-center">Id</th>
                        <th class="px-4 py-3 text-center">Ingreso</th>
                        <th class="px-4 py-3 text-center">DNI</th>
                        <th class="px-4 py-3 text-center">Nombre</th>
                        <th class="px-4 py-3 text-center">Apellido</th>
                        <th class="px-4 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($empleados as $empleado)
                        <tr class="text-gray-700 dark:text-gray-400" wire:key="{{ $empleado->id }}">
                            <td class="px-4 py-3 text-center">
                                {{ $empleado->id }}
                            </td>
                            <td class="px-4 py-3 text-center">
                                {{ $empleado->year_of_income }}
                            </td>
                            <td class="px-4 py-3 text-center">
                                {{ $empleado->dni }}
                            </td>
                            <td class="px-4 py-3">
                                {{ $empleado->name }}
                            </td>
                            <td class="px-4 py-3">
                                {{ $empleado->last_name }}
                            </td>
                            <td class="flex px-4 py-3 justify-center">
                                @livewire('admin.personal.edit', [$empleado], key('edit-empleado' . now() . $empleado->id))

                                @livewire('admin.personal.delete', [$empleado], key('delete-empleado' . now() . $empleado->id))
                            </td>
                        </tr>

                    @empty
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-center text-sm" colspan="6">
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
            {{ $empleados->links() }}

        </div>
    </div>
</div>
