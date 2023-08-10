<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    public $formId;
    public $showModalEdit = false;
    public Role $role;
    public $permissions;
    public $permisos = [];

    protected $rules = [
        'role.name' => 'required',
        'permisos' => 'nullable'
    ];

    public function mount(Role $role)
    {
        $this->role = $role;
        $this->permissions = Permission::all();
        $this->formId = $role->id;
        //$role->givePermissionTo("editar personal");
        //dd($role->getAllPermissions());
        $this->permisos = $role->getAllPermissions()->pluck('id')->toArray();
        //$this->permisos = $role->getAllPermissions();
        //dd($role->getAllPermissions());
    }

    public function render()
    {
        return view('livewire.admin.role.edit');
    }

    public function update()
    {
        $this->validate();

        //dd($this->permisos);

        $this->role->syncPermissions($this->permisos);

        $this->role->save();

        $this->emitUp('saved');

        $this->showModalEdit = false;
    }



}
