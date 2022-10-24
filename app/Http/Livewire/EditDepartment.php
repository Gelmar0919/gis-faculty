<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Support\Facades\DB;
use DateTime;

class EditDepartment extends Component
{
    use WithFileUploads;
    public $lat = "";
    public $lang = "";
    public $code, $department;
    public $photo = "";
    public $department_id;
    public $papaketchup;
    public $extensions;

    

    public function update()
    {
        $this->dispatchBrowserEvent('message');

        $this->validate([
            'code' => ['required',Rule::unique('department')->ignore($this->department_id, 'id')],
            'department' => ['required',Rule::unique('department')->ignore($this->department_id, 'id')],
            'lat' => ['required'],
        ],[
            'code.required' => "Code required",
            'department.required' => "Department required",
            'code.unique' => "Code already exist",
            'department.unique' => "Department already exist"
        ]);

        /* $newid = DB::table('department')->insertGetId(
            array(
                'code' => $this->code, 
                'department' => $this->department,
                'latitude' => $this->lat,
                'longitude' => $this->lang
                )
        ); */
        DB::table('department')
        ->where('id', $this->department_id)
        ->update(
                ['code' => $this->code, 
                'department' => $this->department,
                'latitude' => $this->lat,
                'longitude' => $this->lang]
        );
        
        //dd($newid);
        
       

        $filename = `imgs/depts/dynamic/`.$this->department_id.".".$this->extensions[$this->department_id];
        if($this->photo != ""){
            /* File::copy(public_path($filename), public_path($filename));
        }else{ */
            $filesInFolder = File::files(public_path("imgs\depts\dynamic"));   
            foreach($filesInFolder as $path) { 
                $file = pathinfo($path);
                if($file['filename'] == $this->department_id){
                    File::delete($path);
                }
            } 
            //dd($papapa);

            $img = $this->department_id.".".$this->photo->getClientOriginalExtension();
           
            $this->photo->storeAs('imgs/depts/dynamic', $img, 'real_public');
        };

        

        redirect()->route('department');
        //return view('livewire.edit-department');
    }

    public function mount($department_id)
    {   
        $this->department_id = $department_id;
        $this->papaketchup = DB::table('department')
        ->select('id', 'code', 'department', 'latitude', 'longitude')
        ->where("id",'=',$this->department_id)
        ->get();

        $data = $this->papaketchup[0];
        
        $this->code = $data->code;
        $this->department = $data->department;
        $this->lat = $data->latitude;
        $this->lang = $data->longitude;
        
        

        $filesInFolder = File::files(public_path("imgs\depts\dynamic"));   
        //$this->extensions = array();
        foreach($filesInFolder as $path) { 
            $file = pathinfo($path);
            $this->extensions[$file['filename']] = $file['extension'];
        } 
    }

    public function render()
    {
        return view('livewire.edit-department');
    }
}
