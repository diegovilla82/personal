<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    public Role $role;
    public $showModal = false;
    protected $rules = [
        'role.name' => 'required'
    ];

    public function mount(Role $role)
    {
        $this->role = $role;
        $this->role->guard_name = 'web';
    }

    public function render()
    {
        return view('livewire.admin.role.create');
    }

    public function store()
    {
        $this->validate();

        $this->role->save();

        $this->showModal = false;

        $this->emitUp('saved');
    }
}
