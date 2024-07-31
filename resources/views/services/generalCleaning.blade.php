@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy"
                        src="{{ asset('img/generalClenaing.jpeg') }}"
                        alt="General Cleaning">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h1 class="fs-1 fw-bolder">{{ __('G cleaning 1') }}</h1>
                            <hr>
                            <p class="lead txt-def mb-5">
                                {{ __('G cleaning 2') }}

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
                    <h2 class="fs-2 fw-bolder section-title-h1">

                        {{ __('G cleaning 3') }}


                    </h2>

                    <p class="txt-def pt-2">

                        <strong>{{ __('G cleaning 4') }}</strong> {{ __('G cleaning 5') }} <br /><br />
                        <strong>{{ __('G cleaning 6') }}</strong> {{ __('G cleaning 7') }} <br /><br />
                        <strong>{{ __('G cleaning 8') }} </strong> {{ __('G cleaning 9') }} <br /><br />
                        <strong>{{ __('G cleaning 10') }} </strong> {{ __('G cleaning 11') }} <br /><br />
                        <strong>{{ __('G cleaning 12') }} </strong>  {{ __('G cleaning 13') }}

                    </p>
                </div>

            </div>
        </div>
    </section>



    <section class="py-3 py-md-5  ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-7 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">

                        {{ __('G cleaning 14') }}
                    </h2>

                    <p class="txt-def pt-4">
                        <strong>{{ __('G cleaning 15') }}  </strong>  {{ __('G cleaning 16') }}                       <br> <br>
                        <strong>{{ __('G cleaning 17') }}</strong> {{ __('G cleaning 18') }}                    <br> <br>
                        <strong> {{ __('G cleaning 19') }}</strong> {{ __('G cleaning 20') }}                   <br> <br>
                        <strong> {{ __('G cleaning 21') }}</strong> {{ __('G cleaning 22') }}                 <br> <br>
                    </p>

                </div>
                <div class="col-md-5 mb-3">

                    <img class="img-fluid rounded" loading="lazy"
                        src="{{ asset('img/generalCleaning2.jpeg') }}"
                        alt="General Clenaing Service">
                </div>


            </div>
        </div>
    </section>



    <!-- Faq Section -->
    <section id="faq" class="faq  bg-vr-second">

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

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('G cleaning 24') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('G cleaning 25') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('G cleaning 26') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('G cleaning 27') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('G cleaning 28') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('G cleaning 29') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('G cleaning 30') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('G cleaning 31') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('G cleaning 32') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('G cleaning 33') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('G cleaning 34') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('G cleaning 35') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('G cleaning 36') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('G cleaning 37') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>
                </div>
            </div>


        </div>

    </section><!-- /Faq Section -->
@endsection
