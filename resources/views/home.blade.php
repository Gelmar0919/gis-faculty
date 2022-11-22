<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome!">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('userinterface/dist/home/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('userinterface/dist/home/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('userinterface/dist/home/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('userinterface/dist/home/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script src="https://kit.fontawesome.com/ef77a65c1c.js" crossorigin="anonymous"></script>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" 
    style="background-image: url('{{ asset('userinterface/dist/home/papa.jpg') }}');" id="sec-cc9e" data-image-width="256" data-image-height="256">
      <div class="u-clearfix u-sheet u-sheet-1">
        @guest
        <a href="{{ route('login') }}" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">LOGI<span style="font-size: 0.75rem;"></span>N
        </a>
        @endguest
        
        <h1 class="u-text u-text-default u-title u-text-1">Welcome!</h1>
        <p class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-large-text u-text u-text-variant u-text-2">
            <span class="fas fa-location-dot" style="padding-right: 7px; color: rgb(92, 185, 218)"></span><span style="font-weight: 700;">GIS</span>-Based Profile Management System of ISU Faculty, Cauayan Campus
        </p>
        <a href="{{ route('map') }}" class="u-border-none u-btn u-button-style u-custom-color-1 u-btn-2">Get started</a>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      
        <p class="u-text" style="color: rgb(75, 75, 75)">
              &copy; Copyright 2022
        </p>
         
      </section>
  
</body></html>