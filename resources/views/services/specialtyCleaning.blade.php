@extends('layouts.app')

@section('header')
{!! seo($SEOData) !!}
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/specialCleaning2.jpeg') }}"
                        alt="Specialty Cleaning Services">

                        <div class="d-flex gap-3 mt-4 justify-content-center align-items-center">
                            <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                            <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 90px; object-fit: contain;">
                        </div>

                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h1 class="fs-1 fw-bolder">{{ __('special cleaning 1') }}</h1>
                            <hr>
                            <p class="lead mb-5 txt-def">{{ __('special cleaning 2') }}</p>

                        </div>
                        <div class="text-center mt-3">
                            <strong class="d-block mb-2" style="font-size: 1.2rem;">{{ __('Mold 1-3-7') }} </strong>
                            <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                                style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                📞 Call Now: +1 604-800-3900
                            </a>
                            <p class="mt-2" style="font-size: 0.95rem; color: #555;">{{ __('Mold 1-3-8') }} </p>
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
                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('special cleaning 3') }}</h2>
                    <h3 class="h4">{{ __('special cleaning 4') }}</h3>
                    <p class="lead txt-def pt-2">
                        <strong class="fw-bold">{{ __('special cleaning 5') }}</strong> {{ __('special cleaning 6') }} <br> <br>
                        <strong class="fw-bold">{{ __('special cleaning 7') }}</strong>{{ __('special cleaning 8') }} <br><br>
                        <strong class="fw-bold">{{ __('special cleaning 9') }}</strong>{{ __('special cleaning 10') }} <br> <br>
                        <strong class="fw-bold">{{ __('special cleaning 11') }}</strong> {{ __('special cleaning 12') }}
                    </p>
                </div>


            </div>
        </div>
    </section>


    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0">
                <div class="col-md-7 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('special cleaning 13') }}</h2>
                    <h3 class="h4">{{ __('special cleaning 14') }}</h3>
                    <p class="lead txt-def pt-2">
                        <strong class="fw-bold">{{ __('special cleaning 15') }}</strong> {{ __('special cleaning 16') }}<br>
                        <strong class="fw-bold">{{ __('special cleaning 17') }}</strong> {{ __('special cleaning 18') }}<br>
                        <strong class="fw-bold">{{ __('special cleaning 19') }}</strong> {{ __('special cleaning 20') }}<br>
                        <strong class="fw-bold">{{ __('special cleaning 21') }}</strong> {{ __('special cleaning 22') }}
                    </p>
                </div>
                <div class="col-md-5 mb-3 pt-3">
                    <img class="img-fluid rounded" loading="lazy" src="{{asset('img/specialCleaning3.jpeg')}}" alt="specialCleaning">
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0">
                <div class="col-md-12 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('advanced cleaning 1') }}</h2>
                    <p class="lead txt-def">{{ __('advanced cleaning 2') }}</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Faq Section -->
    <section id="faq" class="faq ">

        <div class="container">


            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">
                    {{ __('Frequently Asked Questions') }}
                </h2>
                <hr>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-container">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('specialty cleaning 1') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('specialty cleaning 2') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 2 -->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('specialty cleaning 3') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('specialty cleaning 4') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 3 -->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('specialty cleaning 5') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('specialty cleaning 6') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 4 -->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('specialty cleaning 7') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('specialty cleaning 8') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 5 -->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('specialty cleaning 9') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('specialty cleaning 10') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 6 -->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('specialty cleaning 11') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('specialty cleaning 12') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 7 -->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('specialty cleaning 13') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('specialty cleaning 14') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 8 -->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('specialty cleaning 15') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('specialty cleaning 16') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                    </div>
                </div>
            </div>


        </div>

    </section><!-- /Faq Section -->
@endsection
