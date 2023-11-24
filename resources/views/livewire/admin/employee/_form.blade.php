
<div class="text-sm font-semibold">Información personal</div>
<div class="flex space-x-2">
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Nombre</span>
        <input wire:model="empleado.first_name"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.first_name')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>

    <label class="w-full text-sm">
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
    <label class="w-full text-sm">
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
</div>
<div class="flex space-x-2">

    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Fecha de Nacimiento</span>
            <input type="date" wire:model="empleado.birthdate"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="">
            @error('empleado.birthdate')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
            @enderror
    </label>
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Edad</span>
        <input wire:model="empleado.age"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.age')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Estado civil</span>
        <select wire:model="empleado.state_civil"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            <option value="Solter"> Soltero </option>
            <option value="Casado"> Casado </option>
            <option value="Viudo"> Viudo </option>
        </select>
        @error('empleado.state_civil')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
</div>
<hr>
<div class="flex space-x-2">
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">E-mail</span>
        <input wire:model="empleado.email"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.email')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Teléfono</span>
        <input wire:model="empleado.telephont"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.telephont')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
</div>
<hr>
<div class="text-sm font-semibold">Domicilio</div>
<div class="flex space-x-2">
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Localidad</span>
        <select wire:model="empleado.city_id"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            <option value=""> Seleccionar localidad ... </option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}"> {{ $city->name }} </option>
            @endforeach
        </select>
        @error('empleado.city_id')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Dirección</span>
        <input wire:model="empleado.address"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.address')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Barrio</span>
        <input wire:model="empleado.neighborhood"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.neighborhood')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
</div>
<hr>
<div class="text-sm font-semibold">Información laboral</div>
<div class="flex">
    {{-- <label class="w-full text-sm px-1">
        <span class="text-gray-700 dark:text-gray-400">Nombre de usuario</span>
        <input wire:model="empleado.username"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        @error('empleado.username')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label> --}}
    <label class="w-full text-sm px-1">
        <span class="text-gray-700 dark:text-gray-400">Ingreso</span>
        <input type="number" wire:model="empleado.year_of_income"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        @error('empleado.year_of_income')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
    <label class="w-full text-sm px-1">
        <span class="text-gray-700 dark:text-gray-400">Días de vacaciones</span>
        <input type="number" wire:model="empleado.vacation_days"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        @error('empleado.vacation_days')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
</div>
<hr>
<div class="flex space-x-2">
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Situación</span>
        <select wire:model="empleado.situation"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            <option value="Activo"> Activo </option>
            <option value="No Activo"> No Activo </option>
        </select>
        @error('empleado.situation')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
    <label class="w-full text-sm">
        <span class="text-gray-700 dark:text-gray-400">Categoría</span>
        <select wire:model="empleado.position_id"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            <option value=""> Seleccionar categoría ... </option>
            @foreach ($positions as $position)
                <option value="{{ $position->id }}"> {{ $position->name }} </option>
            @endforeach
        </select>
        @error('empleado.position_id')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
    <label class="w-1/2 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Apartado</span>
        <input wire:model="empleado.apartado"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="">
        @error('empleado.apartado')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
    <label class="w-1/2 text-sm">
        <span class="text-gray-700 dark:text-gray-400">CEIC</span>
        <input wire:model="empleado.ceic"
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        @error('empleado.ceic')
            <span class="text-xs text-red-600 dark:text-red-400">
                {{ $message }}
            </span>
        @enderror
    </label>
</div>
<hr>
<div class="text-sm font-semibold">Antiguedad Bonificable</div>
<div class="flex w-full space-x-8">
        <label class="w-full text-sm">
            <span class="text-gray-700 dark:text-gray-400">Antiguedad</span>
            <input type="date" wire:model="empleado.anti_date"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="">
            @error('empleado.anti_date')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </label>
        <label class="w-full text-sm">
            <span class="text-gray-700 dark:text-gray-400">Fecha de Sistema</span>
            <input wire:model="empleado.system_date"
                type="date"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                >
            @error('empleado.system_date')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </label>
        <label class="w-full text-sm">
            <span class="text-gray-700 dark:text-gray-400">Ley 6039</span>
            <input type="date" wire:model="empleado.ley_6039_date"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="">
            @error('empleado.ley_6039_year')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </label>
        <label class="w-full text-sm">
            <span class="text-gray-700 dark:text-gray-400">ANSES</span>
            <input type="date" wire:model="empleado.anses_date"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                >
            @error('empleado.anses_date')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </label>

</div>

