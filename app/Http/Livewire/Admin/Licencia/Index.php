<?php

namespace App\Http\Livewire\Admin\Licencia;

use App\Models\Licencia;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'vendor.livewire.custom-pagination-links-view';
    }
    protected $listeners = [
        'saved' => '$refresh'
    ];

    public function render()
    {
        //dd(Auth::user()->employee);d
        $licencias = Licencia::paginate(5);
        return view('livewire.admin.licencia.index',[
            'licencias' => $licencias
        ])->layout('layouts.admin');
    }
}
