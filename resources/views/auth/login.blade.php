@extends('layouts.app')

@section('content')

{{-- <body class="hold-transition login-page"> --}}
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <img src="{{ asset('userinterface/dist/img/SystemLogoDarkGreen.png') }}" 
            alt="GIS Cauayan" class="brand-image img-circle elevation-3 " style="opacity: .8; height: 50px; width: 50px">
            <h4 class="pt-2">GIS Faculty</h4>
            @if($errors->any())
              <div class="alert mt-4" style="background-color: rgb(255, 113, 113); color: white; box-shadow: 0 0 0 1px #980505;">
                <strong><span class="fas fa-circle-exclamation pr-2"></span>{{$errors->first('errormsg')}}</strong>
              </div>
            @endif
            @if (\Session::has('success'))
              <div class="alert mt-4" style="background-color: rgb(247, 247, 247); color: #05981e; box-shadow: 0 0 0 1px #05981e;">
                <strong>{{ \Session::get('success') }}</strong>
              </div>
            @endif
          {{-- <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a> --}}
        </div>
        <div class="card-body">
          {{-- <p class="login-box-msg">Sign in to start your session</p> --}}
    
          <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="input-group mb-3">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          {{-- <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
          </div> --}}
          <!-- /.social-auth-links -->
    
          {{-- <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
          </p> --}}
          {{-- <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
          </p> --}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
    
    @endsection  
   

    {{-- <div class="col-md-12 col-lg-12 mb-2 mt-3 ">
        <div class="col-lg-12 "> 
            <div  class="container card d-flex justify-content-center" style="max-width: 1000px;">
                
                <div class="mx-2 my-2">
                    

                    <main class="login-form">
                        <div class="cotainer">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">Login</div>
                                        <div class="card-body">
                        
                                            <form action="{{ route('login.post') }}" method="POST">
                                                @csrf
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
                        
                                                <div class="form-group row">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="remember"> Remember Me
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Login
                                                    </button>
                                                </div>
                                            </form>
                                              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </main>

                </div>
                
            
            </div>
        </div>
    </div> --}}


