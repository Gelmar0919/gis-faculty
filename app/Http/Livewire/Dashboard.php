<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Validation\Rule;

class Dashboard extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshComponent' => '$refresh'];
    public $perpage = 25, $search;
    public $totalfaculties;

    public $sortField = 'name';
    public $sortAsc = true;
    public $totaldeps;

    //public $columns = ['deparment','address','birthday','barangay'];
    public $selectedColumns = [];
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
    public function pages($pages){
        $this->perpage = $pages;
    }
    public function render()
    {
        $this->totalfaculties = DB::table('faculty')
        ->select(DB::raw('count(id) as total'))
        ->get();

        $this->totaldeps = DB::table('department')
        ->select(DB::raw('count(id) as total'))
        ->get();

        /* $papa = DB::table('faculty')
        ->select(DB::raw('count(faculty.id) as count'),'department.barangay')
        ->rightJoin('department','faculty.department_id','=','department.id')
        ->where('department.department', 'like', '%'.$this->search.'%')
        ->groupBy('department.department')
        ->orderBy('count','desc');

        dd($papa); */

        return view('livewire.dashboard',[
            'profiles' => DB::table('faculty')
            ->select(DB::raw('count(faculty.id) as count'),'department.department')
            ->rightJoin('department','faculty.department_id','=','department.id')
            ->where('department.department', 'like', '%'.$this->search.'%')
            ->groupBy('department.department')
            ->orderBy('count','desc')
            ->paginate($this->perpage)
        ]);
    }
}
