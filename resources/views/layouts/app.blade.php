{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <base href="{{ asset('/') }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wieldy - A fully responsive, HTML5 based admin template">
    <meta name="keywords"
        content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
    <!-- /meta tags -->
    <title>Admin Dashboard</title>

    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico" type="image/x-icon">
    <!-- /site favicon -->

    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css') }}/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/gaxon-icon/style.css">
    <!-- /font icon Styles -->

    <!-- Perfect Scrollbar stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css') }}/perfect-scrollbar/css/perfect-scrollbar.css">
    <!-- /perfect scrollbar stylesheet -->

    <!-- Load Styles -->

    <link rel="stylesheet" href="{{ asset('assets') }}/css/lite-style-1.min.css">
    <!-- /load styles -->

</head>

<body class="dt-sidebar--fixed dt-header--fixed">

    <!-- Loader -->
    @include('include.preloader')
    <!-- /loader -->

    <!-- Root -->
    <div class="dt-root">
        <!-- Header -->
        @include('include.header')
        <!-- /header -->

        <!-- Site Main -->
        <main class="dt-main">
            <!-- Sidebar -->
            {{-- <x-sitebar /> --}}
            @include('include.site-nav')
            <!-- /sidebar -->

            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                @yield('content')
                <!-- /site content -->

                <!-- Footer -->
                @include('include.footer')
                <!-- /footer -->

            </div>
            <!-- /site content wrapper -->

            <!-- Theme Chooser -->
            <div class="dt-customizer-toggle">
                <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-spin icon-setting"></i>
                </a>
            </div>
            <!-- /theme chooser -->

            <!-- Customizer Sidebar -->
            <aside class="dt-customizer dt-drawer position-right">
                <div class="dt-customizer__inner">

                    <!-- Customizer Header -->
                    <div class="dt-customizer__header">

                        <!-- Customizer Title -->
                        <div class="dt-customizer__title">
                            <h3 class="mb-0">Theme Settings</h3>
                        </div>
                        <!-- /customizer title -->

                        <!-- Close Button -->
                        <button type="button" class="close" data-toggle="customizer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- /close button -->

                    </div>
                    <!-- /customizer header -->

                    <!-- Customizer Body -->
                    <div class="dt-customizer__body ps-custom-scrollbar">
                        <!-- Customizer Body Inner  -->
                        <div class="dt-customizer__body-inner">

                            <!-- Section -->
                            <section id="theme-chooser">
                                <h6 class="text-uppercase">Theme</h6>

                                <!-- Button Group -->
                                <div class="dt-customizer__btn-group btn-group btn-group-toggle btn-group mb-1"
                                    data-toggle="buttons">
                                    <label class="btn btn-outline-light"><input class="theme-option" type="radio"
                                            name="options" id="theme-option-lite" value="lite">Lite</label>
                                    <label class="btn btn-outline-light"><input class="theme-option" type="radio"
                                            name="options" id="theme-option-semidark" value="semidark">Semi
                                        Dark</label>
                                    <label class="btn btn-outline-light"><input class="theme-option" type="radio"
                                            name="options" id="theme-option-dark" value="dark">Dark</label>
                                </div>
                                <!-- /button group -->

                            </section>
                            <!-- /section -->

                            <!-- Section -->
                            <section id="theme-style-chooser">
                                <h6 class="text-uppercase">Colors</h6>

                                <!-- List -->
                                <ul class="dt-list dt-list-sm dt-color-options">
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-1"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-2"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-3"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-4"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-5"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-6"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-7"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-8"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-9"></span>
                                    </li>
                                    <li class="dt-list__item">
                                        <span class="dt-color-option" data-style="style-10"></span>
                                    </li>
                                </ul>
                                <!-- /list -->

                            </section>
                            <!-- /section -->

                            <!-- Section -->
                            <section>
                                <h6 class="text-uppercase">Nav Style</h6>

                                <!-- List -->
                                <ul class="dt-list">
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/default" target="_blank"
                                                class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/fixed.png"
                                                    alt="Fixed Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/mini-sidebar" target="_blank"
                                                class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/mini-sidebar.png"
                                                    alt="Mini Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/drawer" target="_blank"
                                                class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/drawer-nav.png"
                                                    alt="Drawer Nav Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/back-office-mini" target="_blank"
                                                class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/no-header-mini-sidebar.png"
                                                    alt="No Header Mini Sidebar Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/back-office" target="_blank"
                                                class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/vertical-no-header.png"
                                                    alt="Vertical No Header Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/horizontal" target="_blank"
                                                class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/horizontal-default.png"
                                                    alt="Horizontal Default Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/horizontal-dark" target="_blank"
                                                class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/horizontal-dark.png"
                                                    alt="Horizontal Dark Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/horizontal-inside-nav"
                                                target="_blank" class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/horizontal-inside-nav.png"
                                                    alt="Horizontal Inside Nav Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/horizontal-bottom-nav"
                                                target="_blank" class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/horizontal-bottom-nav.png"
                                                    alt="Horizontal Bottom Nav Layout">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="https://wieldy-html.g-axon.work/horizontal-top-nav"
                                                target="_blank" class="choose-option__icon">
                                                <img src="{{ asset('assets/images') }}/layouts/horizontal-top-nav.png"
                                                    alt="Horizontal Top Nav Layout">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /list -->

                            </section>
                            <!-- /section -->

                            <!-- Section -->
                            <section id="layout-chooser">
                                <h6 class="text-uppercase">Layout</h6>

                                <!-- List -->
                                <ul class="dt-list dt-list-sm">
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="javascript:void(0)" class="choose-option__icon"
                                                data-layout="framed">
                                                <img src="{{ asset('assets/images') }}/layouts/framed.png"
                                                    alt="Framed">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="javascript:void(0)" class="choose-option__icon"
                                                data-layout="full-width">
                                                <img src="{{ asset('assets/images') }}/layouts/full-width.png"
                                                    alt="Full Width">
                                            </a>
                                        </div>
                                    </li>
                                    <li class="dt-list__item">
                                        <div class="choose-option">
                                            <a href="javascript:void(0)" class="choose-option__icon"
                                                data-layout="boxed">
                                                <img src="{{ asset('assets/images') }}/layouts/boxed.png"
                                                    alt="Boxed">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- /list -->

                            </section>
                            <!-- /section -->

                        </div>
                        <!-- /customizer body inner -->
                    </div>
                    <!-- /customizer body -->

                </div>
            </aside>
            <!-- /customizer sidebar -->

        </main>
    </div>
    <!-- /root -->

    <!-- Optional JavaScript -->
    <script src="{{ asset('assets/js') }}/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('assets/js') }}/moment/moment.js"></script>
    <script src="{{ asset('assets/js') }}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Perfect Scrollbar jQuery -->
    <script src="{{ asset('assets/js') }}/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <!-- /perfect scrollbar jQuery -->

    <!-- masonry script -->
    <script src="{{ asset('assets/js') }}/masonry-layout/dist/masonry.pkgd.min.js"></script>
    <script src="{{ asset('assets/js') }}/sweetalert2/dist/sweetalert2.js"></script>

    <script src="{{ asset('assets/js') }}/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>
    <script src="{{ asset('assets/js') }}/js/custom/charts/dashboard-crypto.js"></script>
</body>

</html>
