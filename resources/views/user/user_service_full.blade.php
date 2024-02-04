@extends('layouts.headerfooter')

@section('header-foot')

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{asset('service_fullshow_theme/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('service_fullshow_theme/fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="{{asset('service_fullshow_theme/css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{asset('service_fullshow_theme/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('service_fullshow_theme/css/glightbox.min.css')}}">
	<link rel="stylesheet" href="{{asset('service_fullshow_theme/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('service_fullshow_theme/css/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/bootstrap.css') }}" />

  <!-- Fonts Style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom Styles for This Template -->
  <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet" />
  <!-- Responsive Style -->
  <link href="{{ asset('theme/css/responsive.css') }}" rel="stylesheet" />

  {{-- HoneyCss --}}
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('honeytheme/css/style.css') }}">
  <!-- Responsive -->
  <link rel="stylesheet" href="{{ asset('honeytheme/css/responsive.css') }}">



    


    

  
    <div class="section bg-light">
        <div class="container">
    
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">{{$service->service_name}}</h2>
                </div>
            </div>
    
            <div class="row align-items-stretch retro-layout-alt">
    
                <div class="col-md-5 order-md-2">
                    <a href="single.html" class="hentry img-1 h-100 gradient">
    
    <img class="featured-img" src="{{asset('service_fullshow_theme/images/img_2_vertical.jpg')}}">
                        <div class="text">
                            <span>February 12, 2019</span>
                            <h2>Meta unveils fees on metaverse sales</h2>
                        </div>
                    </a>
                </div>
    
                <div class="col-md-7">
    
                    <a href="single.html" class="hentry img-2 v-height mb30 gradient">
                        <div >
                         <img class="featured-img" src="{{asset('service_fullshow_theme/images/img_1_horizontal.jpg')}}" alt="">
                        </div>
                        <div class="text text-sm">
                            <span>February 12, 2019</span>
                            <h2>AI can now kill those annoying cookie pop-ups</h2>
                        </div>
                    </a>
    
                    <div class="two-col d-block d-md-flex justify-content-between">
                        <a href="single.html" class="hentry v-height img-2 gradient">
                            <img class="featured-img" src="{{asset('service_fullshow_theme/images/img_2_sq.jpg')}}";">
                            <div class="text text-sm">
                                <span>February 12, 2019</span>
                                <h2>Don’t assume your user data in the cloud is safe</h2>
                            </div>
                        </a>
                        <a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
                            <img class="featured-img" src="{{asset('service_fullshow_theme/images/img_3_sq.jpg')}}">
                            <div class="text text-sm">
                                <span>February 12, 2019</span>
                                <h2>Startup vs corporate: What job suits you best?</h2>
                            </div>
                        </a>
                    </div>  
    
                </div>
            </div>
    
        </div>
    </div>

    
<script src="service_fullshow_theme/js/bootstrap.bundle.min.js"></script>
<script src="service_fullshow_theme/js/tiny-slider.js"></script>

<script src="service_fullshow_theme/js/flatpickr.min.js"></script>


<script src="{{asset('service_fullshow_theme/js/aos.js')}}"></script>
<script src="{{asset('service_fullshow_theme/js/glightbox.min.js')}}"></script>
<script src="{{asset('service_fullshow_theme/js/navbar.js')}}"></script>
<script src="{{asset('service_fullshow_theme/js/counter.js')}}"></script>
<script src="{{asset('service_fullshow_theme/js/custom.js')}}"></script>
<script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery-3.0.0.min.js') }}"></script>
    <!-- Sidebar -->
    <script src="{{ asset('theme/js/custom.js') }}"></script>

    {{-- Honeytheme --}}
    <script src="{{ asset('honeytheme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('honeytheme/js/jquery-3.0.0.min.js') }}"></script>
    <!-- Sidebar -->
    <script src="{{ asset('honeytheme/js/custom.js') }}"></script>

    {{-- Bootstrap Scripts --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="path/to/sweetalert2.all.min.js"></script>




@endsection



