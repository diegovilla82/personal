<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="ffont-semibold text-xl text-gray-800 leading-tight">
                {{ __('Carga de licencia') }}

            </h2>
        </div>
    </x-slot>
    <div class="container grid px-6 mx-auto">


        <!-- General elements -->

        <div class="w-3/4 px-4 py-3 mb-8 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">

            <div class="flex">
                <label class="w-full px-1 mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Licencia
                    </span>
                    <select wire:model="licencia"
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
                    <input
                            type="number"
                            wire:model="dias"
                            class="w-full  mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                </label>
            </div>


            {{-- <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Observación</span>
                <textarea
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    rows="3" placeholder="Igrese alguna observación o comentario que desee."></textarea>
            </label> --}}

            <footer
                class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button @click="closeModal"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancel
                </button>
                <button type='submit' form='SubmitForm'
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Enviar
                </button>
            </footer>
        </div>
    </div>
</div>
