<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use WithPagination;

    protected $listeners = [
        'saved' => '$refresh'
    ];

    public function render()
    {
        $roles = Role::paginate();
        //dd($roles);
        return view('livewire.admin.role.index', [
            'roles' => $roles
        ])->layout('layouts.admin');
    }
}
