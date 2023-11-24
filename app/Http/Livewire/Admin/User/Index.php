<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    //public $users;

    public function render()
    {

        $users = User::paginate(10); //dd('llega');
        //dd($users);
        return view('livewire.admin.user.index', [
            'users' => $users
        ])->layout('layouts.admin');;
    }
}
