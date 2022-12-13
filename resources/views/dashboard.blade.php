@extends('main')
@section('body')
    <div class="col-md-12 col-lg-12 mb-2 mt-3 ">
        <div class="col-lg-12 "> 
            <div  class="container card d-flex justify-content-center" style="max-width: 1000px;">
                {{-- <h5><i class="fa-solid fa-building pr-2 mb-2"></i>Profiles</h5> --}}
                <div class="mx-2 my-2">
                    <div class="row mx-2 mt-1">
                        <div class="col-lg-4 col-12">       
                        <!-- small box -->
                        <div id="low" class="small-box" 
                        x-data="{trans : false, bcolor: '#249922', tcolor: 'white'}" 
                        @click="trans = !trans; "  
                        x-bind:style="trans && `background-color: ${bcolor}; color: ${tcolor}`">
                            <div class="inner mr-2 pr-2">
                            <h3> <span></span> Department</h3>
                
                            <p> <h4>Total: 1,000</h4> </p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-shield-heart"></i>
                            </div>
                        </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-12">
                        <!-- small box -->
                        <div id="medium" class="small-box bg-success" >
                            <div class="inner">
                                <h3> <span></span> Faculties</h3>
                
                                <p> <h4>Total: 1,000</h4> </p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-check"></i>
                            </div>
                        </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection