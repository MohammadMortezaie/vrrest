@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/water-damage.jpeg') }}" alt="{{ __('Water Damage 1-1') }}">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h1 class="fs-1 fw-bolder">{{ __('Water Damage 1-1') }} </h1>
                            <hr>
                            <p class="lead mb-5 txt-def">{{ __('Water Damage 1-2') }}

                                <a class="txt-vr fw-bold " href="https://vrrestoration.ca/en/blog/3/why-rapid-response-is-essential-in-water-damage-situations">{{ __('Water Damage 1-3') }}</a>

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
                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Water Damage 1-4') }}
                    </h2>
                    <p class="lead txt-def">{{ __('Water Damage 1-5') }}
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
                            <strong>  {{ __('Water Damage 1-16') }}

                            </strong>
                             {{ __('Water Damage 1-17') }}
                        </li>
                    </ul>

                </div>
                <div class="col-md-6 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">   {{ __('What Not To DO') }}

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

                    <p class="lead">       {{ __('Water Damage 1-25') }}

                        <button class="btn btn-link txt-vr" type="button" data-bs-toggle="collapse"
                            onclick="scrollToText()" data-bs-target="#collapseVrRestoration" aria-expanded="false"
                            aria-controls="collapseVrRestoration">   {{ __('Read More') }} >>
                        </button>
                    </p>

                </div>
                <div class="col-md-5 mb-3">

                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/water-damage2.jpeg') }}"
                        alt="Water Damage">
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
                                <p>{{ __('Water Damage 1-52') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-53') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-54') }}  </h3>
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
@endsection

@section('scripts')
    <script>
        function scrollToText() {
            const collapseElement = document.getElementById('collapseVrRestoration');

        collapseElement.addEventListener('shown.bs.collapse', function () {
            const textToScrollTo = document.getElementById('textToScrollTo');
            textToScrollTo.scrollIntoView({ behavior: 'smooth' });
        });
        }
    </script>
@endsection
