<div id="maps" class="col-12" style="height: 97vh;"></div>
<script>
    department = @json($department);
    faculty = @json($faculty);
</script>
<button id="modal" type="button" style="display: none"  class="btn btn-primary" data-toggle="modal" data-target="#moreinfo"></button>
<div class="modal fade" id="moreinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success"><i class="fas fa-id-card mr-2"></i>Instructor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 ">
                    <img id="img" src="{{ asset('storage/dynamic/img/img_2.jpg') }}" 
                    class="rounded img-thumbnail" alt="Cinque Terre" > 
                </div>
                <div class="col-md-6">
                    
                    <b>Name: </b> <span id="name"></span> <br/>
                    <b>Gender: </b> <span id="gender"></span> <br/>
                    <b>Address: </b> <span id="address"></span> <br/>
                    <b>Birthday: </b> <span id="birthday"></span> <br/>
                    <b>Contact #: </b> <span id="contact"></span> <br/>
                    <b>FB Name: </b> <span id="fb"></span> <br/>
                    <b>Email: </b> <span id="email"></span> <br/>
                    <b>Position: </b> <span id="position"></span> <br/>
                    <b>Schedule SY: </b> <span id="schedule"></span> <br/>
                  
                    {{-- <div class="col-md-12 card mt-2" style="background-color: #6584b5">
                        <b class="text-white pt-2 ">Mental Disorder: </b> 
                        <span class="pb-2 text-white"><span id="disorder"></span></span> 
                    </div> --}}
                   
                   
                </div>
            </div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div> --}}
      </div>
    </div>
  </div>


