<?php

namespace App\Http\Livewire\Admin\Permission;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    use WithPagination;

    protected $listeners = [
        'saved' => '$refresh'
    ];

    public function render()
    {
        $permissions = Permission::paginate();
        //dd($roles);
        return view('livewire.admin.permission.index', [
            'permissions' => $permissions
        ])->layout('layouts.admin');
    }

}
