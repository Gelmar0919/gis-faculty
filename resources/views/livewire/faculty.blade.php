<div>
    @if (session()->has('message'))
      <div class="alert alert-success text-center text-success" style="background-color: rgb(224, 240, 223); font-size: 17px">
      <i class="fas fa-circle-check mr-1"></i>{{ session('message') }}</div>
    @endif  
    
    <div class="margin">
        <div class="btn-group pt-1">
            <div class="input-group input-group-sm" style="width: 200px;">
                <input type="text" wire:model.debounce.500ms="search" name="table_search" class="form-control float-right" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome; height: 38px"
                style="height: 38px">
    
            </div>
        </div>
        
        <div class="btn-group pt-1">
        <button type="button" wire:click="$emit('refreshComponent')" class="btn btn-block btn-outline-primary ">
            <i class="fa-solid fa-rotate pr-2"></i>Refresh</button>
        </div>
    
        
        <div class="btn-group pt-1">
        <button type="button" wire:click="addfaculty()" class="btn btn-block btn-outline-primary ">
            <i class="fa-solid fa-plus pr-2"></i>New</button>
        </div>

        
        
    
        <button type="button" wire:click="cleareditvalidation()" id="editagencybutton" style="display: none" class="btn btn-block btn-outline-success "
        data-toggle="modal" data-target="#editagency"></button>
    
        
    
          {{-- number --}}
        <div class="float-md-right pt-1">
    
              <div class="btn-group">
                    {{-- <button class="btn dropdown-toggle" style="border: 1px solid rgb(198, 202, 200)"
                    type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ $perpage }}
                    </button> --}}
                    <button class="btn btn-block btn-outline-primary dropdown-toggle" type="button" 
                            id="dropdownMenuButton" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="true">
                            {{ $perpage }}
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-center" >
                      <a class="dropdown-item" wire:click="pages(10)"  href="#">10</a>
                      <a class="dropdown-item" wire:click="pages(25)" href="#">25</a>
                      <a class="dropdown-item" wire:click="pages(50)" href="#">50</a>
                    </ul> 
              </div>
    
              {{-- ENABLE THIS IF SHOW/HIDE IS REQUIRED --}}
              {{-- <div class="btn-group">
                <button class="btn btn-block btn-outline-success dropdown-toggle" type="button" 
                        id="dropdownMenu1" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="true">
                  Show/Hide Columns
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu checkbox-menu allow-focus" id="aass" aria-labelledby="dropdownMenu1">
                  <div class="mt-1"></div>
                  <li >
                    <div class="custom-control custom-checkbox mx-3 mb-1">
                      <input wire:model="selectedColumns" value='agency_code' class="custom-control-input custom-control-input-success" type="checkbox" id="customCheckbox1" checked>
                      <label for="customCheckbox1" class="custom-control-label" style="font-weight: normal">
                        Code</label>
                    </div>
                  </li>
                  <li >
                    <div class="custom-control custom-checkbox mx-3 mb-1">
                      <input wire:model="selectedColumns" value='agency_name' class="custom-control-input custom-control-input-success" type="checkbox" id="customCheckbox2" checked>
                      <label for="customCheckbox2" class="custom-control-label" style="font-weight: normal">
                        Agency</label>
                    </div>
                  </li>
                </ul>
              </div> --}}
        </div>
    </div>
    
    {{-- table --}}
    <div class="card mt-3 table-responsive p-0"> 
      <table class="table text-nowrap table-striped">
        <thead>
          <tr>
            @if($this->showColumn('row_number'))
            <th ><a role="button" wire:click.prevent="sortField('row_number')" style="width: 20%;">No.
              @include('set-sorting-icons',['field'=>'row_number'])
            </a></th>
            @endif
            @if($this->showColumn('name'))
            <th ><a role="button" wire:click.prevent="sortField('name')" style="width: 20%;">Faculty
              @include('set-sorting-icons',['field'=>'name'])
            </a></th>
            @endif
            @if($this->showColumn('code'))
            <th ><a role="button" wire:click.prevent="sortField('code')" style="width: 20%;">Deparment Code
              @include('set-sorting-icons',['field'=>'code'])
            </a></th>
            @endif
            @if($this->showColumn('position'))
            <th ><a role="button" wire:click.prevent="sortField('contact')" style="width: 20%;">Position
              @include('set-sorting-icons',['field'=>'position'])
            </a></th>
            @endif
           
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
            @forelse ($profiles as $data)
              <tr>
                @if($this->showColumn('row_number'))
                  <td>{{$data->row_number}}</td>
                @endif
                @if($this->showColumn('name'))
                  <td>{{$data->name}}</td>
                @endif
                @if($this->showColumn('code'))
                  <td>{{$data->code}}</td>
                @endif
                @if($this->showColumn('position'))
                  <td>{{$data->position}}</td>
                @endif
                
                
                <td style="text-align: center;">
                  <button class="btn btn-sm btn-primary" wire:click="goto({{$data->id}})"><i class="fas fa-pen-to-square mr-1"></i>Edit</button>
                </td>
              </tr>
                @empty 
              <tr>
                <td 
                colspan="5" 
                style="text-align: center; font-size: 16px;"><span class="text-danger">
                  <i class="fas fa-folder-open mr-2"></i>No Result</span></td>
              </tr>
            @endforelse
        </tbody>
      </table>
    </div>
    
    {{-- 1 to 1 of 1 --}}
   {{--  <style>
      .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #28a745; 
        border-color: #28a745; 
      } 
      .pagination li :active {
        background-color: #28a745;
        color: white;
      }
      .pagination > li :not([aria-current] .page-link) {
        color: #28a745 !important;
      }
    
      .sweet-warning{
        background-color: #55b86c;
      }
      .sweet-warning:not([disabled]):hover{
        background-color: #259e41;
      }
       
    </style> --}}
    
    <div class="margin ">
      <div class="pagination pagination-sm float-right" style="color:green">
        {{$profiles->links()}}
      </div>
      <div class="" >
          <p style="text-align: left">Show {{$profiles->firstItem()}} to {{$profiles->lastItem()}} of <b>{{ $profiles->total() }}</b> results</p>
      </div>
      
    </div>
    
    {{-- add --}}
    <div wire:ignore.self class="modal fade" id="new" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <div class="text-success">
                <h5><i class="fa-solid fa-plus pr-1"></i> Add Agency</h5>
                
                </div>
                <button type="button" class="close" data-dismiss="modal" id="xclose" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
    
            <div class="modal-body">            
                
    
                <form  wire:submit.prevent="save">
    
    
                  
                  <div class="form-group row">
                    <label for="agency_code" class="col-2 pt-1">Code</label>
                    <div class="col-10">
                        <input type="text" id="agency_code" class="form-control" wire:model="agency_code">
                        @error('agency_code')
                            <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
    
                  <div class="form-group row">
                    <label for="agency_name" class="col-2 pt-1">Agency</label>
                    <div class="col-10">
                        <input type="text" id="agency_name" class="form-control" wire:model="agency_name">
                        @error('agency_name')
                            <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                  </div>
    
                  <div class="form-group row">
                    <label for="" class="col-2"></label>
                    <div class="col-10">
                      <button type="button" style="display: none" id="addclose" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn mt-2 btn-md btn-success">Save</button>
                    </div>
                  </div>
                </form>
                
    
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    
      {{-- edit --}}
    <div wire:ignore.self class="modal fade" id="editagency" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <div class="text-success">
              <h5><i class="fa-solid fa-pen-to-square pr-1"></i> Edit Agency</h5>
              </div>
              <button type="button" class="close" data-dismiss="modal" id="xclose" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
    
          <div class="modal-body">            
              
    
              <form  wire:submit.prevent="update">
    
    
                <div class="form-group row">
                  <label for="edit_agency_code" class="col-2 pt-1">Code</label>
                  <div class="col-10">
                      <input type="text" id="edit_agency_code" class="form-control" wire:model="agency_code">
                      @error('agency_code')
                          <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                      @enderror
                  </div>
                </div>
    
                <div class="form-group row">
                  <label for="edit_agency_name" class="col-2 pt-1">Agency</label>
                  <div class="col-10">
                      <input type="text" id="edit_agency_name" class="form-control" wire:model="agency_name">
                      @error('agency_name')
                          <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                      @enderror
                  </div>
                </div>
    
                <div class="form-group row">
                  <label for="" class="col-2"></label>
                  <div class="col-10">
                    <button type="button" style="display: none" id="editclose" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-md  mt-2 btn-success">Update</button>
                  </div>
                </div>
              </form>
    
    
          </div>
      </div>
      <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    
    
    
    <script>
        window.addEventListener('close-modal', event =>{
            $('#addclose').click();
            $('#editclose').click();
        });
        window.addEventListener('show-edit-agency-modal', event =>{
            $('#editagencybutton').click();
        });
    
        $('.checkbox-menu').on('click',function (e) {
          e.stopPropagation();
        });
    
        window.addEventListener('alertsuccess', event => { 
            swal({
              title: event.detail.message,
              text: event.detail.text,
              icon: event.detail.type,
              //timer: 4000,
              buttons: {
                  confirm : {text:'OK',className:'sweet-warning'},
              }
            });
        });
          
    </script>
    
    
    
    