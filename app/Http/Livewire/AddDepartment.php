<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Support\Facades\DB;
use DateTime;

class AddDepartment extends Component
{
    use WithFileUploads;
    public $lat = "";
    public $lang = "";
    public $code, $department;
    public $photo = "";

    public function save(){
        $this->dispatchBrowserEvent('message');

        $this->validate([
            'code' => ['required',Rule::unique('department')],
            'department' => ['required',Rule::unique('department')],
            'lat' => ['required'],
        ],[
            'code.required' => "Code required",
            'department.required' => "Department required",
            'code.unique' => "Code already exist",
            'department.unique' => "Department already exist"
        ]);

        $newid = DB::table('department')->insertGetId(
            array(
                'code' => $this->code, 
                'department' => $this->department,
                'latitude' => $this->lat,
                'longitude' => $this->lang
                )
        );

        //dd($newid);
        $filename = 'imgs\\depts\\dynamic\\'.$newid.".png";
        $filesInFolder = File::files(public_path("imgs\depts\dynamic"));   
            foreach($filesInFolder as $path) { 
                $file = pathinfo($path);
                if($file['filename'] == $newid){
                    File::delete($path);
                }
            } 
        if($this->photo == ""){
            File::copy(public_path("imgs\depts\static\default.png"), public_path($filename));
        }else{

            $img = $newid.".".$this->photo->getClientOriginalExtension();
            $this->photo->storeAs('imgs/depts/dynamic', $img, 'real_public');
        };

        redirect()->route('department');
    }


    public function render()
    {
        return view('livewire.add-department');
    }
}
