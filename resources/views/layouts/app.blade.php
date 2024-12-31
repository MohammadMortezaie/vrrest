<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- logo --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    @yield('header')


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- css -->
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta name="google-site-verification" content="R1EKGLUcLxU0eX64P-8djuk-usXpwADojr2egg0iCeo" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-91F7JWJ2FT"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-91F7JWJ2FT');
    </script>

</head>

<body>
    <div>

        <header id="header" class="header sticky-top">
            <div class="topbar d-flex align-items-center">
                <div class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
                    <div class="contact-info d-flex flex-column flex-md-row align-items-center">
                        <a href="tel:6048003900" style="text-decoration: none;" class="text-dark">
                            <span>{{ __('callToday') }} | <span class="text-danger">24/7</span>
                                {{ __('emergencyServices') }}</span>
                        </a>
                        <i class="bi bi-telephone d-flex align-items-center mt-2 mt-md-0 ms-md-4">
                            <a href="tel:6048003900"><span>+1 604-800-3900</span></a>
                        </i>
                    </div>
                    <div class="social-links d-none d-md-flex align-items-center">
                        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div><!-- End Top Bar -->




            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-0 navmenu" id="navmenu">
                <div class="container">
                    <a class="navbar-brand p-0" href="{{ url('/') }}">
                        <img class="navbar-brand logo" alt="VR Restoration" src="{{ asset('img/logo.png') }}" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('home2', ['lang' => app()->getLocale()]) }}">{{ __('Home') }}</a>
                            </li>

                            <!-- Services -->
                            <li class="nav-item dropdown">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="services-nav"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>
                                            <span>{{ __('Services') }}</span>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="services-nav">
                                        <li><a class="dropdown-item"
                                                href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}">{{ __('waterDamage') }}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('fireDamage', ['lang' => app()->getLocale()]) }}">{{ __('fireDamage') }}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}">{{ __('moldRemediation') }}</a>
                                        </li>
                                        {{-- <li><a class="dropdown-item"
                                                href="{{ route('stormDisaster', ['lang' => app()->getLocale()]) }}">{{ __('stormDisaster') }}</a>
                                        </li> --}}
                                        <li><a class="dropdown-item"
                                                href="{{ route('construction', ['lang' => app()->getLocale()]) }}">{{ __('construction') }}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('commercialServices', ['lang' => app()->getLocale()]) }}">{{ __('commercialServices') }}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('residentialServices', ['lang' => app()->getLocale()]) }}">{{ __('residentialServices') }}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('specialtyCleaning', ['lang' => app()->getLocale()]) }}">{{ __('SpecialtyCleaning') }}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('generalCleaning', ['lang' => app()->getLocale()]) }}">{{ __('GeneralCleaning') }}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('localServices', ['lang' => app()->getLocale()]) }}">{{ __('localServices') }}</a>
                                        </li>

                                        {{-- <li><a class="dropdown-item"
                                                href="{{ route('roofTarpBoard', ['lang' => app()->getLocale()]) }}">{{ __('Roof Tarp/Board-up') }}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('industriesServiced', ['lang' => app()->getLocale()]) }}">{{ __('Industries Serviced-up') }}</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('blog', ['lang' => app()->getLocale()]) }}">{{ __('Blog') }}
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('careers', ['lang' => app()->getLocale()]) }}">{{ __('Careers') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('about', ['lang' => app()->getLocale()]) }}">{{ __('About') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('team', ['lang' => app()->getLocale()]) }}">{{ __('Our Team') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('contact', ['lang' => app()->getLocale()]) }}">{{ __('Contact Us') }}</a>
                            </li>




                            <!-- Authentication Links -->
                            @guest
                                {{-- @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif --}}
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                        @if (Auth::user()->is_admin)
                                            <a class="dropdown-item" href="{{ route('adminuser.index') }}">
                                                {{ __('Users') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('postcategory.index') }}">
                                                {{ __('Blog Category') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('post.index') }}">
                                                {{ __('Blog') }}
                                            </a>

                                            <a class="dropdown-item" href="{{ route('localservice.index') }}">
                                                {{ __('Local Service') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('comment.index') }}">
                                                {{ __('Comments') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ route('career.index') }}">
                                                {{ __('Career') }}
                                            </a>
                                        @endif



                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            <!-- Language Dropdown -->
                            <li class="nav-item dropdown li-change-lang">
                                <div class="dropdown">
                                    <button class="btn bg-vr dropdown-toggle" type="button" id="languageDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>
                                            <span>{{ strtoupper(app()->getLocale()) }}</span>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                        <li><a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                                                href="#" onclick="switchLanguage('en')">English</a></li>
                                        <li><a class="dropdown-item {{ app()->getLocale() == 'zh' ? 'active' : '' }}"
                                                href="#" onclick="switchLanguage('zh')">Chinese</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>






        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="text-lg-start text-white bg-dark">
            <!-- Section: Links  -->
            <section class="pt-2">
                <div class="container text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-sm-left">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">{{ __('Services') }}</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #f9b500; height: 2px" />
                            <p>
                                <a href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('waterDamage') }}</a>
                            </p>
                            <p>
                                <a href="{{ route('fireDamage', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('fireDamage') }}</a>
                            </p>
                            <p>
                                <a href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('moldRemediation') }}</a>
                            </p>
                            {{-- <p>
                                <a href="{{ route('stormDisaster', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('stormDisaster') }} </a>
                            </p> --}}
                            <p>
                                <a href="{{ route('construction', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('construction') }}</a>
                            </p>
                            <p>
                                <a href="{{ route('commercialServices', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('commercialServices') }}</a>
                            </p>
                            <p>
                                <a href="{{ route('specialtyCleaning', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('SpecialtyCleaning') }}</a>
                            </p>
                            <p>
                                <a href="{{ route('generalCleaning', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('GeneralCleaning') }} </a>
                            </p>
                            <p>
                                <a href="{{ route('localServices', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('localServices') }}</a>
                            </p>

                            {{-- <p>
                                <a href="{{ route('generalCleaning', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('Roof Tarp/Board-up') }} </a>
                            </p>
                            <p>
                                <a href="{{ route('generalCleaning', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('Industries Serviced') }} </a>
                            </p> --}}
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-sm-left">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">{{ __('About') }}</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #f9b500; height: 2px" />

                            <p>
                                <a href="{{ route('contact', ['lang' => app()->getLocale()]) }}#whyvr"
                                    class="text-white">{{ __('Why RV Restoration') }} </a>
                            </p>
                            <p>
                                <a href="{{ route('about', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('About Us') }}</a>
                            </p>
                            <p>
                                <a href="{{ route('careers', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('Careers') }}</a>
                            </p>
                            <p>
                                <a href="{{ route('contact', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('Contact Us') }}</a>
                            </p>
                            <p>
                                <a href="{{ route('blog', ['lang' => app()->getLocale()]) }}"
                                    class="text-white">{{ __('Blog') }}</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4 text-sm-left">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">{{ __('Contact Us') }}</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #f9b500; height: 2px" />

                            <p><i class="fas fa-envelope mr-3"></i> info@vrrestoration.ca</p>
                            <p><a href="tel:6048003900" class="text-white"><i class="fas fa-phone mr-3"></i> +1
                                604-800-3900</a></p>
                            <p><a href="tel:7783186796" class="text-white"><i class="fas fa-phone mr-3"></i> +1
                                778-318-6796</a></p>
                            <hr>
                            <p class=" mb-0">
                                636 Clyde Ave, West Vancouver, BC
                            </p>
                            <hr>
                            <p class=" mb-0">
                                #112, 828 Harbourside, Dr North Vancouver, BC
                            </p>
                            <hr>
                            <p class=" mb-0">
                                4720 lougheed hwy, Burnaby, BC
                            </p>
                            <hr>
                            <p class=" mb-0">
                                #211, 3030 Lincoln Ave, Coquitlam, BC
                            </p>
                        </div>
                        <!-- Grid column -->
                    </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="p-3 text-center">
                © 2020 Copyright:
                <span class="txt-bold">VR Restoration.</span>
                Develop and Design by
                <a class="txt-vr" href="https://webpulse.ca/">WebPulse</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- End of .container -->

    </div>


    <div id="preloader"></div>


    @yield('scripts')

    <script src="{{ asset('js/main.js') }}"></script>

    @if (app()->getLocale() == 'en')
        <a href="tel:6048003900" class="call-button">
            <i class="bi bi-telephone-fill"></i>
        </a>
    @endif

</body>

</html>
