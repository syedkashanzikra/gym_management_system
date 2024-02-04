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



    


    

  

  <section class="section">
    <div class="container">

        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title"></h2>
            </div>
            {{-- <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div> --}}
        </div>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 mb-4">
                <div class="post-entry-alt">
                    <a href="{{route('blog.single', $blog->id)}}" class="img-link"><img src="{{ (!empty($blog->Blog_headline_picture)) ? url('upload/blogs_images/' . $blog->Blog_headline_picture) : url('upload/no_image.jpg') }}" alt=" Blog Image" class="img-fluid"></a>
                    <div class="excerpt">
                        

                        <h2><a href="{{route('blog.single', $blog->id)}}">{{$blog->Blog_headline}}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                           
                            <figure class="author-figure mb-0 me-3 float-start"></figure>
                            <span class="d-inline-block mt-1">By <a href="{{route('blog.single', $blog->id)}}">{{$blog->Blogger_name}}</a></span>
                            <span>&nbsp;-&nbsp; {{$blog->updated_at->diffForHumans()}}</span>
                        </div>
                        <p><a href="{{route('blog.single', $blog->id)}}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
            </div>    
            @endforeach
            



           
          
            

            
    
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



