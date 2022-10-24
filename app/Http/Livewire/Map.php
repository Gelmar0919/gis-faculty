<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use File;

class Map extends Component
{
    public $department;
    public $faculty;
    public $extensions = array();
    public $extensionsfaculty = array();

    public function ketchup(){
        $this->department = DB::table('department')->get();

        $this->faculty = DB::table('faculty')
        //->join('department','department.id', '=' ,'faculty.department_id')
        ->get();

        $filesInFolder = File::files(public_path("imgs\depts\dynamic"));   
        //$this->extensions = array();
        foreach($filesInFolder as $path) { 
            $file = pathinfo($path);
            $this->extensions[$file['filename']] = $file['extension'];
            
            //dd($file['extension']);  

        } 

        $filesInFolder = File::files(public_path("imgs\\faculties\\dynamic"));   
        //$this->extensions = array();
        foreach($filesInFolder as $path) { 
            $file = pathinfo($path);
            $this->extensionsfaculty[$file['filename']] = $file['extension'];
            
            //dd($file['extension']);  

        } 
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
