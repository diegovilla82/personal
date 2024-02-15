<?php

namespace App\Http\Livewire\Admin\Employee;

use App\Models\City;
use App\Models\Position;
use App\Models\Employee;
use Livewire\Component;

class Edit extends Component
{
    public $formId;

    public Employee $empleado;
    public $cities, $positions;

    protected $rules = [
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

        //'empleado.anti_date' => 'nullable',
        'empleado.anti_year' => 'nullable',
        'empleado.anti_month' => 'nullable',
        'empleado.anti_day' => 'nullable',

        //'empleado.ley_6039_date' => 'nullable',
        'empleado.ley_6039_year' => 'nullable',
        'empleado.ley_6039_month' => 'nullable',
        'empleado.ley_6039_day' => 'nullable',

        //'empleado.anses_date' => 'nullable',
        'empleado.anses_year' => 'nullable',
        'empleado.anses_month' => 'nullable',
        'empleado.anses_day' => 'nullable',

        //'empleado.system_date' => 'nullable',
        'empleado.sys_year' => 'nullable',
        'empleado.sys_month' => 'nullable',
        'empleado.sys_day' => 'nullable',

        'empleado.antiquity' => 'nullable',

        'empleado.apartado' => 'nullable',
        'empleado.ceic' => 'nullable',
    ];

    public function mount(Employee $empleado)
    {
        $this->empleado = $empleado;
        $this->formId = $this->empleado->id;
    }
    public function render()
    {
        $this->cities = City::all();
        $this->positions = Position::all();
        return view('livewire.admin.employee.edit');
    }

    public function update()
    {
        //dd($this->empleado);
        $this->validate();

        $this->empleado->save();

        $this->emit('saved');
    }
}
