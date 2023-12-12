<?php

namespace App\Http\Livewire\Admin\Employee;

use App\Models\City;
use App\Models\Employee;
use App\Models\Position;
use Livewire\Component;

class Create extends Component
{
    public Employee $empleado;
    public $showModal;
    public $showModalEdit;
    public $cities, $positions;

    protected $rules = [
        //'empleado.username' => 'required',
        'empleado.year_of_income' => 'nullable',
        'empleado.vacation_days' => 'nullable',
        'empleado.state_civil' => 'nullable',
        'empleado.first_name' => 'required',
        'empleado.last_name' => 'required',
        'empleado.dni' => 'required',
        'empleado.birthdate' => 'nullable',
        'empleado.age' => 'nullable',
        'empleado.telephont' => 'nullable',
        'empleado.email' => 'nullable',

        'empleado.city_id' => 'required',
        'empleado.address' => 'nullable',
        'empleado.neighborhood' => 'nullable',
        'empleado.position_id' => 'required',
        'empleado.situation' => 'nullable',

        'empleado.anti_date' => 'nullable',

        'empleado.ley_6039_date' => 'nullable',
        'empleado.anses_date' => 'nullable',

        'empleado.system_date' => 'nullable',

        'empleado.ley_6039_year' => 'nullable',
        'empleado.ley_6039_month' => 'nullable',
        'empleado.ley_6039_day' => 'nullable',
        'empleado.antiquity' => 'nullable',
        'empleado.apartado' => 'nullable',
        'empleado.ceic' => 'nullable',

    ];

    public function mount(Employee $empleado)
    {
        $this->empleado = $empleado;
        $this->showModal = false;
        $this->showModalEdit = false;
        $this->empleado->state_civil = 'soltero';
    }

    public function render()
    {
        $this->cities = City::all();
        $this->positions = Position::all();
        return view('livewire.admin.employee.create');
    }

    public function store()
    {
        //dd($this->empleado);
        $this->validate();

        $this->empleado->save();

        $this->mount(new Employee());

        $this->showModal = false;

        $this->emit('saved');
    }
}
