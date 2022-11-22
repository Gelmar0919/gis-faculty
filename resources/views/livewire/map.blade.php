<div id="maps" class="col-12" style="height: 97vh;"></div>
<script>
    department = @json($department);
    faculty = @json($faculty);
    extensions = @json($extensions);
    extensionsfaculty = @json($extensionsfaculty);
</script>
<button id="modal" type="button" style="display: none"  class="btn btn-primary" data-toggle="modal" data-target="#moreinfo"></button>
<div class="modal fade" id="moreinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-success"><i class="fas fa-id-card mr-2"></i>
            <span></span>
            Faculty
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-12">
                
                <div class="card container" style="margin-bottom: 10px; padding-bottom: 10px; background-color: #eaecea">
                  <div class="row">
                   
                    <div class="col-sm-6 mt-2">
                      <img id="img" src="{{ asset('storage/dynamic/img/img_2.jpg') }}" 
                      class="rounded img-thumbnail" alt="Cinque Terre" > 
                    </div>
                    <div class="col-sm-6 mb-2 mt-1">
                        
                        <b class="text-">Name: </b> <span style="overflow-wrap: break-word;" id="name"></span> <br/>
                        <b class="text-">Gender: </b> <span style="overflow-wrap: break-word;" id="gender"></span> <br/>
                        <b class="text-">Address: </b> <span style="overflow-wrap: break-word;" id="address"></span> <br/>
                        <b class="text-">Birthday: </b> <span style="overflow-wrap: break-word;" id="birthday"></span> <br/>
                        <b class="text-">Age: </b> <span style="overflow-wrap: break-word;" id="age"></span> <br/>
                        <b class="text-">Civil Status: </b> <span style="overflow-wrap: break-word;" id="cstatus"></span> <br/>
                      
                        {{-- <b>Contact #: </b> <span id="contact"></span> <br/>
                        <b>FB Name: </b> <span id="fb"></span> <br/>
                        <b>Email: </b> <span id="email"></span> <br/>
                        <b>Position: </b> <span id="position"></span> <br/>
                        <b>Schedule SY: </b> <span id="schedule"></span> <br/> --}}
                        
                        {{-- <b >Sample: </b> <span style="overflow-wrap: break-word;">djsflkajdlkfjsdlkjfsldkfsadfasdfssdfsdfsdfdf</span> <br/> --}}
                      
                        {{-- <div class="col-md-12 card mt-2" style="background-color: #6584b5">
                            <b class="text-white pt-2 ">Mental Disorder: </b> 
                            <span class="pb-2 text-white"><span id="disorder"></span></span> 
                        </div> --}}
                      
                      
                    </div>
                  </div>
                  
                </div>

                <div class="card container" style="background-color: #eaecea">
                  <b class="d-flex justify-content-center mt-2" style="color: rgb(3, 67, 17)">Academic Profile</b>
                  <div class="row">
                    
                    <div class="col-sm-6 mt-2">
                      <b class="text-">Baccalaureate Degree: </b> <span style="overflow-wrap: break-word;" id="bd"></span> <br/>
                      <b class="text-">Year Graduated: </b> <span style="overflow-wrap: break-word;" id="bdy"></span> <br/><br/>
                      <b class="text-">Master's Degree: </b> <span style="overflow-wrap: break-word;" id="md"></span> <br/>
                      <b class="text-">Year Graduated: </b> <span style="overflow-wrap: break-word;" id="mdy"></span> <br/><br/>
                      <b class="text-">Doctorate Degree: </b> <span style="overflow-wrap: break-word;" id="dd"></span> <br/>
                      <b class="text-">Year Graduated: </b> <span style="overflow-wrap: break-word;" id="ddy"></span> <br/><br/> 
                    </div>
                    <div class="col-sm-6 mb-2 mt-2">
                        
                        <b class="text-">Current Position: </b> <span style="overflow-wrap: break-word;" id="position"></span> <br/>
                        <b class="text-">Subjects: </b> <span style="overflow-wrap: break-word;" id="subjects"></span><br/><br/> 
                      
                      
                    </div>
                  
                  </div>
                </div>
              
              </div>
                

              


            </div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div> --}}
      </div>
    </div>
</div>


