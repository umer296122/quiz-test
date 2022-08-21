
<html lang="en"><!-- begin::Head --><head>
    <base href="../../../">
    <meta charset="utf-8">
    <title>Metronic | Login Page 1</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css">

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css">
    <link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css">
    <link href="assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css">
    <link href="assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css">

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico">
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" cz-shortcut-listen="true">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

                <!--begin::Aside-->
               

                <!--begin::Aside-->

                <!--begin::Content-->
                <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

                    <!--begin::Head-->
             

                    <!--end::Head-->

                    <!--begin::Body-->
                    <div class="kt-login__body">

                        <!--begin::Signin-->
                        <div class="kt-login__form">
                            <div class="kt-login__title">
                                <h3>Sign Up</h3>
                            </div>

                            <!--begin::Form-->
                            <form class="kt-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Name" name="name" :value="old('name')" required autofocus  autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email" :value="old('email')" required autofocus  autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  type="password" placeholder="Password"
                                    name="password"
                                    required autocomplete="current-password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  type="password" placeholder=" Confirm Password"
                                    name="password_confirmation" 
                                    required autocomplete="current-password">
                                </div>
                                <!--begin::Action-->
                                <div class="kt-login__actions">
                               
                                    <button type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Sign Up</button>
                                </div>

                                <!--end::Action-->
                            </form>

                            <!--end::Form-->

                         

                         
                        </div>

                        <!--end::Signin-->
                    </div>

                    <!--end::Body-->
                </div>

                <!--end::Content-->
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="assets/js/pages/custom/login/login-1.js" type="text/javascript"></script>

    <!--end::Page Scripts -->


<!-- end::Body -->
</body></html>


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
