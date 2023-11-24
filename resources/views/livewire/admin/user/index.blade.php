<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="ffont-semibold text-xl text-gray-800 leading-tight">
                {{ __('User') }}

            </h2>
            {{-- @livewire('admin.user.create') --}}
        </div>

    </x-slot>

    <!-- New Table -->

    <div class="w-full overflow-hidden rounded-lg shadow-xs p-4 bg-white">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 text-center">Id</th>
                        <th class="px-4 py-3 text-center">Nombre</th>
                        <th class="px-4 py-3 text-center">E-mail</th>
                        <th class="px-4 py-3 text-center">Roles</th>
                        <th class="px-4 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($users as $user)
                        <tr class="text-gray-700 dark:text-gray-400" wire:key="{{ $user->id }}">
                            <td class="px-4 py-3 text-center">
                                {{ $user->id }}
                            </td>
                            <td class="px-4 py-3 text-center">
                                {{ $user->name }}
                            </td>
                            <td class="px-4 py-3 text-center">
                                {{ $user->email }}
                            </td>
                            <td class="px-4 py-3 text-center">
                                @foreach ($user->roles as $p)
                                    {{ $p->name.', ' }}
                                @endforeach
                            </td>
                            <td class="flex px-4 py-3 justify-center">
                                 {{-- @livewire('admin.user.edit', [$user], key('edit-user' . now() . $user->id))

                                @livewire('admin.user.delete', [$user->id], key('delete-user' . now() . $user->id)) --}}
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
            {{-- <span class="flex items-center col-span-3">
                Showing 21-30 of 100
            </span> --}}
            <span class="col-span-4"></span>
            <!-- Pagination -->
            {{ $users->links() }}

        </div>
    </div>
</div>
