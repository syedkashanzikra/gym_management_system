
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



    




  <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('service_fullshow_theme/images/hero_5.jpg');">
    <img class="w-100" src="{{ (!empty($blog->Blog_headline_picture)) ? url('upload/blogs_images/' . $blog->Blog_headline_picture) : url('upload/no_image.jpg') }}" alt="Blog Picture">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">{{$blog->Blog_headline}}</h1>
            <div class="post-meta align-items-center text-center">
              
              <figure class="author-figure mb-0 me-3 d-inline-block">{{-- /*<img src="service_fullshow_theme/images/person_1.jpg" alt="Image" class="img-fluid">*/ --}}</figure>
              <span class="d-inline-block mt-1">By {{$blog->Blogger_name}}</span>
              <span>&nbsp;-&nbsp; {{$blog->updated_at->diffForHumans()}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    

  
  <section class="section bg-dark">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="post-content-body">
   <p>{{$blog->Blog_full_description}}</p>            
          </div>

          <div class="pt-5">
            <p>Categories: {{$blog->Blog_category}}      Tags:    {{$blog->Blog_hashtags}} </p>
          </div>



        </div>

        <!-- END main-content -->

        
        <!-- END sidebar -->

      </div>
    </div>
  </section>

  
    
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



