<?php

namespace App\Http\Livewire\Front\LicenciaUsuario;

use App\Models\Licencia;
use App\Models\LicenciaUser;
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

    public $perPage = 5;

    protected $listeners = [
        'saved' => '$refresh'
    ];

    public function render()
    {
        
        $licenciasSolicitadas = LicenciaUser::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(5);//Auth::user()->licencias;
        //dd($this->licenciasSolicitadas);
        return view('livewire.front.licencia-usuario.index', [
            'licenciasSolicitadas' =>    $licenciasSolicitadas
        ])->layout('layouts.admin');
    }
}
