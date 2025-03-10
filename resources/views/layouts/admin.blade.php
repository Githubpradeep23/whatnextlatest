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

    <title>@if(!empty($Settings->title)) {{$Settings->title}} @endif | @yield('title')
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
    <link rel="stylesheet" href="{{asset('assets/backend/admin/admin-css-js/dropify.min.css')}}">

</head>

<body class="">

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

    <div class="sidebar-area" id="sidebar-area">
        <div class="logo position-relative">

            @if(!empty($Settings->logo))
            <a href="{{url('admin/dashboard')}}" class="d-block text-decoration-none">
                <img src="{{asset('logo/'.$Settings->logo)}}" title="@if(!empty($Settings->title)) {{$Settings->title}} @endif" alt="@if(!empty($Settings->title)) {{$Settings->title}} @endif" />
                <!-- <span class="logo-text fw-bold text-dark">Logo</span> -->
            </a>
            @endif

            <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
                <i data-feather="x"></i>
            </button>
        </div>
        <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar="data-simplebar">
            <ul class="menu-inner">

                <li class="menu-item open">
                    <a href="{{url('admin/dashboard')}}" class="menu-link">
                        <i data-feather="grid" class="menu-icon tf-icons"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item open">
                    <a href="{{url('admin/banner')}}" class="menu-link">
                        <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                        <span class="title">Banners</span>
                    </a>
                </li>

                <li class="menu-item open">
                    <a href="{{url('admin/gallery')}}" class="menu-link">
                        <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                        <span class="title">Service Gallery</span>
                    </a>
                </li>

                <li class="menu-item open">
                    <a href="{{url('admin/category')}}" class="menu-link">
                        <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                        <span class="title">Home Content</span>
                    </a>
                </li>

                <li class="menu-item open">
                    <a href="{{url('admin/service')}}" class="menu-link">
                        <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                        <span class="title">Service Content</span>
                    </a>
                </li>

                <li class="menu-item open">
                    <a href="{{url('admin/pages?pagesid=about')}}" class="menu-link">
                        <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                        <span class="title">About Us</span>
                    </a>
                </li>

                <li class="menu-item open">
                    <a href="{{url('admin/pages?pagesid=clientswecater')}}" class="menu-link">
                        <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                        <span class="title">Clients We Cater</span>
                    </a>
                </li>

                <li class="menu-item open">
                    <a href="{{url('admin/appointment/list')}}" class="menu-link">
                        <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                        <span class="title">Contact Us</span>
                    </a>
                </li>

            </ul>

        </aside>
        <div class="bg-white z-1 admin">
            <div class="d-flex align-items-center admin-info border-top">
                <div class="flex-shrink-0">
                    <a href="{{url('admin/dashboard')}}" class="d-block">
                        ADMIN
                    </a>
                </div>
                <div class="flex-grow-1 ms-3 info">
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none"> @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="main-content d-flex flex-column">

            <header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="left-header-content">
                            <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                                <li>
                                    <button class="header-burger-menu bg-transparent p-0 border-0" id="header-burger-menu">
                                        <i data-feather="menu"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="{{url('admin/dashboard')}}" class="d-block name">
                                        @if(Auth::guard('admin')->check() &&
                                        Auth::guard('admin')->user()->id)Hi,
                                        {{ ucfirst(Auth::guard('admin')->user()->name) }}
                                        @endif
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-md-8">
                        <div class="right-header-content mt-2 mt-sm-0">
                            <ul class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">

                                <li class="header-right-item">
                                    <div class="dropdown admin-profile">
                                        <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor" data-bs-toggle="dropdown">
                                            <div class="flex-shrink-0">
                                                <a href="{{url('admin/dashboard')}}" class="d-block">
                                                    ADMIN
                                                </a>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-none d-xxl-block">
                                                        <span class="degeneration">Admin</span>
                                                        <div class="d-flex align-content-center">
                                                            <h3>Adison Jeck</h3>
                                                            <div class="down">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body" href="{{url('admin/settings/1/edit')}}">
                                                    <i data-feather="settings"></i>
                                                    <span class="ms-2">Setting</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-body" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i data-feather="log-out"></i>
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none"> @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            <div class="flex-grow-1"></div>

            <footer class="footer-area bg-white text-center rounded-top-10">
                <p class="fs-14">©
                    <span class="text-primary">All Right Reserved</span>
                    is Proudly Owned by
                    <a href="{{url('admin/dashboard')}}" target="_blank" class="text-decoration-none">What Next</a>
                </p>
            </footer>

        </div>
    </div>

    <button class="btn btn-danger theme-settings-btn p-0 position-fixed z-2 text-center" style="bottom: 30px; right: 30px; width: 40px; height: 40px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i data-feather="settings" class="wh-20 text-white position-relative" style="top: -1px; outline: none;" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">RTL / LTR</h4>
            <div class="settings-btn rtl-btn">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Light / Dark</h4>
            <button class="switch-toggle settings-btn dark-btn" id="switch-toggle">
                Click To
                <span class="dark">Dark</span>
                <span class="light">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To
                <span class="dark1">Dark</span>
                <span class="light1">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To
                <span class="dark2">Dark</span>
                <span class="light2">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To
                <span class="dark3">Dark</span>
                <span class="light3">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To
                <span class="square">Square</span>
                <span class="radius">Radius</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style BG White / Gray</h4>
            <button class="card-bg settings-btn card-bg-style-btn" id="card-bg">
                Click To
                <span class="white">White</span>
                <span class="gray">Gray</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Container Style Fluid / Boxed</h4>
            <button class="boxed-style settings-btn fluid-boxed-btn" id="boxed-style">
                Click To
                <span class="fluid">Fluid</span>
                <span class="boxed">Boxed</span>
            </button>
        </div>
    </div>



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
    <script src="{{asset('assets/backend/admin/admin-css-js/dropify.min.js')}}"></script>

    <!-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> -->
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor');
    </script>

    <!-- <script>
        document.querySelectorAll('.editor').forEach((element) => {
            ClassicEditor
                .create(element)
                .catch(error => {
                    console.error(error);
                });
        });
    </script> -->

    <script>
        var drEvent = $('.dropify').dropify();

        drEvent.on('dropify.error.fileSize', function(event, element) {
            alert('Filesize error message!');
        });
        drEvent.on('dropify.error.minWidth', function(event, element) {
            alert('Min width error message!');
        });
        drEvent.on('dropify.error.maxWidth', function(event, element) {
            alert('Max width error message!');
        });
        drEvent.on('dropify.error.minHeight', function(event, element) {
            alert('Min height error message!');
        });
        drEvent.on('dropify.error.maxHeight', function(event, element) {
            alert('Max height error message!');
        });
        drEvent.on('dropify.error.imageFormat', function(event, element) {
            alert('Image format error message!');
        });
    </script>

</body>

</html>