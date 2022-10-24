<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Validation\Rule;

class Faculty extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshComponent' => '$refresh'];
    public $perpage = 10, $search;
   
    public $agency_code, $agency_name, $agency_edit_id;
    public $sortField = 'row_number';
    public $sortAsc = true;

    public $columns = ['row_number','name','gender','address','contact','fb','email','position','cstatus','code'];
    public $selectedColumns = [];

    public function goto($id){
        return redirect()->route('editFaculty', ['id' => $id]);
    }

    public function mount()
    {
        $this->selectedColumns = $this->columns;
    }
    
    public function showColumn($column)
    {
        return in_array($column, $this->selectedColumns);
    }

    public function sortField($field){
        if ($this->sortField == $field){
            $this->sortAsc = !$this->sortAsc;
        }else{
            $this->sortAsc = true;
        }
        $this->sortField = $field;

    }

    public function clear()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->agency_code = '';
        $this->agency_name = '';
    }

    public function cleareditvalidation()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function pages($pages){
        $this->perpage = $pages;
    }

    
    public function update()
    {
        
         //on form submit validation
         $this->validate([
            'agency_code' => ['required',Rule::unique('agency')->ignore($this->agency_edit_id, 'id')],
            'agency_name' => ['required',Rule::unique('agency')->ignore($this->agency_edit_id, 'id')],
        ]);
        //edit Student Data
        $agency = agencies::where('id', $this->agency_edit_id)->first();;
        $agency->agency_code = $this->agency_code;
        $agency->agency_name = $this->agency_name;
        $agency->save();

        //Use this if swal doesnt work
        //session()->flash('message', 'Agency has been updated successfully');

        
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('alertsuccess', [
            'type' => 'success',  
            'message' => 'Agency has been updated successfully!', 
            'text' => 'Code: '.$this->agency_code
        ]);

        $this->agency_code = '';
        $this->agency_name = '';
    }

    public function save()
    {
        
         //on form submit validation
         $this->validate([
            'agency_code' => 'required|unique:agency',
            'agency_name' => 'required|unique:agency',
        ]);


        //Add Student Data
        $agency = new agencies();
        $agency->agency_code = $this->agency_code;
        $agency->agency_name = $this->agency_name;
        $agency->save();

        //Use this alert if swal doesnt work
        //session()->flash('message', 'New Agency has been added successfully');

        

        //For hide modal after add student success
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('alertsuccess', [
            'type' => 'success',  
            'message' => 'New Agency has been added successfully!', 
            'text' => 'Code: '.$this->agency_code
        ]);

        $this->agency_code = '';
        $this->agency_name = '';
       
    }

    public function editagency($id)
    {
        $agency = agencies::where('id', $id)->first();
        //dd($this->edit_agency_code);


        $this->agency_edit_id = $id;

        $this->agency_code = $agency->agency_code;
        $this->agency_name = $agency->agency_name;

        //dd($this->edit_agency_code);
        $this->dispatchBrowserEvent('show-edit-agency-modal');
    }

    public function addfaculty()
    {
        return redirect()->route('newFaculty');
        //return view("new-profile");
    }
    

    public function render()
    {
        return view('livewire.faculty',[
            'profiles' => DB::table('faculty')
            ->select(DB::raw('ROW_NUMBER() OVER(order BY faculty.id) AS row_number'),
            'faculty.name','faculty.gender','faculty.address',DB::raw("DATE_FORMAT(faculty.birthday, '%m %d, %Y') as birthday"),
            'faculty.contact','faculty.fb','faculty.email','faculty.position','faculty.cstatus','faculty.scheduleSY',
            'department.code','department.department','faculty.id')
            ->join('department','department.id', '=' ,'faculty.department_id')
            ->where('faculty.address', 'like', '%'.$this->search.'%')
            ->orWhere('faculty.position', 'like', '%'.$this->search.'%')
            ->orWhere('faculty.name', 'like', '%'.$this->search.'%')
            ->orWhere('faculty.cstatus', 'like', '%'.$this->search.'%')
            ->orWhere('faculty.email', 'like', '%'.$this->search.'%')
            ->orWhere('faculty.fb', 'like', '%'.$this->search.'%')
            ->orderBy($this->sortField,$this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perpage)
            
        ]);
    }
}

