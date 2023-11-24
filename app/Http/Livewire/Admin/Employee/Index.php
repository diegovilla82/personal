<?php

namespace App\Http\Livewire\Admin\Employee;

use App\Models\Employee;
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
        $empleados = Employee::paginate($this->perPage);
        return view('livewire.admin.employee.index', [
            'empleados' => $empleados
        ])->layout('layouts.admin');
    }
}
