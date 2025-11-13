@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <link href="{{ asset('vendors/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
@endsection


@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <img src="{{ asset('img/hero-bg3.jpeg') }}" alt="RV Restoration Main Photo" data-aos="fade-in">
        {{-- <img src="{{ asset('img/hero-bg.jpg') }}" alt="RV Restoration Main Photo" data-aos="fade-in"> --}}
        <div class="container position-relative">
            <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                <h1>{{ __('WE ARE PLUS RESTORATION') }}
                    <br><small>{{ __('h1-small') }}</small>
                </h1>
                <p>{{ __('Focused on') }}
                    <span id="ityped"></span>
                </p>
            </div><!-- End Welcome -->
        </div><!-- End  Content-->
    </section>


    <!-- /Categories Section -->
    <section id="clients" class="clients section my-3 container">


        <div class="" data-aos="fade-up" data-aos-delay="100">
            <div class="section-title mb-0 pb-0">
                <h2>{{ __('Categories') }} </h2>
            </div>

        </div>


        <div class="swiper py-2 px-4"
            data-swiper-config='
            {
              "loop": true,
              "speed": 600,
              "slidesPerView": "auto",
              "navigation": {
                  "nextEl": ".swiper-button-next-custom",
                  "prevEl": ".swiper-button-prev-custom"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "480": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                },
                "640": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                },
                "1000": {
                  "slidesPerView": 4,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 5
                }
              }
            }'>




            <div class="swiper-wrapper align-items-center m-3">



                <div class="swiper-slide">
                    <a href="{{ route('specialtyCleaning', ['lang' => app()->getLocale()]) }}" class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template1.png') }}" alt="{{ __('SpecialtyCleaning') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('SpecialtyCleaning') }}</h3>
                                <div class="text-muted ">{{ __('Restoration') }}</div>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="swiper-slide">
                    <a href="{{ route('generalCleaning', ['lang' => app()->getLocale()]) }}" class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template2.png') }}" alt="{{ __('GeneralCleaning') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('GeneralCleaning') }}</h3>
                                <div class="text-muted ">{{ __('Services') }}</div>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="swiper-slide">
                    <a href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}" class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template11.png') }}" alt="{{ __('waterDamage') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('waterDamage') }}</h3>
                                <div class="text-muted ">{{ __('Restoration') }}</div>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="swiper-slide">
                    <a href="{{ route('fireDamage', ['lang' => app()->getLocale()]) }}" class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template10.png') }}" alt="{{ __('fireDamage') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('fireDamage') }}</h3>
                                <div class="text-muted ">{{ __('Restoration') }}</div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="swiper-slide">
                    <a href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}" class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template9.png') }}" alt="{{ __('moldRemediation') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('moldRemediation') }}</h3>
                                <div class="text-muted ">{{ __('Services') }}</div>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="swiper-slide">
                    <a href="{{ route('commercialServices', ['lang' => app()->getLocale()]) }}"
                        class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template3.png') }}" alt="{{ __('commercial') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('commercial') }} </h3>
                                <div class="text-muted ">{{ __('Services') }}</div>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="swiper-slide">
                    <a href="{{ route('residentialServices', ['lang' => app()->getLocale()]) }}"
                        class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template5.png') }}" alt="{{ __('Residential') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('Residential') }}</h3>
                                <div class="text-muted ">{{ __('Services') }}</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="{{ route('construction', ['lang' => app()->getLocale()]) }}" class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template6.png') }}" alt="{{ __('construction') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('construction') }} </h3>
                                <div class="text-muted ">{{ __('Services') }}</div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- <div class="swiper-slide">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center border-0" style="width: 180px; margin: 0 auto">
                            <div class="card-body">
                                <div class="card-card-avatar  ">
                                    <img src="{{ asset('img/template7.png') }}" alt="{{ __('stormDisaster') }}">
                                </div>
                                <h3 class="card-title h6 mb-1 ">{{ __('stormDisaster') }}</h3>
                                <div class="text-muted ">{{ __('Restoration') }}</div>
                            </div>
                        </div>
                    </a>
                </div> --}}


            </div>

            <div class="swiper-button-next-custom">
                <span class="next-text">{{ __('Next') }}</span>
            </div>
            <div class="swiper-button-prev-custom">

                <span class="prev-text">{{ __('Previous') }}</span>
            </div>



        </div>

    </section><!-- /Categories Section -->


    <!-- Restoration and Cleaning Services -->
    <section id="about" class="about section bg-dark text-white">

        <div class="container">

            <div class="row gy-4">

                <div class="col-12 content " data-aos="fade-right" data-aos-delay="100">
                    <div class="section-title">
                        <h2 class="text-white">{{ __('Restoration and Cleaning Services') }}</h2>
                    </div>
                    <p class=" pb-3 mb-4 txt-def">
                        {{ __('welcome 1-1') }}
                        <br>
                        {{ __('welcome 1-2') }}

                    </p>
                    <p class="fs-4 fw-bold">{{ __('welcome 1-3') }}</p>
                    <ul>
                        <li>
                            <i class="bi bi-clipboard-check-fill"></i>
                            <div>
                                <p class=" pt-2 txt-def">{{ __('welcome 1-4') }} <strong class="txt-vr"
                                        style="font-weight: 800">
                                        {{ __('welcome 1-5') }} </strong> {{ __('welcome 1-6') }}</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-coin"></i>
                            <div>
                                <p class="txt-def pt-2"> {{ __('welcome 1-7') }}
                                    <strong class="txt-vr" style="font-weight: 800"> {{ __('welcome 1-8') }}
                                    </strong> {{ __('welcome 1-9') }}
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-award"></i>
                            <div>
                                <p class="txt-def pt-2">{{ __('welcome 1-10') }}
                                    <strong class="txt-vr" style="font-weight: 800"> {{ __('welcome 1-11') }}</strong>
                                    {{ __('welcome 1-12') }}
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-alarm-fill"></i>
                            <div>
                                <p class="txt-def pt-2">
                                    {{ __('welcome 1-13') }}<strong class="txt-vr" style="font-weight: 800">
                                        {{ __('welcome 1-14') }}</strong> {{ __('welcome 1-15') }}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /Restoration and Cleaning Services -->


    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container">

            <div class="swiper"
                data-swiper-config='{
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }'>
                <div class="swiper-wrapper justify-content-center align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid"
                            alt="BC housing"></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-3.jpg') }}" class="img-fluid"
                            alt="iicrc"></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-4.jpg') }}" class="img-fluid"
                            alt="Canada"></div>
                    <div class="swiper-slide"><img src="{{ asset('img/IICRCLogo.avif') }}" class="img-fluid"
                            alt="Canada"></div>
                    <div class="swiper-slide"><img src="{{ asset('img/VRCALogo.png') }}" class="img-fluid"
                            alt="Canada"></div>
                    <div class="swiper-slide"><img src="{{ asset('img/googleg.png') }}" class="img-fluid"
                            alt="google garanted"></div>
                </div>
            </div>

        </div>
    </section><!-- /Clients Section -->


    <!-- Services We Provide -->
    <section id="services" class="services section bg-vr-second">

        <!-- Section Title -->
        <div class="container section-title">
            <h2 class="">{{ __('Services We Provide') }}</h2>
        </div><!-- End Section Title -->

        <div class="container">



            <div class="row">
                <div class="col-12 col-lg-3 mb-3 ">
                    <div class="icon-text">
                        <a href="{{ route('specialtyCleaning', ['lang' => app()->getLocale()]) }}">
                            <img style="max-width: 80px" src="{{ asset('img/template1.png') }}"
                                alt="{{ __('SpecialtyCleaning') }}">
                            <span class="ms-2 fs-6 text">{{ __('SpecialtyCleaning') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="{{ route('generalCleaning', ['lang' => app()->getLocale()]) }}">
                            <img style="max-width: 80px" src="{{ asset('img/template2.png') }}"
                                alt="{{ __('GeneralCleaning') }}">
                            <span class="ms-2 fs-6 text">{{ __('GeneralCleaning') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}">
                            <img style="max-width: 80px" src="{{ asset('img/template11.png') }}"
                                alt="{{ __('waterDamage') }}">
                            <span class="ms-2 fs-6 text">{{ __('waterDamage') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="{{ route('fireDamage', ['lang' => app()->getLocale()]) }}">
                            <img style="max-width: 80px" src="{{ asset('img/template10.png') }}"
                                alt="{{ __('fireDamage') }}">
                            <span class="ms-2 fs-6 text">{{ __('fireDamage') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}">
                            <img style="max-width: 80px" src="{{ asset('img/template9.png') }}"
                                alt="{{ __('moldRemediation') }}">
                            <span class="ms-2 fs-6 text">{{ __('moldRemediation') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="{{ route('commercialServices', ['lang' => app()->getLocale()]) }}">
                            <img style="max-width: 80px" src="{{ asset('img/template3.png') }}"
                                alt="{{ __('commercial') }}">
                            <span class="ms-2 fs-6 text">{{ __('commercial') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="{{ route('residentialServices', ['lang' => app()->getLocale()]) }}">
                            <img style="max-width: 80px" src="{{ asset('img/template5.png') }}"
                                alt="{{ __('Residential') }}">
                            <span class="ms-2 fs-6 text">{{ __('Residential') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="{{ route('construction', ['lang' => app()->getLocale()]) }}">
                            <img style="max-width: 80px" src="{{ asset('img/template6.png') }}"
                                alt="{{ __('construction') }}">
                            <span class="ms-2 fs-6 text">{{ __('construction') }}</span>
                        </a>
                    </div>
                </div>
            </div>




        </div>

    </section><!-- /Services We Provide -->



    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">



                <div class="col-lg-7 mt-0 content ">

                    <div class="section-title">
                        <h2>{{ __('All-in-One Restoration Company') }} </h2>
                    </div>
                    <p class="fs-7">
                        {{ __('home p-1') }}

                    </p>




                    <div class="container my-1">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold">{{ __('home h2-1') }}</h2>
                            <p class="text-muted mb-0"> {{ __('home p-2') }}</p>
                        </div>

                    <p class="text-center mt-3">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                            style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            📞 Call +1 604-800-3900
                        </a>
                    </p>

                        <div class="row g-4 justify-content-center">
                            <!-- Step 1 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="card h-100 text-center border-0 shadow-sm">
                                    <div class="card-body p-4">
                                        <div class="rounded-circle bg-danger bg-opacity-10 d-inline-flex justify-content-center align-items-center mb-3"
                                            style="width:70px;height:70px;">
                                            <i class="bi bi-telephone-fill text-danger fs-3"></i>
                                        </div>
                                        <h5 class="fw-semibold">{{ __('home p-3') }}</h5>
                                        <p class="text-muted mb-0">{{ __('home p-4') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="card h-100 text-center border-0 shadow-sm">
                                    <div class="card-body p-4">
                                        <div class="rounded-circle bg-warning bg-opacity-10 d-inline-flex justify-content-center align-items-center mb-3"
                                            style="width:70px;height:70px;">
                                            <i class="bi bi-shield-fill-check text-warning fs-3"></i>
                                        </div>
                                        <h5 class="fw-semibold">{{ __('home p-5') }}</h5>
                                        <p class="text-muted mb-0">{{ __('home p-6') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="card h-100 text-center border-0 shadow-sm">
                                    <div class="card-body p-4">
                                        <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex justify-content-center align-items-center mb-3"
                                            style="width:70px;height:70px;">
                                            <i class="bi bi-house-check-fill text-success fs-3"></i>
                                        </div>
                                        <h5 class="fw-semibold">{{ __('home p-7') }}</h5>
                                        <p class="text-muted mb-0">{{ __('home p-8') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

                <div class="col-lg-5 position-relative align-self-start">
                    <img src="{{ asset('img/water-damage-vr.jpeg') }}" class="img-fluid" style="max-height: 600px"
                        alt="Team of VR Restoration In Vancouver Canada Expert in Restoration and Cleaning Services">
                </div>


                <div class="col-md-12">

                    <div class="container my-4">
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <!-- Vancouver -->
                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">Vancouver</h6>
                                </div>
                            </div>

                            <!-- West Vancouver -->
                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">West Vancouver</h6>
                                </div>
                            </div>

                            <!-- North Vancouver -->
                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">North Vancouver</h6>
                                </div>
                            </div>

                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">Couqitlam</h6>
                                </div>
                            </div>

                            <!-- Burnaby -->
                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">Burnaby</h6>
                                </div>
                            </div>

                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">Richmond</h6>
                                </div>
                            </div>

                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">Port Couqitlam</h6>
                                </div>
                            </div>
                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">Surrey</h6>
                                </div>
                            </div>

                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">New Westminster</h6>
                                </div>
                            </div>

                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">Abbostfrod</h6>
                                </div>
                            </div>

                            <div class="card text-center" style="width: 160px;">
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill fs-2 text-danger"></i>
                                    <h6 class="mt-2 mb-0">Chilliwack</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="section-title">
                    <h2>{{ __('About Us') }} </h2>
                </div>

                <div class="col-lg-7 mt-0 content ">

                    <p class="fs-6 txt-def">{{ __('welcome 1-16') }}

                    </p>
                    <ul>
                        <li>
                            <div>
                                <h5 class="">{{ __('welcome 1-17') }}

                                </h5>
                                <p class="txt-def mb-1">{{ __('welcome 1-18') }}</p>
                                <p class="txt-def">{{ __('welcome 1-19') }} </p>
                            </div>
                        </li>
                    </ul>
                    <div class="send">
                        <a href="{{ route('about', ['lang' => app()->getLocale()]) }}"
                            class="px-btn theme"><span>{{ __('Read More') }}</span> <i class="arrow"></i></a
                            href="{{ route('about', ['lang' => app()->getLocale()]) }}">
                    </div>
                </div>

                <div class="col-lg-5 position-relative align-self-start">
                    <img src="{{ asset('img/about.jpeg') }}" class="img-fluid" style="max-height: 400px"
                        alt="Team of VR Restoration In Vancouver Canada Expert in Restoration and Cleaning Services">
                </div>



            </div>

        </div>

    </section><!-- /About Section -->



    <!-- Recommended For You -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="section-title">
                    <h2>{{ __('Recommended For You') }} </h2>
                </div>


                <div class="container">

                    <div class="swiper"
                        data-swiper-config=' {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                          "delay": 4000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                          "el": ".swiper-pagination",
                          "type": "bullets",
                          "clickable": true
                        },
                        "breakpoints": {
                          "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 30
                          },
                          "480": {
                            "slidesPerView": 1,
                            "spaceBetween": 30
                          },
                          "640": {
                            "slidesPerView": 2,
                            "spaceBetween": 30
                          },
                          "992": {
                            "slidesPerView": 3,
                            "spaceBetween": 30
                          }
                        }
                      }'>
                        <div class="swiper-wrapper ">
                            @foreach ($blog as $b)
                                <div class="swiper-slide my-3 ">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title txt-vr">{{ $b->title }}</h5>
                                            <hr>
                                            <p class="card-text">
                                                {{ $b->subtitle }}
                                            </p>
                                            <a href="{{ route('blog.post', ['lang' => app()->getLocale(), 'blog' => $b->id, 'slug' => $b->slug]) }}"
                                                class="text-decoration-none text-black">{{ __('Read More') }}
                                                <i class="bi bi-chevron-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>


    </section><!-- /Recommended For You -->
@endsection


@section('scripts')
    <script src="{{ asset('vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('vendors/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="https://unpkg.com/ityped@1.0.3/dist/index.min.js"></script>
    <script src="{{ asset('js/front.js') }}"></script>


@endsection
