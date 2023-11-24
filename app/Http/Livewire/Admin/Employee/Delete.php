<?php

namespace App\Http\Livewire\Admin\Employee;

use App\Models\Employee;
use Livewire\Component;

class Delete extends Component
{

    public Employee $empleado;

    public function mount(Employee $empleado)
    {
        $this->empleado = $empleado;
    }

    public function render()
    {
        return view('livewire.admin.employee.delete');
    }

    public function delete($id)
    {
        //dd($id);
        $empleado = Employee::find($id);

        $empleado->delete();

        $this->emit('saved');
    }
}
