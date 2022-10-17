<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Map extends Component
{
    public $department;
    public $faculty;

    public function ketchup(){
        $this->department = DB::table('department')->get();

        $this->faculty = DB::table('faculty')
        //->join('department','department.id', '=' ,'faculty.department_id')
        ->get();
        //dd($this->faculty);
        /* $this->barangays = DB::table('barangay')
        ->select(DB::raw('barangay.name as barangay, 0 as value'))
        ->get(); */
        //dd($this->barangays);
    }

    public function render()
    {
        $this->ketchup();
        return view('livewire.map');
    }
}
