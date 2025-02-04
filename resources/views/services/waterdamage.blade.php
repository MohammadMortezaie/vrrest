@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}


    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/water-damage.jpeg') }}"
                        alt="{{ __('Water Damage 1-1') }}">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h1 class="fs-1 fw-bolder">{{ __('Water Damage 1-1') }} </h1>
                            <hr>
                            <p class="lead  ">
                                {{ __('Water Damage 1-2') }}

                            </p>
                            <p class="lead mb-5 ">
                                {{ __('Water Damage 1-2-2') }} <strong> {{ __('Water Damage 1-2-3') }}</strong>.
                                {{ __('Water Damage 1-2-4') }} <strong><a href="tel:+16048003900"
                                        class="btn btn-warning  fw-bolder">+1 604-800-3900</a></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-12 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1"> {{ __('Water Damage 1-3-1') }}</h2>
                    <p class="lead ">
                       {{ __('Water Damage 1-3-2') }}
                    </p>
                    <div class="text-center mt-3">
                        <strong class="d-block mb-2" style="font-size: 1.2rem;">{{ __('Mold 1-3-7') }} </strong>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3" style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            📞 Call Now: +1 604-800-3900
                        </a>
                        <p class="mt-2" style="font-size: 0.95rem; color: #555;">{{ __('Mold 1-3-8') }}  </p>
                    </div>

                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage 1-4') }}
                    </h2>
                    <p class="lead ">{{ __('Water Damage 1-5') }}
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section class="py-3 py-md-5  ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-6 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('What To DO') }}
                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>{{ __('Water Damage 1-6') }}

                            </strong>{{ __('Water Damage 1-7') }}

                        </li>


                        <li>
                            <strong>{{ __('Water Damage 1-8') }}

                            </strong>{{ __('Water Damage 1-9') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-10') }}

                            </strong>{{ __('Water Damage 1-11') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-12') }}

                            </strong>{{ __('Water Damage 1-13') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-14') }}

                            </strong>
                            {{ __('Water Damage 1-15') }}
                        </li>

                        <li>
                            <strong> {{ __('Water Damage 1-16') }}

                            </strong>
                            {{ __('Water Damage 1-17') }}
                        </li>
                    </ul>

                </div>
                <div class="col-md-6 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1"> {{ __('What Not To DO') }}

                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>{{ __('Water Damage 1-18') }}

                            </strong>{{ __('Water Damage 1-19') }}


                        </li>


                        <li>
                            <strong>{{ __('Water Damage 1-20') }}

                            </strong>{{ __('Water Damage 1-21') }}


                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-22') }}

                            </strong>{{ __('Water Damage 1-23') }}

                        </li>


                    </ul>

                </div>


            </div>
        </div>
    </section>


    <section class="py-3 py-md-5 bg-vr-second ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-7 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage 1-24') }}

                    </h2>

                    <p class="lead"> {{ __('Water Damage 1-25') }}

                        <button class="btn btn-link txt-vr" type="button" data-bs-toggle="collapse"
                            onclick="scrollToText()" data-bs-target="#collapseVrRestoration" aria-expanded="false"
                            aria-controls="collapseVrRestoration"> {{ __('Read More') }} >>
                        </button>
                    </p>

                </div>
                <div class="col-md-5 mb-3">

                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/water-damage2.jpeg') }}"
                        alt="Water damage restoration in Vancouver services">
                </div>

                <div class="collapse" id="collapseVrRestoration">
                    <div class="card card-body " id="textToScrollTo">
                        <p class="lead">
                            {{ __('Water Damage 1-26') }}

                            <br>
                            <br>
                            {{ __('Water Damage 1-27') }}

                            <br>
                            <br>
                            {{ __('Water Damage 1-28') }}


                            <br>
                            <br>
                            {{ __('Water Damage 1-29') }}
                            <br>
                            <br>
                            {{ __('Water Damage 1-30') }}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-3 py-md-5 ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-12 mb-3">
                    <h2 class="section-title-h1">
                        {{ __('Water Damage 1-31') }}

                    </h2>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            1) {{ __('Water Damage 1-32') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-33') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            2) {{ __('Water Damage 1-34') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-35') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            3){{ __('Water Damage 1-36') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-37') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            4) {{ __('Water Damage 1-38') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text"> {{ __('Water Damage 1-39') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            5) {{ __('Water Damage 1-40') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-41') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            6) {{ __('Water Damage 1-42') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-43') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            7) {{ __('Water Damage 1-44') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-45') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            8) {{ __('Water Damage 1-46') }}
                        </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text ">{{ __('Water Damage 1-47') }}

                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 my-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('About 1-9') }}
                    </h2>
                    <hr>

                    <h3 class="fs-4 fw-bold">
                         {{ __('Water Damage 1-46-1') }}
                    </h3>
                    <p>
                        {{ __('Water Damage 1-46-2') }}
                    </p>


                    <div class="d-flex flex-wrap gap-2 pb-3">
                        <a href="https://vrrestoration.ca/en/blog/9/what-number-to-call-for-water-damage-in-vancouver" class="btn btn-warning btn-sm">

                        {{ __('Water Damage 1-46-3') }}
                        </a>
                    </div>
                    <ul class="txt-vr d-flex flex-wrap gap-3">
                        <li class="lead px-2">Greater Vancouver</li>
                        <li class="lead px-2">Metro Vancouver</li>
                        <li class="lead px-2">North Shore</li>
                        <li class="lead px-2">Downtown</li>
                        <li class="lead px-2">Sea to Sky</li>
                        <li class="lead px-2">Tri-Cities</li>
                        <li class="lead px-2">Fraser Valley</li>
                        <li class="lead px-2">Howe Sound</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq  bg-vr-second">

        <div class="container">


            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Frequently Asked Questions') }}

                </h2>
                <hr>
            </div>

            <div class="row ">

                <div class="col-lg-12">

                    <div class="faq-container">

                        <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-48') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-49') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-50') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-51') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                <p>{{ __('Water Damage 1-52') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-53') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-54') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-55') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-56') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-57') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-58') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-59') }} </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Recommended For You -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="section-title">
                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Recommended For You') }} </h2>
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
                                            <h3 class="card-title txt-vr h5">{{ $b->title }}</h3>
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
    <script>
        function scrollToText() {
            const collapseElement = document.getElementById('collapseVrRestoration');

            collapseElement.addEventListener('shown.bs.collapse', function() {
                const textToScrollTo = document.getElementById('textToScrollTo');
                textToScrollTo.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
    </script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        function initSwiper() {
            document.querySelectorAll('.swiper').forEach(function(swiper) {
                let config = JSON.parse(swiper.getAttribute('data-swiper-config'));
                new Swiper(swiper, config);
            });
        }
        window.addEventListener('load', initSwiper);
    </script>
@endsection
