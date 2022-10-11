<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('userinterface/imgs/favicon.png') }}" rel="icon">
  <title>GIS Senior Citizen</title>
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
      <a href="{{ route('map') }}" class="navbar-brand">
        <img src="{{ asset('userinterface/dist/img/SystemLogoDarkGreen.png') }}" alt="GIS Cauayan" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">GIS Faculty</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{ route('map') }}" class="nav-link"><i class="nav-icon fas fa-location-dot pr-2"></i>Map</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('map') }}" class="nav-link"><i class="nav-icon fas fa-building pr-2"></i>Departments</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('map') }}" class="nav-link"><i class="nav-icon fas fa-user-tie pr-2"></i>Faculty</a>
          </li>
        </ul>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item">
            <span class="brand-text font-weight-light">Isabela State University Cauayan Campus</span>
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
