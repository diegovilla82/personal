<div class="flex flex-col space-y-4">
    <div class="flex justify-start items-center text-sm">
        <input class="me-2" wire:model="licencia.is_active" type="checkbox" /> Activo
    </div>
    <div class="flex space-x-2 w-full">
        <label for="" class="flex flex-col text-sm w-full space-y-1">
            <span>Descripción</span>
            <input type="text"  wire:model='licencia.concept' placeholder='Descripción de la licencia' />
            @error('licencia.concept')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </label>
        <label for="" class="flex flex-col text-sm w-32 space-y-1">
            <span>Días</span>
            <input type="number" min="1" wire:model="licencia.days" />
            @error('licencia.days')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </label>
    </div>
</div>
