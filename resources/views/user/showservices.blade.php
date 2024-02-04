
<link rel="stylesheet" href="{{ asset('services_theme/nicepage.css') }}?v={{ filemtime(public_path('services_theme/nicepage.css')) }}" media="screen">
<link rel="stylesheet" href="{{ asset('services_theme/Home.css') }}?v={{ filemtime(public_path('services_theme/Home.css')) }}" media="screen">
 {{-- HoneyCss --}}
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('honeytheme/css/style.css') }}">
  <!-- Responsive -->
  <link rel="stylesheet" href="{{ asset('honeytheme/css/responsive.css') }}">
  <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet" />
  <!-- Responsive Style -->
  <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet" />

<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i?v=1.0">
<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i?v=1.0">

@extends('layouts.headerfooter')

@section('header-foot')

@if(session("ERROR"))
<h1>Trainer Not Found<h1>
@endif()
<section class="u-align-center u-clearfix  u-section-2" id="carousel_7623">
    <div class="u-expanded-width u-palette-5-light-5 u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-align-center u-container-style u-list-item u-radius-12 u-repeater-item u-shape-round u-white u-list-item-1">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
            <h3 class="u-custom-font u-text u-text-default u-text-font u-text-5 text-dark">{{$services->service_first_package_name}}</h3>
            <h2 class="u-custom-font u-text u-text-default u-text-font u-text-3 text-dark">{{$services->service_first_package}}PKR</h2>

            <p class="u-text u-text-palette-5-dark-2 u-text-2">{{$services->service_first_package_description}}</p>
            <a href={{route('service.fullshow', $services->id)}} class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">more</a>
          </div>
        </div>
        <div class="u-align-center u-container-style u-list-item u-radius-12 u-repeater-item u-shape-round u-white u-list-item-2">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
            <h3 class="u-custom-font u-text u-text-default u-text-font u-text-5 text-dark">{{$services->service_second_package_name}}</h3>
            <h2 class="u-custom-font u-text u-text-default u-text-font u-text-3 text-dark">{{$services->service_second_package}}PKR</h2>

            <p class="u-text u-text-palette-5-dark-2 u-text-2">{{$services->service_second_package_description}}</p>
            <a href={{route('service.fullshow', $services->id)}} class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">more</a>
          </div>
        </div>
        <div class="u-align-center u-container-style u-list-item u-radius-12 u-repeater-item u-shape-round u-white u-list-item-3">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
            <h3 class="u-custom-font u-text u-text-default u-text-font u-text-5 text-dark">{{$services->service_third_package_name}}</h3>
            <h2 class="u-custom-font u-text u-text-default u-text-font u-text-3 text-dark">{{$services->service_third_package}}PKR</h2>

            <p class="u-text u-text-palette-5-dark-2 u-text-2">{{$services->service_third_package_description}}</p>
            <a href={{route('service.fullshow', $services->id)}} class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">more</a>
          </div>
        </div>
        <div class="u-align-center u-container-style u-list-item u-radius-12 u-repeater-item u-shape-round u-white u-list-item-4">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
            <h3 class="u-custom-font u-text u-text-default u-text-font u-text-5 text-dark">{{$services->service_fourth_package_name}}</h3>
            <h2 class="u-custom-font u-text u-text-default u-text-font u-text-3 text-dark">{{$services->service_fourth_package}}PKR</h2>

            <p class="u-text u-text-palette-5-dark-2 u-text-2">{{$services->service_fourth_package_description}}</p>
            <a href={{route('service.fullshow', $services->id)}} class="u-active-none u-align-center u-border-1 u-border-active-grey-60 u-border-black u-border-hover-grey-60 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">more</a>
          </div>
        </div>
       
        
      </div>
    </div>
  </section>

{{-- <div class="plan">
    <div class="inner">
        <span class="pricing">
            <span>
                PKR{{$service->service_first_package}} <small>/ m</small>
            </span>
        </span>
        <p class="title">{{$services->service_first_package_name}}</p>
        <p class="info">{{$services->service_first_package_description}}</p>
        <ul class="features">
            <li>
                <span class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                    </svg>
                </span>
                <span><strong>20</strong> team members</span>
            </li>
            <li>
                <span class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                    </svg>
                </span>
                <span>Plan <strong>team meetings</strong></span>
            </li>
            <li>
                <span class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                    </svg>
                </span>
                <span>File sharing</span>
            </li>
        </ul>
        <div class="action">
        <a class="button" href="#">
            Choose plan
        </a>
        </div>
    </div>
</div> --}}



@endsection

<script class="u-script" type="text/javascript" src="{{ asset('services_theme/jquery.js') }}" defer=""></script>
<script class="u-script" type="text/javascript" src="{{ asset('services_theme/nicepage.js') }}" defer=""></script>
  {{-- Honeytheme --}}
  <script src="{{ asset('honeytheme/js/jquery.min.js') }}"></script>
  <script src="{{ asset('honeytheme/js/jquery-3.0.0.min.js') }}"></script>
  <!-- Sidebar -->
  <script src="{{ asset('honeytheme/js/custom.js') }}"></script>