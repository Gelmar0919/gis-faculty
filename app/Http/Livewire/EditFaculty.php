<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Support\Facades\DB;
use DateTime;

class EditFaculty extends Component
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
    public $faculty_id;
    public $papaketchup;
    public $image;
    public $extensions;

    public function update(){
        $this->dispatchBrowserEvent('message');

        $this->validate([
            'name' => ['required','regex:/^[a-zA-Z\s]+$/'],
            'gender' => ['required'],
            'address' => ['required','regex:/^[a-zA-Z0-9,\s]+$/'],
            'email' => ['required','email'],
            'contact' => ['required'],
            'cstatus' => ['required'],
            'department_id' => ['required'],
            'position' => ['required'],
            
        ],[
            'name.required' => "Name required",
            'name.regex' => "Invalid",
            'gender.required' => "Gender required",
            'address.required' => "Address required",
            'address.regex' => "Invalid",
            'email.required' => "Email required",
            'contact.required' => "Contact required",
            'cstatus.required' => "Civil status required",
            'department_id.required' => "Department required",
            'position.required' => "Position required",
        ]);


        DB::table('faculty')
        ->where('id', $this->faculty_id)
        ->update(
                [
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
                ]
        );



        $filename = `imgs\\faculties\\dynamic\\`.$this->faculty_id.".".$this->extensions[$this->faculty_id];
        if($this->photo != ""){
            /* File::copy(public_path($filename), public_path($filename));
        }else{ */
            $filesInFolder = File::files(public_path("imgs\\faculties\\dynamic"));   
            foreach($filesInFolder as $path) { 
                $file = pathinfo($path);
                if($file['filename'] == $this->faculty_id){
                    File::delete($path);
                }
            } 
            //dd($papapa);

            $img = $this->faculty_id.".".$this->photo->getClientOriginalExtension();
           
            $this->photo->storeAs('imgs/faculties/dynamic', $img, 'real_public');
        };

        redirect()->route('faculty');
    }

    public function mount($faculty_id)
    {   
        $this->faculty_id = $faculty_id;
        $this->papaketchup = DB::table('faculty')
        ->select('faculty.id', 'faculty.name', 'faculty.gender', 'faculty.address', 'faculty.birthday','department.department',
        'faculty.contact', 'faculty.fb', 'faculty.email', 'faculty.cstatus', 'faculty.position','faculty.scheduleSY','faculty.department_id')
        ->join('department','department.id','=','faculty.department_id')
        ->where("faculty.id",'=',$faculty_id)
        ->get();

        $data = $this->papaketchup[0];
        
        $this->name = $data->name;
        $this->gender = $data->gender;
        $this->address = $data->address;
        $this->birthday = date_format(new DateTime($data->birthday),"m/d/Y");
        $this->department_id = $data->department_id;
        $this->contact = $data->contact;
        $this->fb = $data->fb;
        $this->email = $data->email;
        $this->cstatus = $data->cstatus;
        $this->position = $data->position;
        $this->scheduleSY = $data->scheduleSY;
        
        
        $filesInFolder = File::files(public_path("imgs\\faculties\\dynamic"));   
        //$this->extensions = array();
        foreach($filesInFolder as $path) { 
            $file = pathinfo($path);
            if($file['filename'] == $faculty_id){
                $this->image = $file['filename'].".".$file['extension'];
                $this->extensions[$file['filename']] = $file['extension'];
                //dd($this->image);
            }
            //$this->extensionsfaculty[$file['filename']] = $file['extension'];
        } 
    }

    public function render()
    {
        $this->departments = DB::table('department')->get();
        return view('livewire.edit-faculty');
    }
}
