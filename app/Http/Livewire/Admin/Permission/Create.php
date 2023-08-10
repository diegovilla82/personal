<?php

namespace App\Http\Livewire\Admin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Create extends Component
{
    public Permission $permission;
    public $showModal = false;
    public $formId = "";
    public $title = 'Crear permiso';

    protected $rules = [
        'permission.name' => ['required', 'min:4'],
        'permission.description' => ['nullable']
    ];


    public function mount(Permission $permission)
    {
        $this->permission = $permission;
        if (!is_null($permission->id)) {
            $this->title = 'Editar permiso';
            $this->formId = $permission->id;
        }

    }

    public function render()
    {
        return view('livewire.admin.permission.create');
    }

    public function store()
    {
        $this->validate();

        $this->permission->save();

        $this->showModal = false;

        $this->emit('saved');

        $this->mount(new Permission());
    }
}
