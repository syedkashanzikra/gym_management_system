<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
     

    <title> Login Page </title>
    <style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
}
/* HTML RESET */
h1,
h2,
h3 {
  margin: 0;
  padding: 0;
}
a {
  text-decoration: none;
}

input,
button {
  border: none;
  outline: none;
}

/* ION-ICON RESET */
ion-icon {
  --ionicon-stroke-width: 40px;
  font-size: 24px;
}

/* BACKGROUND-IMAGE WRAPPER */
.background_wrapper {
  position: relative;
  width: 100%;
  height: 100vh;

  display: grid;
  align-items: center;
  justify-content: center;
}
.background_wrapper::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  /* Picture for Background */
  background: url("theme/images/login.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  filter: brightness(0.88);
  z-index: -1;
}
/* LOGIN-FORM */
.login_form_wrapper {
  z-index: 999;
  position: relative;
  background-color: hsla(0, 0%, 10%, 0.1);
  border: 2px solid hsl(0, 0%, 90%);
  color: hsla(0, 0%, 100%, 0.897);

  border-radius: 1.5rem;
  backdrop-filter: blur(10px);
  padding: 2.5rem 2rem 3.5rem;
  width: 26.25rem;
}
/* TITLE */
.title {
  display: block;
  text-align: center;
  font-size:  1.75rem;
  font-weight: 500;
  margin-bottom: 2rem;
  color: hsl(0, 0%, 90%);
  letter-spacing: 1px;
}
/* LOGIN-FORM-CONTENT */
.login_form_content {
  display: flex;
  flex-direction: column;
  row-gap: 1.5rem;
}
.login_content_box {
  display: flex;
  align-items: center;
  column-gap: 0.75rem;
  border-bottom: 2px solid hsl(0, 0%, 90%);
}
.login_content_box--input {
  width: 100%;
  position: relative;
}

/* LOGIN-INPUT */
.login__input {
  width: 100%;
  padding-block: 0.8rem;
  background-color: transparent;
  color: hsl(0, 0%, 90%);
  position: relative;
  z-index: 1;
  font-size: 1.125rem;
}
/* LOGIN-LABEL */
.login__label {
  position: absolute;
  left: 0;
  top: 13px;
  font-weight: 400;
  transition: top 0.3s, font-weight 0.3s;
}
.password--input {
  padding-right: 1.8rem;
}
.password__hidden {
  position: absolute;
  right: 0;
  top: 15px;
  z-index: 10;
  cursor: pointer;
}
.remember_login,
.remember_login_content {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.remember_login {
  margin-bottom: 1rem;
}
.remember_login_content {
  column-gap: 0.4rem;
}
.remember_login_input {
  width: 0.95rem;
  height: 0.95rem;
}
.forget__login {
  color: hsl(0, 0%, 90%);
}
.forget__login:hover {
  text-decoration: underline;
}
/* BUTTON LOGIN */
.button__login {
  width: 100%;
  padding: 0.8rem;
  border-radius: 0.5rem;
  background-color: hsla(0, 0%, 100%, 0.796);
  font-weight: 500;
  cursor: pointer;
  margin-bottom: 2rem;
  font-size: 1.1rem;
  transition: background-color 0.4s ease;
  letter-spacing: 0.5px;
}
.button__login:hover {
  background-color: hsla(0, 0%, 0%, 0.796);
  color: hsl(0, 0%, 90%);
}
/* REGISTER LOGIN */
.register__login {
  text-align: center;
}
.register__login a {
  color: hsla(61, 98%, 47%, 0.897);
  font-weight: 500;
}
.register__login a:hover {
  text-decoration: underline;
}
/* INPUT FOCUS TRANSITION */
.login__input:focus + .login__label {
  top: -12px;
  font-weight: 500;
}
/* STICKY INPUT ON FOCUS WITH TRANSITION */
.login__input:not(:placeholder-shown).login__input:not(:focus) + .login__label {
  top: -12px;
}

        
    </style>
  </head>
  <body >




    

    <!-- BACKGROUND-WRAPPER -->
    <main class="background_wrapper">

        <div class="login_form_wrapper">
            <x-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
          <!-- FORM --> 
        
            <form method="POST" class="login__form" action="{{ route('login') }}">
                @csrf

            <h1 class="title">Login</h1>
  
            <div class="login_form_content">
              <!-- LOGIN-CONTENT-BOX-1 -->
              <div class="login_content_box">
                <ion-icon name="person-outline"></ion-icon>
  
                <div class="login_content_box--input">
                  <input
                  id="email"
                  name="email"
                    type="email"
                    placeholder=" Enter Your Email "
                    class="login__input email--input"
                    required
                
                  />
                  <label for="email" class="login__label">Email</label>
                </div>
              </div>
              <!-- LOGIN-CONTENT-BOX-2 -->
              <div class="login_content_box">
                <ion-icon name="lock-closed-outline"></ion-icon>
  
                <div class="login_content_box--input">
                  <input
                  id="password"
                  name="password"
                    type="password"
                    placeholder=" Enter Your Password "
                    class="login__input password--input"
                    required
                   
                  />
                  <label for="password" class="login__label">Password</label>
                  <ion-icon
                    class="password__hidden"
                    id="password_hidden"
                    name="eye-off-outline"
                  ></ion-icon>
                </div>
              </div>
              <!-- REMEMBER-LOGIN -->
              <div class="remember_login">
                <div class="remember_login_content">
                  <input type="checkbox" id="remember_me" name="remember" class="remember_login_input" />
                  <label for="remember" class="remember_login_label text--sm"
                    >Remember me</label
                  >
                </div>
                <!-- FORGET PASSWORD -->
                <a href="{{ route('password.request') }}" class="forget__login text--sm">Forget password?</a>
              </div>
  
              <!-- LOGIN BUTTON -->
              <button class="button__login">Login</button>
              <!-- REGISTER LOGIN -->
              <p class="register__login text--sm">
                Don't have an account ? <a href="{{ route('register') }}">Register</a>
              </p>
            </div>
          </form>
        </div>
      </main>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"
    ></script> -->

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->



    <!-- toastr library -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<!-- Your custom script -->
<script>


// Toastr code
   @if(Session::has('message'))
      var type = "{{ Session::get('alert-type','info') }}";
      switch(type){
         case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
         case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
         case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
         case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
      }
   @endif


    
    /* PASSWORD INPUT */
  const Password_input = document.querySelector(".password--input");
  
  /* PASSWORD EYE ICON */
  const Password_eye_icon = document.querySelector("#password_hidden");
  
  /* PASSWORD EYE ICON EVENTLISTENER */
  Password_eye_icon.addEventListener("click", () => {
    if (Password_input.type === "password") {
      /* Checking if the password input has the 
              type of text if so then interchange the icons */
  
      Password_input.type = "text";
      Password_eye_icon.setAttribute("name", "eye-outline");
      Password_eye_icon.removeAttribute("name", "eye-off-outline");
    } else {
      Password_input.type = "password";
  
      Password_eye_icon.setAttribute("name", "eye-off-outline");
      Password_eye_icon.removeAttribute("name", "eye-outline");
    }
  });


</script>

  </body>
  
</html>
