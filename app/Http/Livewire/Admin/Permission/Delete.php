<?php

namespace App\Http\Livewire\Admin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Delete extends Component
{
    public Permission $permission;
    public $openModalDelete = false;
    public $formId;

    public function mount(Permission $permission)
    {
        $this->permission = $permission;
        $this->formId = $permission->id;
    }
    public function render()
    {
        return view('livewire.admin.permission.delete');
    }

    public function delete()
    {
        $this->permission->delete();

        $this->openModalDelete = false;

        $this->emit('saved');
    }
}
