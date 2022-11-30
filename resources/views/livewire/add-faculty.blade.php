
<form wire:submit.prevent="save" enctype="multipart/form-data">
    
    <div class="row">
        
        <div class="col-lg-6 mb-3 mt-2">
            {{-- @csrf --}}
            
            <div class="form-group">
                <label >Name</label>
                <input wire:model.lazy="name" type="text" class="form-control" placeholder="Name">
                @error('name')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Spouse</label>
                <input wire:model.lazy="spouse" type="text" class="form-control" placeholder="Spouse">
                @error('spouse')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Gender</label>
                
                <select class="form-control" wire:model="gender" >
                    <option selected></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                @error('gender')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label >Address</label>
                <input wire:model.lazy="address" type="text" class="form-control" placeholder="Address">
                @error('address')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>

            {{-- <div class="form-group">
                <label >Email</label>
                <input wire:model.lazy="email" type="email" class="form-control" placeholder="Email">
                @error('email')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div> --}}
            {{-- <div class="form-group">
                <label >Contact</label>
                <input wire:model.lazy="contact" type="text" class="form-control" placeholder="Contact">
                @error('contact')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div> --}}
            {{-- <div class="form-group">
                <label >FB Name</label>
                <input wire:model.lazy="fb" type="text" class="form-control" placeholder="FB Name">
                @error('fb')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div> --}}
            <div class="form-group">
                <label >Birthday</label>
                <div class="input-group" >
                    <input type="text" name="birthday" wire:model="birthday" class="form-control" 
                    onchange="this.dispatchEvent(new InputEvent('input'))"/>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                @error('birthday')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Civil Status</label>
                {{-- <input wire:model.lazy="cstatus" type="text" class="form-control" placeholder="Civil Status"> --}}
                <select class="form-control" wire:model="cstatus" >
                    <option selected></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                </select>
                @error('cstatus')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label >Schedule SY:</label>
                <input wire:model.lazy="scheduleSY" type="text" class="form-control" placeholder="Schedule SY">
                @error('scheduleSY')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div> --}}
            <div class="mt-4">
                <form method="post" id="image-form">
                    <input type="file" name="img[]" wire:model="photo" class="file" accept="image/*">
                    <div class="input-group my-3">
                    <input type="text" class="form-control" disabled placeholder="Choose Image" id="file">
                    <div class="input-group-append">
                        <button type="button" class="browse btn btn-primary">Browse</button>
                    </div>
                    
                    </div>
                </form>
            </div>
            <div class="container" wire:ignore>
                <div class="col-12 d-flex justify-content-center" >
                    <img src="{{ asset('imgs/faculties/static/default.jpg') }}" id="preview" class="img-thumbnail img-fluid" style="object-fit: contain; height: 400px;">
                </div>
            </div>
            
    
           
    
        </div>
        
        <div class="col-lg-6 mt-2">
            <div class="form-group">
                <label>Department</label>
                
                <select class="form-control" wire:model="department_id" >
                    <option selected></option>
                    @foreach ($departments as $data)
                        <option value="{{$data->id}}">{{$data->department}}</option>
                    @endforeach

                </select>
                @error('department_id')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Current Position</label>
                <input wire:model.lazy="position" type="text" class="form-control" placeholder="Position">
                @error('position')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Description</label>
                <input wire:model.lazy="description" type="text" class="form-control" placeholder="Description">
                @error('description')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Subjects:</label>
                <input wire:model.lazy="subjects" type="text" class="form-control" placeholder="Subjects">
                @error('subjects')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label >Baccalaureate Degree:</label>
                <input wire:model.lazy="bd" type="text" class="form-control" placeholder="Baccalaureate Degree">
                @error('bd')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Year Graduated:</label>
                <input wire:model.lazy="bdy" type="text" class="form-control" placeholder="Year Graduated">
                @error('bdy')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Masters Degree:</label>
                <input wire:model.lazy="md" type="text" class="form-control" placeholder="Masters Degree">
                @error('md')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Year Graduated:</label>
                <input wire:model.lazy="mdy" type="text" class="form-control" placeholder="Year Graduated">
                @error('mdy')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Doctors Degree:</label>
                <input wire:model.lazy="dd" type="text" class="form-control" placeholder="Doctors Degree">
                @error('dd')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label >Year Graduated:</label>
                <input wire:model.lazy="ddy" type="text" class="form-control" placeholder="Year Graduated">
                @error('ddy')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>

            
    
        </div>

        <input wire:model="lat" id="lang" type="text" class="form-control" style="display: none">
        <input wire:model="lang" id="lat" type="text" class="form-control" style="display: none">
        
        <div class="container col-12 mb-3 mt-2">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="javascript:history.back()" type="button" class="btn btn-secondary" ><span class=" pr-2 nav-icon fas fa-xmark">
                    </span>Cancel</a>
                    <button type="submit" class="btn btn-primary"><span class=" pr-2 nav-icon fas fa-floppy-disk">
                    </span>Save</button>
                </div>
            </div>
        </div>
    
        @if($errors->any())
            <script>
                document.addEventListener('message', function () {
                    swal("Missing/Error input detected", "Please review input requirements",'error')
                })
            </script>
        @endif


        <script>
              $(function() {
                     $('input[name="birthday"]').daterangepicker({
                       singleDatePicker: true,
                       showDropdowns: true,
                       minYear: 1901,
                       maxYear: parseInt(moment().format('YYYY'),10)
                     }, function(start, end, label) {
                     });
                   });
           
        
           $(document).on("click", ".browse", function() {
                   var file = $(this).parents().find(".file");
                   file.trigger("click");
                   });
                   $('input[type="file"]').change(function(e) {
                   var fileName = e.target.files[0].name;
                   $("#file").val(fileName);
        
                   var reader = new FileReader();
                   reader.onload = function(e) {
                       document.getElementById("preview").src = e.target.result;
                   };
                   reader.readAsDataURL(this.files[0]);
                   });
        </script>

    </div>
    
    
    </form>
    
    
    
