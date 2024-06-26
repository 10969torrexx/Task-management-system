<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <!--? Config:  test commit.  -->
    <script src="../assets/js/config.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
                <!-- Logo -->
                <div class="mb-3 row justify-content-center">
                    <div class="col-5">
                        <img src="https://ces.southernleytestateu.edu.ph/images/logo/logo.png" height="150" app-brand-logoalt="">
                    </div>
                </div>
                <div class="app-brand justify-content-center">
                    <h2><strong>Login</strong></h2>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">Welcome to TMS! 👋</h4>
                <div class="mt-2 text-center">
                    <div id="g_id_onload" data-client_id="{{ env('GOOGLE_CLIENT_ID') }}" data-callback="onSignIn"></div>
                    <div class="g_id_signin form-control" data-type="standard"></div>
                </div>
                <p class="mb-4">Please sign-in to your account and start the adventure</p>
                <div id="message_alerts">

                </div>
                <form id="formAuthentication" class="mb-3" action="#" method="POST"> 
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email or Username</label>
                        <input
                            type="text"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            placeholder="Enter your email or username"
                            autofocus
                            value="{{ old('email') }}"
                            required
                            autocomplete="email" autofocus
                        />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="input-group input-group-merge">
                            <input
                                type="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                                required autocomplete="current-password"
                            />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-1">
                        <button class="btn btn-primary d-grid w-100" id="btnLogin" type="button">Sign in</button>
                    </div>
                    <div class="p-1 text-danger" id="message_attempt"></div>
                </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="/register">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src = "https://accounts.google.com/gsi/client" async defer></script>
    <script>
        function decodeJwtResponse(token){
            let base64url = token.split('.')[1];
            let base64 = base64url.replace(/-/g, '+').replace(/_/g, '/');
            let jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) { 
                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
            }).join(''));
            return JSON.parse(jsonPayload);
        }
    
        window.onSignIn = googleUser =>{
            var user = decodeJwtResponse(googleUser.credential);
            if(user){
                $.ajaxSetup({
                    headers: {  'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
                });
                $.ajax({
                    url: `auth/google`,
                    method: 'POST',
                    data: {
                        email: user.email,
                        name: user.name,
                        picture: user.picture
                    },
                    beforeSend: function(){
                        $('#btnLogin').html("REDIRECTING...").prop("disabled", true);
                    },
                    success:function(response){
                        if(response.status == 200) {
                            Swal.fire({
                                title: 'Success!',
                                text: `${response.message}`,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $('#btnLogin').html("Login").prop("disabled", false);
                                    window.location.href ="/home";
                                }
                            });
                        }
                        if (response.status == 300) {
                            $('#btnLogin').html("Login").prop("disabled", false);
                            $('#message_alerts').html(
                                `<div class="alert alert-danger" role="alert">
                                ${response.message}
                                </div>`
                            );
                        }
                    },
                    error:function(xhr, status, error){
                        alert(xhr.responseJSON.message);
                    }
                });
            }
        }
        var loginAttempts = 3
        $('#btnLogin').on('click', function() {
            var email = $('#email').val();
            var password = $('#password').val();

            $.ajaxSetup({
                headers: {  'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
            });
            $.ajax({
                url: `{{ route('login') }}`,
                method: 'POST',
                data: {
                    email: email,
                    password: password
                },
                beforeSend: function(){
                    $('#btnLogin').html("LOADING...").prop("disabled", true);
                },
                success:function(response){
                    if(response.status == 200) {
                        Swal.fire({
                            title: 'Success!',
                            text: `${response.message}`,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#btnLogin').html("Login").prop("disabled", false);
                                window.location.href ="/home";
                            }
                        });
                    }
                    if (response.status == 300) {
                        $('#btnLogin').html("Login").prop("disabled", false);
                        $('#message_alerts').html(
                            `<div class="alert alert-danger" role="alert">
                            ${response.message}
                            </div>`
                        );
                        loginAttempts--;
                        if (loginAttempts > 0) {
                            console.log("Remaining login attempts: " + loginAttempts);
                            //$('#message_attempt').html("Remaining login attempts: " + loginAttempts);
                        } else {
                            console.log("No remaining login attempts. Please try again later.");
                            $('#loginbutton').prop("disabled", true); // Disable the login button
                        }
                    }
                },
                error:function(xhr, status, error){
                    var countdown = 60;
                    var intervalId = setInterval(function() {
                        if(countdown <= 0) {
                            clearInterval(intervalId);
                            loginAttempts = 5;
                            $('#message_attempt').html("");
                            $('#btnLogin').html("Login").prop("disabled", false);
                        } else {
                            $('#btnLogin').html("Please wait").prop("disabled", true);
                            countdown--;
                            $('#message_attempt').html(`Too many login attempts. Please try again in ${countdown} seconds`);
                        }
                    }, 1000);
                }
            });
        });

    </script>
  </body>
</html>
