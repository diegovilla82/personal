<?php

namespace App\Http\Livewire\Admin\Personal;

use App\Models\Personal;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    public $perPage = 5;

    public function paginationView()
    {
        return 'vendor.livewire.custom-pagination-links-view';
    }

    protected $listeners = [
        'saved' => '$refresh',
    ];

    public function render()
    {
        $empleados = Personal::paginate($this->perPage);
        return view('livewire.admin.personal.index', [
            'empleados' => $empleados
        ])->layout('layouts.admin');
    }
}
