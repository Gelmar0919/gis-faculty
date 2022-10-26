@extends('main')
  
@section('body')
<div class="col-md-12 col-lg-12 mb-2 mt-3 ">
    <div class="col-lg-12 "> 
        <div  class="container card d-flex justify-content-center" style="max-width: 1000px;">

    <div class="card-header "><span class="fas fa-user-plus pr-2 "></span>Register</div>
    <div class="card-body">

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                <div class="col-md-6">
                    <input type="text" id="name" class="form-control" name="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                <div class="col-md-6">
                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            

            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </form>
        
    </div>

</div>
</div>
</div>
          
@endsection