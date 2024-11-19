<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="{{$Settings->description ?? ""}}" content="{{$Settings->description ?? ""}}">
    <meta name="{{$Settings->keywords ?? ""}}" content="{{$Settings->keywords ?? ""}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(!empty($Settings->favicon))
    <link rel="icon" type="image/png" href="{{asset('favicon/'.$Settings->favicon)}}">
    @endif

    <title>@if(!empty($Settings->title)) {{$Settings->title}} @endif | Login
    </title>

    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/sidebar-menu.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/apexcharts.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/prism.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/rangeslider.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/quill.snow.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/backend/assets/css/style.css')}}">

</head>

<body class="">

    <!-- Start Login Page -->

    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">W</span>
                <span class="d-inline-block">H</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">T</span>
                <span class="d-inline-block">N</span>
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">X</span>
                <span class="d-inline-block">T</span>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="main-content flex-column px-0">

            <div class="m-auto mw-510 py-5">
                <form method="POST" action="{{ route('admin.auth') }}">
                    @csrf
                    <span class="d-block fs-18 fw-semibold text-center or mb-4">
                        <span class="bg-body-bg d-inline-block py-1 px-3">Admin Login</span>
                    </span>
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="form-group mb-4">
                                <label class="label">Email</label>
                                <input id="email" type="email" class="form-control h-58 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label class="label">Password</label>
                                <div class="form-group">
                                    <div class="password-wrapper position-relative">
                                        <input id="password" type="password" class="form-control h-58 text-dark @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <i style="color: #A9A9C8; font-size: 16px; right: 15px !important;" class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-100">{{ __('Login') }}</button>

                </form>
            </div>

        </div>
    </div>


    <!-- End Login Page -->


    <script src="{{ asset('assets/backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/dragdrop.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/rangeslider.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/sweetalert.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/quill.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/data-table.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/prism.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/clipboard.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/feather.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/amcharts.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/custom/ecommerce-chart.js')}}"></script>
    <script src="{{ asset('assets/backend/assets/js/custom/custom.js')}}"></script>


</body>

</html>