<div class="p-4" x-data="{openEdit: @entangle('showModalEdit')}" x-on:keydown.escape="openEdit=false">
    <div class="w-full flex items-center">
        <button
        type="button"
        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-400 hover:text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
        x-on:click="openEdit = true"
        wire:loading.attr='disabled'>
        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
            </path>
        </svg>
        </button>
    </div>
    <!-- Modal backdrop. This what you want to place close to the closing body tag -->
    <div x-show="openEdit" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="openEdit" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0  transform translate-y-1/2"
            @click.away="openEdit=true"
            @keydown.escape="openEdit=true"
            class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
            role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-between">
                <h3>Datos de la licencia</h3>
                <button
                    class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                    aria-label="close"
                    x-on:click='openEdit = false'
                    >

                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Modal title -->
                <form wire:submit.prevent='update' class="space-y-4" id="UpdateForm-{{ $this->formId }}">
                    @csrf
                    @method('POST')
                    <!-- Modal title -->
                    <div class="flex">
                        <label class="w-full px-1 mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                                Licencia
                            </span>
                            <select wire:model.defer="licencia.licencia_id"
                                class="w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                @foreach ($licencias as $licencia)
                                    <option value="{{ $licencia->id }}">{{ $licencia->concept }} </option>
                                @endforeach
                            </select>
                        </label>
                        <label class="w-full px-1 mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                                Días
                            </span>
                            <input type="number" wire:model.defer="licencia.days"
                                class="w-full  mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                        </label>
                    </div>
                </form>
            </div>
            <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button
                 x-on:click='openEdit = false'
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <button type='submit'
                    form="UpdateForm-{{ $this->formId }}"

                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Actualizar
                </button>
            </footer>
        </div>
    </div>

</div>
