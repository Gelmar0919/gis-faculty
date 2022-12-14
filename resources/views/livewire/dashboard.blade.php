<div class=" mx-2 my-2">
    <div class="card-header">
        <div class="row">
              
                
                    <div class="col-md-6 col-12">       
                        <div id="medium" class="small-box bg-primary" >
                            <div class="inner">
                                <h3> <span></span> Faculty</h3>
                
                                <p> <h4>Total: {{ $totalfaculties[0]->total }}</h4> </p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-user-tie"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div id="medium" class="small-box bg-info" >
                            <div class="inner">
                                <h3> <span></span> Department</h3>
                
                                <p> <h4>Total: {{ $totaldeps[0]->total }}</h4> </p>
                            </div>
                            <div class="icon ">
                            <i class="fas fa-building"></i>
                            </div>
                        </div>
                    </div>
            
        </div>
      
      
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <div class="margin mt-2 mb-2">
            <div class="btn-group pt-1">
                <div class="input-group input-group-sm" style="width: 200px;">
                    <input autocomplete="off" type="text" wire:model.debounce.500ms="search" name="table_search" 
                    class="form-control form-control-sm float-right" placeholder="&#xF002; Search" 
                    style="font-family:Arial, FontAwesome; "
                    style="height: 38px">
                </div>
            </div>
            
            
            
            <div class="float-right pt-1">
        
                  <div class="btn-group">
                        {{-- <button class="btn dropdown-toggle" style="border: 1px solid rgb(198, 202, 200)"
                        type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ $perpage }}
                        </button> --}}
                        <button class="btn btn-sm btn-block btn-outline-primary dropdown-toggle" type="button" 
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
       
    <div class="card">
      <table class=" table table-sm">
        <thead class="">
          <tr>
            <th style="width: 30%" >Department</th>
            <th style="width: 40px; text-align: center">Total</th>
            <th style="width: 60%"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($profiles as $data)
            <tr>
                <td>{{ $data->department }}</td>
                <td style="text-align: center">{{ $data->count }}</td>
                <td>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-primary" style="width: {{ ($data->count / $highest[0]->count) * 100 }}%;"></div>
                </div>
                </td>
            </tr>
            @empty 
            @endforelse

        </tbody>
      </table>
    </div>
      <div class="margin mt-3">
        <div class="pagination pagination-sm float-right" >
          {{$profiles->links()}}
        </div>
        <div class="" >
            <p style="text-align: left">Show {{$profiles->firstItem()}} to {{$profiles->lastItem()}} </p>
        </div>
        
      </div>
    <!-- /.card-body -->
  </div>
</div>
