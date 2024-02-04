
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Neogym</title>

 
  <!-- Slider Stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- Bootstrap Core CSS -->
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

</head>

<body>
  <div class="hero_area">   
<!-- header section starts -->
<header class="header_section">
   <div class="container-fluid">
     <nav class="navbar navbar-expand-lg custom_nav-container">
       <a class="navbar-brand" href="/">
         <span>Neogym</span>
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
 
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
             <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item {{ request()->is('why') ? 'active' : '' }}">
             <a class="nav-link" href="/why">Why us</a>
           </li>
           <li class="nav-item {{ request()->is('blogs') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('blog.show')}}">Blog</a>
          </li>
           <li class="nav-item {{ request()->is('trainer') ? 'active' : '' }}">
             <a class="nav-link" href="{{ route('trainershow_in_public') }}">Trainers</a>
           </li>
           <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
             <a class="nav-link" href="/contact">Contact Us</a>
           </li>
           @if (Route::has('login'))
             <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
               @auth
                 <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                   <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                 </li>
               @else
                 <li class="nav-item">
                   <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                     <a class="nav-link" href="{{route('login')}}">Login</a>
                   </a>
                 </li>
                 @if (Route::has('register'))
                   <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">Register</a>
                   </li>
                 @endif
               @endauth
             </div>
           @endif
         </ul>
       </div>
     </nav>
   </div>
 </header>


 

  
@yield('header-foot')



         <!--  footer -->
         <footer>
         
            <div  class="footer bg-dark" >
               <div class="container ">
                @if(session("Success"))
                <div class="alert alert-success p-5 text-center">
                  <h3 class="display-4 text-dark">We will be answering you later!</h3>
                </div>
               @endif
                  <div class="row">
                  
                     <div class="col-md-3 col-sm-6">
                        <div class="infoma text_align_left">
                           <h3>About</h3>
                           <p class="ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedconsectetur </p>
                           <ul class="social_icon">
                              <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="infoma">
                           <h3>Adderess</h3>
                           <ul class="conta">
                              <li>Healing Center, oo W Street name, <br>
                                 Loram ipusum 
                              </li>
                              <li>(+71) 8522369417 <br>(+71) 8522369417</li>
                              <li> <a href="Javascript:void(0)"> demo@gmail.com</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3 pad_lrft col-sm-6">
                        <div class="infoma">
                           <h3>Links</h3>
                           <ul class="fullink">
                              <li><a href="/">Home</a></li>
                              <li><a href="/why">Why Us</a></li>
                              <li><a href="/trainer">Trainers</a></li>
                              <li><a href="/contact">Contact Us</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="infoma">
                            <h3>Newsletter</h3>
                            @auth
                            <form class="form_subscri" action="{{ route('storeinNewsletter') }}" method="POST">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="newsl" placeholder="Your Name" type="text" name="usenewsName" required>
                                        </div>
                                        <div class="col-md-12">
                                            <input class="newsl" placeholder="Email" type="text" name="usenewsEmail" required >
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="subsci_btn">subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <p style="text-decoration: underline;"><a href="{{ route('login') }}" > Please log in to subscribe to our newsletter.</a></p>
                            @endauth
                        </div>
                    </div>
                    
                    
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
       <!-- JavaScript Files -->
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


      </body>
   </html>