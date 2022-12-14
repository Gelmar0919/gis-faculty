<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Support\Facades\DB;
use DateTime;

class AddFaculty extends Component
{
    use WithFileUploads;
    public $name;
    public $gender;
    public $address;
    public $email;
    public $contact;
    public $fb;
    public $birthday;
    public $cstatus;
    public $department_id;
    public $scheduleSY;
    public $position;
    public $photo;
    public $departments;

    public $subjects;
    public $bd;
    public $bdy;
    public $md;
    public $mdy;
    public $dd;
    public $ddy;

    public $spouse;
    public $description;
    public $positionstatus = "COS";


    public function save(){
        $this->dispatchBrowserEvent('message');

        $this->validate([
            'name' => ['required','regex:/^[.a-zA-Z\s]+$/'],
            'gender' => ['required'],
            'address' => ['required','regex:/^[a-zA-Z0-9,\s]+$/'],
            //'email' => ['required','email'],
            //'contact' => ['required'],
            'cstatus' => ['required'],
            'department_id' => ['required'],
            'position' => ['required'],
            
        ],[
            'name.required' => "Name required",
            'name.regex' => "Invalid",
            'gender.required' => "Gender required",
            'address.required' => "Address required",
            'address.regex' => "Invalid",
            //'email.required' => "Email required",
            //'contact.required' => "Contact required",
            'cstatus.required' => "Civil status required",
            'department_id.required' => "Department required",
            'position.required' => "Position required",
        ]);

        //dd($this->department_id);
        $newid = DB::table('faculty')->insertGetId(
            array(
                'department_id' => $this->department_id, 
                'name' => $this->name, 
                'gender' => $this->gender, 
                'address' => $this->address, 
                'birthday' => date_format(new DateTime($this->birthday),"Y-m-d H:i:s"),
                'contact' => $this->contact, 
                'fb' => $this->fb, 
                'email' => $this->email, 
                'cstatus' => $this->cstatus, 
                'position' => $this->position, 
                'scheduleSY' => $this->scheduleSY, 
                'subjects' => $this->subjects, 
                'bd' => $this->bd, 
                'bdy' => $this->bdy, 
                'md' => $this->md, 
                'mdy' => $this->mdy, 
                'dd' => $this->dd, 
                'ddy' => $this->ddy, 
                'spouse' => $this->spouse, 
                'description' => $this->description, 
                'positionstatus' => $this->positionstatus, 
                )
        );

        //dd($newid);
        $filename = 'imgs/faculties/dynamic/'.$newid.".png";
        $filesInFolder = File::files(public_path("imgs/faculties/dynamic"));   
            foreach($filesInFolder as $path) { 
                $file = pathinfo($path);
                if($file['filename'] == $newid){
                    File::delete($path);
                }
            } 
        if($this->photo == ""){
            File::copy(public_path("imgs/faculties/static/default.jpg"), public_path($filename));
        }else{

            $img = $newid.".".$this->photo->getClientOriginalExtension();
            $this->photo->storeAs('imgs/faculties/dynamic', $img, 'real_public');
        };

        redirect()->route('faculty');
    }

    public function render()
    {
        $this->departments = DB::table('department')->get();
        return view('livewire.add-faculty');
    }
}
