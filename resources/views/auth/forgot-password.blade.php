<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Recover Password | Kashan Gym</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="backend/assets/images/favicon.png">

        <!-- Bootstrap Css -->
        <link href="backend/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="backend/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
    
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="/" class="auth-logo">
                                    <img src="backend/assets/images/logo-light.png" alt="logo-light" height="320">
                                    {{-- <img src="backend/assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt=""> --}}
                                    {{-- <img src="backend/assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt=""> --}}
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Reset Password</b></h4>
    
                        <div class="p-3">
                            <form method="POST" class="form-horizontal mt-3"action="{{ route('password.email') }}">
                                @csrf
                                 
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <x-validation-errors class="mb-4" />
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                Enter Your <strong>E-mail</strong> Forgot your password? <strong>No problem</strong> . Just let us know your email address and we will email you
                                 a password reset link that will allow you to choose a new one.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
    
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input  id="email"  name="email" class="form-control" type="email" required="" placeholder="Enter Your Email">
                                    </div>
                                </div>
    
                                <div class="form-group pb-2 text-center row mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Send Email</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->
        

        <!-- JAVASCRIPT -->
        <script src="backend/assets/libs/jquery/jquery.min.js"></script>
        <script src="backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="backend/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="backend/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="backend/assets/libs/node-waves/waves.min.js"></script>

        <script src="backend/assets/js/app.js"></script>

    </body>
</html>
