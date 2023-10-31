<div class="flex space-x-2">
    <label class="w-full flex flex-col text-sm space-y-1 ">
        <span class="text-gray-700 dark:text-gray-400">
            Licencia
        </span>
        <select wire:model.defer="licencia.licencia_id"
            class="w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
            <option value="">Seleccionar licencia ...</option>
            @foreach ($licencias as $licencia)
                <option value="{{ $licencia->id }}">{{ $licencia->concept }} </option>
            @endforeach
        </select>
        @error('licencia.licencia_id')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
        @enderror
    </label>
    <label class="w-32 text-sm space-y-1">
        <span class="text-gray-700 dark:text-gray-400">
            Días
        </span>
        <input type="number" min="1" wire:model.defer="licencia.days"
            class="w-full  mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            @error('licencia.days')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
            @enderror
    </label>
</div>
