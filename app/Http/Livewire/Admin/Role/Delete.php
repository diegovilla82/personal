<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Delete extends Component
{
    public $showModalDelete = false;

    public function mount(Role $role)
    {
        $this->role = $role;
    }

    public function render()
    {
        return view('livewire.admin.role.delete');
    }

    public function delete($id)
    {
        $role = Role::find($id);

        $role->delete();

        $this->showModalDelete = false;

        $this->emitUp('saved');
    }
}
