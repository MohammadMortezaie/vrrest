@extends('layouts.app')

@section('header')
{!! seo($SEOData) !!}
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/fire-damage.jpeg') }}"
                        alt="Fire Damage Service">
                        <div class="d-flex gap-3 mt-4 justify-content-center align-items-center">
                            <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                            <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 90px; object-fit: contain;">
                        </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h1 class="fs-1 fw-bolder">{{ __('Fire Damage 1-1') }}</h1>
                            <hr>
                            <p class="lead mb-5 ">{{ __('Fire Damage 1-2') }}
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


                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Fire Damage 1-3-1') }}
                    </h2>

                    <ul>
                        <li>
                            {{ __('Fire Damage 1-3-2') }}
                        </li>

                        <li>
                            {{ __('Fire Damage 1-3-3') }}
                        </li>

                        <li>
                            {{ __('Fire Damage 1-3-4') }}
                        </li>

                        <li>
                            {{ __('Fire Damage 1-3-5') }}
                        </li>
                    </ul>
                    <div class="text-center mt-3">
                        <strong class="d-block mb-2" style="font-size: 1.2rem;">{{ __('Mold 1-3-7') }} </strong>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3" style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            📞 Call Now: +1 604-800-3900
                        </a>
                        <p class="mt-2" style="font-size: 0.95rem; color: #555;">{{ __('Mold 1-3-8') }}  </p>
                    </div>

                    <div class="d-flex gap-3 mt-4 justify-content-center align-items-center">
                        <img src="{{ asset('img/googleg.png') }}" alt="Google Garanted" >
                    </div>

                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Fire Damage 1-3') }}
                    </h2>

                    <p class="lead">{{ __('Fire Damage 1-4') }}
                        <br>
                        <br>{{ __('Fire Damage 1-5') }}

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
                            <strong>{{ __('Fire Damage 1-6') }}

                            </strong>{{ __('Fire Damage 1-7') }}

                        </li>


                        <li>
                            <strong>{{ __('Fire Damage 1-8') }}

                            </strong>{{ __('Fire Damage 1-9') }}

                        </li>

                        <li>
                            <strong>{{ __('Fire Damage 1-10') }}

                            </strong>{{ __('Fire Damage 1-11') }}


                        </li>

                        <li>
                            <strong>{{ __('Fire Damage 1-12') }}

                            </strong>{{ __('Fire Damage 1-13') }}

                        </li>

                        <li>
                            <strong>{{ __('Fire Damage 1-14') }}

                            </strong>{{ __('Fire Damage 1-15') }}

                        </li>

                    </ul>

                </div>
                <div class="col-md-6 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                         {{ __('What Not To DO') }}
                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>{{ __('Fire Damage 1-16') }}

                            </strong>{{ __('Fire Damage 1-17') }}


                        </li>


                        <li>
                            <strong>{{ __('Fire Damage 1-18') }}

                            </strong>{{ __('Fire Damage 1-19') }}


                        </li>

                        <li>
                            <strong>{{ __('Fire Damage 1-20') }}

                            </strong>{{ __('Fire Damage 1-21') }}

                        </li>

                        <li>
                            <strong>{{ __('Fire Damage 1-22') }}

                            </strong>{{ __('Fire Damage 1-23') }}

                        </li>

                        <li>
                            <strong>{{ __('Fire Damage 1-24') }}

                            </strong>{{ __('Fire Damage 1-25') }}

                        </li>

                    </ul>

                </div>


            </div>
        </div>
    </section>



    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-12 mb-3">
                    <h2 class="section-title-h1">{{ __('Fire Damage 1-26') }}

                    </h2>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            1) {{ __('Fire Damage 1-27') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                {{ __('Fire Damage 1-28') }}


                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            2) {{ __('Fire Damage 1-29') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Fire Damage 1-30') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            3) {{ __('Fire Damage 1-31') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Fire Damage 1-32') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            4) {{ __('Fire Damage 1-33') }}
                        </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Fire Damage 1-34') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            5) {{ __('Fire Damage 1-35') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text"> {{ __('Fire Damage 1-36') }}
                                 </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            6) {{ __('Fire Damage 1-37') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Fire Damage 1-38') }}

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            7) {{ __('Restoration') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Fire Damage 1-39') }}

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
                            <p class="card-text ">
                                {{ __('Fire Damage 1-40') }}

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
                         {{ __('Fire Damage 1-3-6') }}
                    </h3>
                    <p>
                        {{ __('Fire Damage 1-3-7') }}
                    </p>

                    <ul class="txt-vr d-flex flex-wrap gap-3">
                        <li class="lead px-2">Vancouver</li>
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
    <section id="faq" class="faq  ">

        <div class="container">


            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder">
                    {{ __('Frequently Asked Questions') }}

                </h2>
                <hr>
            </div>

            <div class="row ">

                <div class="col-lg-12">

                    <div class="faq-container">

                        <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                {{ __('Fire Damage 1-41') }} </h3>
                            <div class="faq-content">
                                <p> {{ __('Fire Damage 1-42') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Fire Damage 1-43') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Fire Damage 1-44') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Fire Damage 1-45') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Fire Damage 1-46') }}   </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Fire Damage 1-47') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Fire Damage 1-48') }} </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Fire Damage 1-49') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Fire Damage 1-50') }}  <a href="{{route('waterdamage',['lang' =>  app()->getLocale()])}}" > {{ __('Read More') }}  </a> </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
@endsection
