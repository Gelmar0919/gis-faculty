@extends('main')
@section('body')
    <div class="col-md-12 col-lg-12 mb-2 mt-3 ">
        <div class="col-lg-12 "> 
            <div  class="container card d-flex justify-content-center" style="max-width: 1000px;">
                {{-- <h5><i class="fa-solid fa-building pr-2 mb-2"></i>Profiles</h5> --}}
                

                
                @livewire('dashboard')



            </div>

        </div>
    </div>
@endsection