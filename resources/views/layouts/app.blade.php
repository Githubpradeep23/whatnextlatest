 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="{{$Settings->description ?? ""}}" content="{{$Settings->description ?? ""}}">
     <meta name="{{$Settings->keywords ?? ""}}" content="{{$Settings->keywords ?? ""}}">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title> @if(!empty($Settings->title )) {{$Settings->title}} @endif | @yield('title')</title>

     @if(!empty($Settings->favicon))
     <link rel="shortcut icon" href="{{asset('favicon/'.$Settings->favicon)}}">
     <!-- FAVICON AND TOUCH ICONS -->
     <link rel="shortcut icon" href="{{asset('favicon/'.$Settings->favicon)}}" type="image/x-icon">
     <link rel="icon" href="{{asset('favicon/'.$Settings->favicon)}}" type="image/x-icon">
     <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/'.$Settings->favicon)}}">
     <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/'.$Settings->favicon)}}">
     <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/'.$Settings->favicon)}}">
     <link rel="apple-touch-icon" href="{{asset('favicon/'.$Settings->favicon)}}">
     <link rel="icon" href="{{asset('favicon/'.$Settings->favicon)}}" type="image/x-icon">
     @endif

     <!-- GOOGLE FONTS -->
     <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

     <!-- BOOTSTRAP CSS -->
     <link href="{{asset ('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- FONT ICONS -->
     <link href="{{asset ('assets/frontend/css/flaticon.css') }}" rel="stylesheet">

     <!-- PLUGINS STYLESHEET -->
     <link href="{{asset ('assets/frontend/css/menu.css') }}" rel="stylesheet">
     <link id="effect" href="{{asset ('assets/frontend/css/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
     <link href="{{asset ('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
     <link href="{{asset ('assets/frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
     <link href="{{asset ('assets/frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
     <link href="{{asset ('assets/frontend/css/lunar.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

     <!-- ON SCROLL ANIMATION -->
     <link href="{{asset ('assets/frontend/css/animate.css') }}" rel="stylesheet">

     <!-- TEMPLATE CSS -->
     <link href="{{asset ('assets/frontend/css/blue-theme.css') }}" rel="stylesheet">

     <!-- Style Switcher CSS -->
     <link href="{{asset ('assets/frontend/css/crocus-theme.css') }}" rel="alternate stylesheet" title="crocus-theme">
     <link href="{{asset ('assets/frontend/css/green-theme.css') }}" rel="alternate stylesheet" title="green-theme">
     <link href="{{asset ('assets/frontend/css/magenta-theme.css') }}" rel="alternate stylesheet" title="magenta-theme">
     <link href="{{asset ('assets/frontend/css/pink-theme.css') }}" rel="alternate stylesheet" title="pink-theme">
     <link href="{{asset ('assets/frontend/css/purple-theme.css') }}" rel="alternate stylesheet" title="purple-theme">
     <link href="{{asset ('assets/frontend/css/skyblue-theme.css') }}" rel="alternate stylesheet" title="skyblue-theme">
     <link href="{{asset ('assets/frontend/css/red-theme.css') }}" rel="alternate stylesheet" title="red-theme">
     <link href="{{asset ('assets/frontend/css/violet-theme.css') }}" rel="alternate stylesheet" title="violet-theme">

     <!-- RESPONSIVE CSS -->
     <link href="{{asset ('assets/frontend/css/responsive.css') }}" rel="stylesheet">

     <style>
         /* Adjust image height */
         .carousel-item img {
             max-height: 500px;
             /* Set your desired maximum height */
             width: auto;
             /* Ensure image width adjusts proportionally */
             margin: 0 auto;
             /* Center the image horizontally */
         }

         /* Make carousel container responsive */
         .carousel {
             max-width: 100%;
             /* Ensure carousel adjusts to its container */
             margin-left: 0;
             /* Remove left margin */
             margin-right: 0;
             /* Remove right margin */
         }

         .inner-page-hero-ma {
             margin-top: 100px;
         }

         .lrma {
             margin-left: 0px !important;
             margin-right: 0px !important;
         }

         .desktoplogo img {
             width: auto;
             max-width: inherit;
             max-height: 50px !important;
         }

         @media (max-width: 320px) {
             .smllogo img {
                 width: auto;
                 max-width: inherit;
                 max-height: 45px !important;
             }

             .bgImageHeight {
                 height: auto !important;
             }
         }

         @media (min-width: 768px) {
             .bgImageHeight {
                 height: auto !important;
             }
         }

         @media (min-width: 1280px) {
             .bgImageHeight {
                 height: 500px !important;
             }

             .ClientsWeCater {
                 display: none !important;
             }
         }


         @if( !empty(Request::segment(1)) && Request::segment(1)==='services') @media (min-width: 768px) {
             @media (min-width: 768px) {
                 .navbar-dark .wsmenu>.wsmenu-list>li>a.h-link {
                     color: #000000 !important;
                 }

                 .navbar-dark .wsmenu>.wsmenu-list>li>a.h-link.scrolled {
                     color: #000000 !important;
                 }
             }
         }

         @endif .textColorTheme {
             color: #3e0b35 !important;
         }

         .blockPadding {
             padding-left: 0px !important;
         }

         .btn--theme:hover {
             background-color: #3e0b35 !important;
             border-color: #3e0b35 !important;
         }

         .hover--theme:hover,
         .white-scroll .scroll .hover--theme:hover,
         .black-scroll .scroll .hover--theme:hover {
             color: #fff !important;
             background-color: #3e0b35 !important;
             border-color: #3e0b35 !important;
         }

         .role-box .description {
             display: none !important;
         }

         .role-box:hover .description {
             display: block !important;
         }

         .divUlLi ul {
             list-style: unset !important;
             padding-left: 30px;
         }

         .bgSectionMulti {
             background-color: #3e0b35;
         }
     </style>

 </head>

 @include('layouts.navigation')

 @yield('content')

 @include('layouts.footer')