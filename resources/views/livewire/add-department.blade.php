
<form wire:submit.prevent="save" enctype="multipart/form-data">
    
    <div class="row">
        
        <div class="col-lg-6 mb-3 mt-2">
            {{-- @csrf --}}
            
            <div class="form-group">
                <label >Department Code</label>
                <input wire:model.lazy="code" type="text" class="form-control" placeholder="Department Code">
                @error('code')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="form-group">
                <label >Department Name</label>
                <input wire:model.lazy="department" type="text" class="form-control" placeholder="Department Name">
                @error('department')
                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <form method="post" id="image-form">
                    <input type="file" name="img[]" wire:model="photo" class="file" accept="image/*">
                    <div class="input-group my-3">
                    <input type="text" class="form-control" disabled placeholder="Upload Logo" id="file">
                    <div class="input-group-append">
                        <button type="button" class="browse btn btn-primary">Browse</button>
                    </div>
                    
                    </div>
                </form>
            </div>
            <div class="container" wire:ignore>
                <div class="col-12 d-flex justify-content-center" >
                    <img src="{{ asset('imgs/depts/static/default.png') }}" id="preview" class="img-thumbnail img-fluid" style="object-fit: contain; height: 400px;">
                </div>
            </div>
    
           
    
        </div>
        
        <div class="col-lg-6 mt-2">
            @error('lat')
        <label class="mx-2 d-flex justify-content-center text-danger"><span class="mt-1 pr-1 nav-icon fas fa-circle-exclamation">
        </span>Please select building on map</label>
        @enderror
            <div wire:ignore class="col-12 card" id="mapcontain">
                <label class="mx-2 mt-3 d-flex justify-content-center text-primary"><span class="mt-1 pr-1 nav-icon fas fa-location-dot">
                </span>Select Location</label>
                
                <div  class="mb-2" id="ndep" style="height: 600px;"></div>
            </div>
            
    
        </div>
        {{-- <label class="mx-2 d-flex justify-content-center text-danger"><span class="mt-1 pr-1 nav-icon fas fa-circle-exclamation">
        </span>Please select barangay</label> --}}

        
        
        
        
        <input wire:model="lat" id="lang" type="text" class="form-control" style="display: none">
        <input wire:model="lang" id="lat" type="text" class="form-control" style="display: none">
        
        
        <div class="container col-12 mb-3">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="javascript:history.back()" type="button" class="btn btn-secondary" ><span class=" pr-2 nav-icon fas fa-xmark">
                    </span>Cancel</a>
                    <button type="submit" class="btn btn-primary"><span class=" pr-2 nav-icon fas fa-floppy-disk">
                    </span>Save</button>
                </div>
            </div>
        </div>
    
        
        {{-- <div class="text-right">
            <button type="button" class="btn btn-primary float-sm-right">
                Save
            </button>
        </div> --}}
        @if($errors->any())
            <script>
                document.addEventListener('message', function () {
                    swal("Missing/Error input detected", "Please review input requirements",'error')
                })
            </script>
        @endif


        <script>
           
        
           $(document).on("click", ".browse", function() {
                   var file = $(this).parents().find(".file");
                   file.trigger("click");
                   });
                   $('input[type="file"]').change(function(e) {
                   var fileName = e.target.files[0].name;
                   $("#file").val(fileName);
        
                   var reader = new FileReader();
                   reader.onload = function(e) {
                       // get loaded data and render thumbnail.
                       document.getElementById("preview").src = e.target.result;
                   };
                   // read the image file as a data URL.
                   reader.readAsDataURL(this.files[0]);
                   });
        </script>

    </div>
    
    
    </form>
    
    
    