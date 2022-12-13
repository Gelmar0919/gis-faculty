<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('userinterface/imgs/favicon.png') }}" rel="icon">
  <title>GIS Faculty</title>
  <!-- CSS -->
 
  @livewireStyles
  @include('paths.css')
  {{-- @powerGridStyles --}}
 
</head>
<body class="hold-transition layout-top-nav" style="overflow-x: hidden;">
<div class="wrapper">
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center topmostloader">
  <img class="animation__shake " src="{{ asset('userinterface/dist/img/SystemLogoDarkGreen.png') }}">
</div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand">
        <img src="{{ asset('userinterface/dist/img/SystemLogoDarkGreen.png') }}" alt="GIS Cauayan" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GIS Faculty</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          {{-- <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ (Request::is('*dashboard*') ? 'active' : '') }}">
              <i class="nav-icon fas fa-gauge-high pr-2"></i>Dashboard</a>
          </li> --}}
          @guest
           @else
          <li class="nav-item">
            <a href="{{ route('map') }}" class="nav-link {{ (Request::is('*map*') ? 'active' : '') }}"><i class="nav-icon fas fa-location-dot pr-2"></i>Map</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('department') }}" class="nav-link {{ (Request::is('*department*') ? 'active' : '') }}"><i class="nav-icon fas fa-building pr-2"></i>Departments</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('faculty') }}" class="nav-link {{ (Request::is('*faculty*') ? 'active' : '') }}"><i class="nav-icon fas fa-user-tie pr-2"></i>Faculty</a>
          </li>
         @endguest
          

        </ul>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          {{-- <li class="nav-item">
            <span class="brand-text font-weight-light">Isabela State University Cauayan Campus</span>
          </li> --}}
          <li class="nav-item">
            @guest
              <a href="{{ route('login') }}" class="nav-link" >
                <i class="fas fa-arrow-right-to-bracket pr-1"></i>
                Login
              </a>
            @else
              
              <div class="btn-group">
                {{-- <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button> --}}
                <a href="#" class="nav-link" data-toggle="dropdown">
                  {{-- <i class="fas fa-user-check"></i> --}}
                  
                    {{-- <span class="badge bg-success mb-1"> --}}
                      <i class="fas fa-circle-user pt-2"></i>
                      {{auth()->user()->name}}
                      <i class="fas fa-caret-down ml-2 mr-1"></i>
                    {{-- </span> --}}
                  
                </a>
                <div class="dropdown-menu dropdown-menu-right" >
                  
                  {{-- <div class="dropdown-divider"></div> --}}
                  @if (auth()->user()->name == "Admin")
                    <a class="dropdown-item mr-5" href="{{ route('register') }}">
                      <span class="fas fa-user-plus pr-2"></span>
                      Register
                    </a>
                  @endif
                    
  
                 
    
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    >
                    <span class="fas fa-arrow-right-from-bracket ml-1 pr-2"></span>
                    Logout
                  </a>
                  {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form> --}}
    
                </div>
                {{-- <div class="dropdown-menu">
                  
                </div> --}}
              </div>
              
            @endguest  
          </li>
        </ul>

        
      </div>

      
    </div>
  </nav>
  <!-- /.navbar -->

 

    
  </div>
  <!-- /.content-wrapper -->

  <!-- Main content -->
  <div>
    
        @yield('body')
  </div>
  <!-- /.content -->
  
  
  @yield('account')       
  <!-- Javascripts path-->
  @include('paths.js')

  @livewireScripts
  
 {{--  @powerGridScripts --}}
</body>
</html>
