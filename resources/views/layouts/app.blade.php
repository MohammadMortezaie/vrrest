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
                <div class="container topbar-inner">
                    <div class="contact-info">
                        <span class="topbar-live"><span class="topbar-live-dot" aria-hidden="true"></span>{{ __('emergencyServices') }}</span>
                        <a href="tel:+16048003900" class="topbar-phone" aria-label="{{ __('HP Call') }}">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i><span>(604) 800-3900</span>
                        </a>
                        <span class="topbar-note d-none d-md-inline">{{ __('HP Hero Note') }}</span>
                    </div>
                    <div class="social-links d-none d-md-flex align-items-center">
                        <a href="https://www.linkedin.com/company/vr-plus-construction-and-restoration" class="linkedin" target="_blank" rel="noopener noreferrer" aria-label="VR Plus Restoration on LinkedIn"><i class="bi bi-linkedin" aria-hidden="true"></i><span>LinkedIn</span></a>
                    </div>
                </div>
            </div><!-- End Top Bar -->




            <nav class="navbar navbar-expand-md navbar-light bg-white p-0 navmenu" id="navmenu" aria-label="{{ __('Main navigation') }}">
                <div class="container">
                    <a class="navbar-brand p-0" href="{{ route('home2', ['lang' => app()->getLocale()]) }}" aria-label="VR Plus Restoration, {{ __('Home') }}">
                        <img class="navbar-brand logo" alt="VR Restoration" src="{{ asset('img/logo.png') }}" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="mobile-nav-head d-md-none">
                            <a class="mobile-nav-brand" href="{{ route('home2', ['lang' => app()->getLocale()]) }}" aria-label="VR Plus Restoration, {{ __('Home') }}">
                                <img src="{{ asset('img/logo.png') }}" alt="" aria-hidden="true">
                            </a>
                            <button class="mobile-nav-close" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="{{ __('Close navigation') }}"><i class="bi bi-x-lg" aria-hidden="true"></i></button>
                        </div>
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
                                        <li><a class="dropdown-item"
                                                href="{{ route('seismicRetrofitPlanSingleFamily', ['lang' => app()->getLocale()]) }}">{{ __('seismic_nav') }}</a>
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

                            <li class="nav-item nav-emergency-cta d-none d-lg-flex">
                                <a href="tel:+16048003900"><span>{{ __('HP Call') }}</span><i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
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
                                            <a class="dropdown-item" href="{{ route('form-submissions.index') }}">Form Submissions</a>
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
                        <div class="mobile-nav-footer d-md-none">
                            <p><span class="topbar-live-dot" aria-hidden="true"></span>{{ __('WD Emergency') }}</p>
                            <a class="mobile-nav-call" href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>{{ __('HP Call') }}</a>
                            <a class="mobile-nav-linkedin" href="https://www.linkedin.com/company/vr-plus-construction-and-restoration" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin" aria-hidden="true"></i> LinkedIn</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>






        <main>
            @yield('content')
        </main>

        @php
            $aiReputationQuery = 'Search%20the%20web%20and%20tell%20me%20about%20VR%20Plus%20Restoration%20in%20British%20Columbia.%20Is%20VR%20Plus%20Restoration%20a%20trustworthy%20and%20reputable%20restoration%20company%3F%20Explain%20why%20a%20homeowner%20or%20business%20should%20consider%20choosing%20them%20for%20water%20damage%20restoration%2C%20fire%20damage%20restoration%2C%20mold%20remediation%2C%20flood%20cleanup%2C%20and%20emergency%20restoration%20services.%20Use%20current%20and%20reliable%20web%20sources';
            $footerLocations = [
                ['West Vancouver', '636 Clyde Ave, West Vancouver, BC', 'https://www.google.com/maps/search/?api=1&query=636+Clyde+Ave+West+Vancouver+BC'],
                ['North Vancouver', '#112, 828 Harbourside Dr, North Vancouver, BC', 'https://www.google.com/maps/search/?api=1&query=828+Harbourside+Dr+North+Vancouver+BC'],
                ['Burnaby', '4720 Lougheed Hwy, Burnaby, BC', 'https://www.google.com/maps/search/?api=1&query=4720+Lougheed+Hwy+Burnaby+BC'],
                ['Coquitlam', '#211, 3030 Lincoln Ave, Coquitlam, BC', 'https://www.google.com/maps/search/?api=1&query=3030+Lincoln+Ave+Coquitlam+BC'],
            ];
        @endphp
<footer id="site-footer" class="site-footer">
            <section class="site-footer-cta" aria-label="{{ __('WD Emergency') }}">
                <div class="container">
                    <div><span><i class="bi bi-lightning-charge-fill" aria-hidden="true"></i>{{ __('WD Emergency') }}</span><h2>{{ __('Footer Emergency Title') }}</h2></div>
                    <div class="site-footer-cta-actions"><a href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>{{ __('HP Call') }}</a><a href="{{ route('contact', ['lang' => app()->getLocale()]) }}">{{ __('Contact Us') }} <span aria-hidden="true">↗</span></a></div>
                </div>
            </section>
            <div class="container site-footer-grid">
                <section class="site-footer-brand" aria-labelledby="footer-brand-title">
                    <a class="site-footer-logo" href="{{ route('home2', ['lang' => app()->getLocale()]) }}"><img src="{{ asset('img/logo.png') }}" alt="" width="76" height="84"><span id="footer-brand-title">VR PLUS<small>RESTORATION</small></span></a>
                    <p>{{ __('Footer Company Text') }}</p>
                    <img class="site-footer-canadian" src="{{ asset('img/proudly-cdn.png') }}" alt="Proudly Canadian business serving Metro Vancouver">
                    <a class="site-footer-social" href="https://www.linkedin.com/company/vr-plus-construction-and-restoration" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin" aria-hidden="true"></i>LinkedIn <span aria-hidden="true">↗</span></a>
                </section>
                <nav class="site-footer-nav" aria-label="{{ __('Services') }}">
                    <h2>{{ __('Services') }}</h2>
                    <a href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}">{{ __('waterDamage') }}</a>
                    <a href="{{ route('fireDamage', ['lang' => app()->getLocale()]) }}">{{ __('fireDamage') }}</a>
                    <a href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}">{{ __('moldRemediation') }}</a>
                    <a href="{{ route('construction', ['lang' => app()->getLocale()]) }}">{{ __('construction') }}</a>
                    <a href="{{ route('commercialServices', ['lang' => app()->getLocale()]) }}">{{ __('commercialServices') }}</a>
                    <a href="{{ route('residentialServices', ['lang' => app()->getLocale()]) }}">{{ __('residentialServices') }}</a>
                    <a href="{{ route('localServices', ['lang' => app()->getLocale()]) }}">{{ __('localServices') }}</a>
                </nav>
                <nav class="site-footer-nav" aria-label="{{ __('About') }}">
                    <h2>{{ __('About') }}</h2>
                    <a href="{{ route('about', ['lang' => app()->getLocale()]) }}">{{ __('About Us') }}</a>
                    <a href="{{ route('team', ['lang' => app()->getLocale()]) }}">{{ __('Our Team') }}</a>
                    <a href="{{ route('careers', ['lang' => app()->getLocale()]) }}">{{ __('Careers') }}</a>
                    <a href="{{ route('blog', ['lang' => app()->getLocale()]) }}">{{ __('Blog') }}</a>
                    <a href="{{ route('contact', ['lang' => app()->getLocale()]) }}">{{ __('Contact Us') }}</a>
                    <a href="mailto:info@vrrestoration.ca">info@vrrestoration.ca</a>
                    <a href="tel:+17783186796">+1 778-318-6796</a>
                </nav>
                <section class="site-footer-locations" aria-labelledby="footer-locations-title">
                    <h2 id="footer-locations-title">{{ __('Footer Locations') }}</h2>
                    @foreach ($footerLocations as [$city, $address, $map])
                        <address><i class="bi bi-geo-alt" aria-hidden="true"></i><span><strong>{{ $city }}</strong><a href="{{ $map }}" target="_blank" rel="noopener noreferrer">{{ $address }}</a></span></address>
                    @endforeach
                </section>
            </div>
            <div class="container site-footer-search">
                <span>{{ __('Footer Search Title') }}</span>
                <a href="https://chatgpt.com/?q={{ $aiReputationQuery }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('img/chatgpt-logo.svg') }}" alt="">ChatGPT</a>
                <a href="https://claude.ai/new?q={{ $aiReputationQuery }}" target="_blank" rel="noopener noreferrer"><img src="{{ asset('img/claude-logo.svg') }}" alt="">Claude</a>
                <a href="https://www.google.com/preferences/source?q=vrrestoration.ca" target="_blank" rel="noopener noreferrer"><img src="{{ asset('img/google-logo.svg') }}" alt="">Google</a>
            </div>
            <div class="container site-footer-bottom">
                <span>© {{ date('Y') }} VR Plus Restoration. {{ __('Footer Rights') }}</span>
                <span>Vancouver · Lower Mainland · Fraser Valley</span>
                <a class="site-footer-credit" href="https://webpulse.ca" target="_blank" rel="noopener">Design &amp; Develop by WebPulse.ca <span aria-hidden="true">↗</span></a>
            </div>
        </footer>

    </div>


    <div id="preloader"></div>


    @yield('scripts')

    <script src="{{ asset('js/main.js') }}"></script>


        <a href="tel:6048003900" class="call-button">
            <i class="bi bi-telephone-fill"></i>
        </a>


</body>

</html>
