<div class="flex">
    <label class="w-full text-sm px-1">
        <span class="text-gray-700 dark:text-gray-400">Ingreso</span>
        <input type="number" wire:model="empleado.year_of_income"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.year_of_income')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
            @enderror
    </label>
    <label class="w-full text-sm px-1">
        <span class="text-gray-700 dark:text-gray-400">Nombre de usuario</span>
        <input wire:model="empleado.username"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.username')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
</div>

<label class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400">Nombre</span>
    <input wire:model="empleado.name"
        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
        placeholder="">
    @error('empleado.name')
        <span class="text-xs text-red-600 dark:text-red-400">
            {{ $message }}
        </span>
    @enderror
</label>
<label class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400">Apellido</span>
    <input wire:model="empleado.last_name"
        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
        placeholder="">
    @error('empleado.last_name')
        <span class="text-xs text-red-600 dark:text-red-400">
            {{ $message }}
        </span>
        @enderror
</label>
<label class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400">DNI</span>
    <input wire:model="empleado.dni"
        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
        placeholder="">
    @error('empleado.dni')
        <span class="text-xs text-red-600 dark:text-red-400">
            {{ $message }}
        </span>
        @enderror
</label>
