<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="registertheme/css/nunito-font.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="registertheme/css/style.css"/>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function () {
            $('.form-detail').submit(function (event) {
                var password = $('#password').val();
                var confirmPassword = $('#password_confirmation').val();

                if (password !== confirmPassword) {
                    event.preventDefault();
                    // Use SweetAlert to show a colored alert box
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Passwords do not match!',
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'OK',
                    });
                }
            });
        });
    </script>
</head>
<body class="form-v9">
    <div class="page-content">
        <div class="form-v9-content" style="background-image: url('{{ asset('registertheme/images/form-v9.jpg') }}');">
            <form class="form-detail" method="POST" action="{{ route('register') }}">
                @csrf
   <h2>Registration Form</h2>
   <x-validation-errors class="mb-4" />
<div class="form-row-total">
<div class="form-row">
    <input type="text" name="name" id="name" class="input-text" placeholder="Your Name" required>
</div>
<div class="form-row">
    <input  type="email" name="email" id="email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
</div>
</div>
<div class="form-row-total">
<div class="form-row">
    <input  type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
</div>
<div class="form-row">
    <input type="password" name="password_confirmation" id="password_confirmation" class="input-text" placeholder="Confirm Password" required>
</div>
</div>
<div class="form-row-last">
<input type="submit" name="register" class="register" value="Register">
</div>
</form>
        </div>
    </div>
</body>
</html>
