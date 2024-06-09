<!DOCTYPE html>
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

    <title>Reset Password | Ashar Alo Shop</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/favicon.ico')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/android-chrome-192x192.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/android-chrome-512x512.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/favicon-16x16.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/favicon-32x32.png')}}" />
    <link rel="manifest" href="{{asset('/assets/img/favicon/site.webmanifest')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('/assets/js/config.js')}}"></script>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Forgot Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="#" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">

                      <img src="{{asset('leaf.PNG')}}" width="50px" height="70px">

                  </span>
                            <span class="app-brand-text text-body fw-bolder"><img src="{{asset('logo.PNG')}}" width="130px" height="50px"></span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Reset Password</h4>
                    <form id="formAuthentication" class="mb-3" action="{{ route('password.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                value="{{ $email ?? old('email') }}"
                                autofocus
                                readonly
                            />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">New Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Enter your password"
                                autofocus
                            />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Confirm Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="email"
                                name="password_confirmation"
                                placeholder="Confirm your password"
                                autofocus
                            />
                        </div>
                        <button class="btn btn-primary d-grid w-100" type="submit">Send Reset Link</button>
                    </form>
                    <div class="text-center">
                        <a href="auth-login-basic.html" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>

<!-- / Content -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{asset('/assets/js/main.js')}}"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>

