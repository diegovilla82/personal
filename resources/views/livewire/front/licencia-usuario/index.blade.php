<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="ffont-semibold text-xl text-gray-800 leading-tight">
                {{ __('Licencias pedidas') }}

            </h2>
            @livewire('front.licencia-usuario.create')
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
                        <th class="px-4 py-3 text-center">Año</th>
                        <th class="px-4 py-3 text-center">Estado</th>
                        <th class="px-4 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($licenciasSolicitadas as $item)
                        <tr class="text-gray-700 dark:text-gray-400" wire:key="{{ $item->id }}">
                            <td class="px-4 py-3">
                                {{ $item->id }}
                            </td>
                            <td class="px-4 py-3">
                                {{ $item->licencia->concept }}
                            </td>
                            <td class="px-4 py-3 text-center text-sm">
                                {{ $item->days }} @if ($item->days == 1)
                                    día
                                @else
                                    días
                                @endif
                            </td>
                            <td class="px-4 py-3 text-center text-sm">
                                {{ $item->year }}
                            </td>
                            <td class="px-4 py-3 text-center text-xs">
                                @if (!$item->status)
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
                            <td class="flex px-4 py-3 justify-center">
                                @if (!$item->status)
                                    @livewire('front.licencia-usuario.edit', [ 'licencia'=>$item], key('edit-licencia-user-'.now().$item->id) )
                                    @livewire('front.licencia-usuario.delete', ['id'=>$item->id], key('delete-licencia' . now() . $item->id))
                                    @else
                                    
                                @endif
                                {{-- @livewire('admin.licencia.edit', [$item], key('edit-licencia' . now() . $licencia->id))

                                @livewire('admin.licencia.delete', [$item], key('delete-licencia' . now() . $licencia->id)) --}}
                            </td>
                        </tr>

                    @empty
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-center text-sm" colspan="5">
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
            {{ $licenciasSolicitadas->links() }}

        </div>
    </div>
</div>
@push('js')
    <script>
       window.addEventListener('saved-success', event => {
            alert('Name updated to: ' + event.detail.newName);
        })
    </script>
@endpush
