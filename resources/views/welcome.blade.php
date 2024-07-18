@extends('layouts.app')

@section('header')
    <title>VR Restoration</title>
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
                <h2>{{ __('WE ARE PLUS RESTORATION') }}</h2>
                <p style="font-size: 40px">{{ __('Focused on') }}
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
                    <a href="#" class="text-decoration-none">
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
                    <a href="#" class="text-decoration-none">
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
                    <a href="#" class="text-decoration-none">
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
                    <a href="#" class="text-decoration-none">
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
                    <a href="#" class="text-decoration-none">
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
                    <a href="#" class="text-decoration-none">
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
                    <a href="#" class="text-decoration-none">
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
                    <a href="#" class="text-decoration-none">
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

                <div class="swiper-slide">
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
                </div>


            </div>

            <div class="swiper-button-next-custom">
                <span class="next-text">Next</span>
            </div>
            <div class="swiper-button-prev-custom">

                <span class="prev-text">Previous</span>
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
                    <p class="fs-5 pb-3 mb-4">
                        When your property is impacted by water, fire, or mold damage, it's crucial to act quickly to avoid
                        additional damage. <br>
                        Opting for the services of a restoration company is the most reliable means to
                        ensure a swift and thorough restoration of your property.
                    </p>
                    <p class="fs-4 fw-bold">WHY WE ARE PLUSE RESTORATION:</p>
                    <ul>
                        <li>
                            <i class="bi bi-clipboard-check-fill"></i>
                            <div>
                                <p class="fs-5 pt-2">We work closely with <strong class="txt-vr"
                                        style="font-weight: 800">
                                        all
                                        insurance </strong> brokers, adjusters, risk managers and claim managers.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-coin"></i>
                            <div>
                                <p class="fs-5 pt-2">
                                    We have implemented lean strategies in our operation to reduce our overhead costs,
                                    therefore <strong class="txt-vr" style="font-weight: 800"> our costs are much lower
                                    </strong> our competitors
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-award"></i>
                            <div>
                                <p class="fs-5 pt-2">
                                    Our team consists of <strong class="txt-vr" style="font-weight: 800"> highly trained
                                        and certified </strong> restoration professionals with IICRC
                                    certification, ready to serve you.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-alarm-fill"></i>
                            <div>
                                <p class="fs-5 pt-2">
                                    Time is crucial when dealing with water damage. Our <strong class="txt-vr"
                                        style="font-weight: 800"> 24/7 emergency</strong> response team is
                                    ready to minimize damage and prevent complications, offering quick and reliable service
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
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-3.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-4.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-7.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/client-8.png') }}" class="img-fluid"
                            alt=""></div>
                </div>
            </div>

        </div>
    </section><!-- /Clients Section -->


    <!-- Services We Provide -->
    <section id="services" class="services section bg-vr-second">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="">{{ __('Services We Provide') }}</h2>
        </div><!-- End Section Title -->

        <div class="container">



            <div class="row">
                <div class="col-12 col-lg-3 mb-3 ">
                    <div class="icon-text">
                        <a href="#">
                            <img style="max-width: 80px" src="{{ asset('img/template1.png') }}"
                                alt="{{ __('SpecialtyCleaning') }}">
                            <span class="ms-2 fs-6 text">{{ __('SpecialtyCleaning') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="#">
                            <img style="max-width: 80px" src="{{ asset('img/template2.png') }}"
                                alt="{{ __('GeneralCleaning') }}">
                            <span class="ms-2 fs-6 text">{{ __('GeneralCleaning') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="#">
                            <img style="max-width: 80px" src="{{ asset('img/template11.png') }}"
                                alt="{{ __('waterDamage') }}">
                            <span class="ms-2 fs-6 text">{{ __('waterDamage') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="#">
                            <img style="max-width: 80px" src="{{ asset('img/template10.png') }}"
                                alt="{{ __('fireDamage') }}">
                            <span class="ms-2 fs-6 text">{{ __('fireDamage') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="#">
                            <img style="max-width: 80px" src="{{ asset('img/template9.png') }}"
                                alt="{{ __('moldRemediation') }}">
                            <span class="ms-2 fs-6 text">{{ __('moldRemediation') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="#">
                            <img style="max-width: 80px" src="{{ asset('img/template3.png') }}"
                                alt="{{ __('commercial') }}">
                            <span class="ms-2 fs-6 text">{{ __('commercial') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="#">
                            <img style="max-width: 80px" src="{{ asset('img/template5.png') }}"
                                alt="{{ __('Residential') }}">
                            <span class="ms-2 fs-6 text">{{ __('Residential') }}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="icon-text">
                        <a href="#">
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

                <div class="section-title">
                    <h2>{{ __('About Us') }} </h2>
                </div>

                <div class="col-lg-7  content " data-aos="fade-right" data-aos-delay="100">

                    <p class="txt-def">
                        At VR Plus restoration, we provide comprehensive property damage emergency services and restoration
                        24/7, 365 days a year. Our qualified, licensed, and highly trained crews work efficiently to restore
                        your residential or commercial property to its pre-loss condition, specializing in flood, fire,
                        wind, mold, and asbestos restoration.

                    </p>
                    <ul>
                        <li>
                            <div>
                                <h5>
                                    Below are just a few of the reasons why you should call VR Plus restoration Restoration:
                                </h5>
                                <p class=" mb-1">VR Plus restoration technicians are ready to respond to your property damage, 24/7. </p>
                                <p>Our fully equipped team will be onsite within half and hour. </p>
                            </div>
                        </li>
                    </ul>
                    <div class="send">
                        <button class="px-btn theme"><span>{{ __('Read More') }}</span> <i class="arrow"></i></button>
                    </div>
                </div>

                <div class="col-lg-5 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/about.jpeg') }}" class="img-fluid" style="max-height: 400px"
                        alt="">
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
                            @for ($i = 0; $i < 8; $i++)
                                <div class="swiper-slide my-3 ">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title txt-vr">What to do when your basement floods?</h5>
                                            <hr>
                                            <p class="card-text">Start with these steps:Shut off electricity and gas in the
                                                area.
                                                If
                                                you’re not sure ...</p>
                                            <a href="#" class="text-decoration-none text-black">Read More
                                                <i class="bi bi-chevron-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
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

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6687237f9d7f358570d73344/1i1vu5aug';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection
