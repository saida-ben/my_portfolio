<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BENZARIYA Saida</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
/>
    <!-- Favicons -->
    <link href="{{ asset('img/benzariya_saida.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle JS (inclut Popper.js) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vite CSS Files -->
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Bootstrap CSS from CDN (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" as="style">

</head>

<body class="index-page style="display: none;">
@php
    $currentRouteName = Route::currentRouteName();
    $currentLocale = session('locale', 'en'); // Default to 'en' if locale is not set

@endphp
    <header id="header" class="header d-flex align-items-center light-background sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <button type="button" class="btn btn-info">get my cv</button>
            </a>

            <nav id="navmenu" class="navmenu">
            <ul>
    <li><a href="{{ route('home') }}" class="{{ $currentRouteName == 'home' ? 'active' : '' }}">{{ __('nav.Home') }}</a></li>
    <li><a href="{{ route('about') }}" class="{{ $currentRouteName == 'about' ? 'active' : '' }}">{{ __('nav.About') }}</a></li>
    <li><a href="{{ route('resume') }}" class="{{ $currentRouteName == 'resume' ? 'active' : '' }}">{{ __('nav.Resume') }}</a></li>
    <li><a href="{{ route('services') }}" class="{{ $currentRouteName == 'services' ? 'active' : '' }}">{{ __('nav.Services') }}</a></li>
    <li><a href="{{ route('contact') }}" class="{{ $currentRouteName == 'contact' ? 'active' : '' }}">{{ __('nav.Contact') }}</a></li>
</ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="header-social-links">
                <div class="dropdown">
                        <a data-mdb-dropdown-init class="dropdown-toggle" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <span class="{{ $currentLocale == 'en' ? 'fi fi-gb fis' : ($currentLocale == 'fr' ? 'fi fi-fr fis' : 'fi fi-ae fis') }} "></span>
                        <span class="ms-2">{{ $currentLocale == 'en' ? 'English' : ($currentLocale == 'fr' ? 'Français' : 'عربى') }}</span>
                    </a>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="Dropdown">
                        <li><a class="dropdown-item" href="{{ url('lang/en') }}"><span class="fi fi-gb fis"></span>
                        

                        anglais</a></li>
                        <li><a class="dropdown-item" href="{{ url('lang/fr') }}"><span class="fi fi-fr fis"></span>  Français</a></li>
                        <li><a class="dropdown-item" href="{{ url('lang/ar') }}"><span class="fi fi-ae fis"></span>  Arabe</a></li>
                    </ul>
                </div>
            </div>



</div>

        </div>
    </header>


    <main class="main">
      @yield('content')
    </main>


  <footer id="footer" class="footer light-background">
        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> 2024<strong class="px-1 sitename">BENZARIYA Saida</strong> <span>All Rights Reserved<br></span></p>
            </div>
            <div class="social-links d-flex justify-content-center">
                <a href="https://github.com/saida-ben"><i class="bi bi-github"></i></a>
                <a href="https://www.instagram.com/benzariya_saida/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/saida-benzariya-915712269/"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
  </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->

    <!-- Vite JS Files -->

    <!-- Additional JS from CDN -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <!-- Main JS File -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    <script src="https://unpkg.com/purecounterjs/dist/purecounter.js"></script>
    <!-- Bootstrap Bundle JS (inclut Popper.js) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Alpine.js (si utilisé) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


</body>

</html>
