@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/mold.jpeg') }}"
                        alt="Professional mold remediation and restoration service in Vancouver BC home">
                        <div class="d-flex gap-3 mt-4 justify-content-center align-items-center">
                            <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                            <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 90px; object-fit: contain;">
                        </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h1 class="fs-1 fw-bolder">{{ __('Mold 1-1') }} </h1>
                            <hr>

                            <p class="lead ">

                                {{ __('Mold 1-2') }}
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

                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Mold 1-3-1') }}
                    </h2>
                    <p class="lead">
                        {{ __('Mold 1-3-2') }}
                    </p>





                    <div class="row mb-3 pb-3">
                        <div class="col-12 col-lg-6 col-xl-5">

                            <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/mold-refrigerator.jpg') }}"
                                alt="Mold growth inside a refrigerator in a Vancouver BC home requiring professional removal">

                        </div>
                        <div class="col-12 col-lg-6 col-xl-7">
                            <div class="justify-content-xl-center">


                                <div class="text-center mt-3">

                                    <p>
                                        {{ __('Mold 1-3-5') }} <strong> {{ __('Mold 1-3-1') }} </strong>
                                        {{ __('Mold 1-3-6') }}
                                    </p>
                                    <strong class="d-block mb-2" style="font-size: 1.2rem;">{{ __('Mold 1-3-7') }}
                                    </strong>
                                    <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                                        style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                        📞 Call Now: +1 604-800-3900
                                    </a>
                                    <p class="mt-2" style="font-size: 0.95rem; color: #555;">{{ __('Mold 1-3-8') }} </p>

                                </div>


                            </div>
                        </div>
                    </div>



                    <h3 class="fs-3 fw-bolder section-title-h1">{{ __('Mold 1-3-3') }}</h3>
                    <p class="lead">
                        {{ __('Mold 1-3-4') }}
                    </p>



                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <h2 class="fs-2 fw-bolder section-title-h1">
                                {{ __('Mold 1-3') }}
                            </h2>

                            <p class="lead"> {{ __('Mold 1-4') }}

                                <br>
                                {{ __('Mold 1-5') }}
                            </p>

                        </div>


                        <div class="col-md-6  d-flex flex-column gap-3   align-items-center ">

                            <img  src="{{ asset('img/googleg.png') }}" alt="Google garanted certification">


                                    <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                                        style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                        📞 Call Now: +1 604-800-3900
                                    </a>


                        </div>

                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 my-3">
                        <img class="img-fluid rounded" src="https://vrrestoration.ca/storage/uploads/X725gdW8nm48gtp2Ko5uKh4IV4FxBhakF5jLT4w7.jpg" alt="Before and after professional mold removal service in a Vancouver BC home basement">
                    </div>

                    <div class="col-md-6 my-3">
                        <img class="img-fluid rounded" src="https://vrrestoration.ca/storage/uploads/0edMscVZ1fslkgJKQ0U2lIaqiCB4sf22kNPyaQuC.jpg" alt="Severe black mold infestation on interior wall in Burnaby BC requiring expert remediation">
                    </div>

                    <div class="col-md-6 my-3">
                        <img class="img-fluid rounded" src="https://vrrestoration.ca/storage/uploads/jVRdp1R67F6HFk6oaXP7lyuWQxhdT3hAgAfJDRzl.jpg" alt="Certified mold removal and cleanup in a Surrey BC residential bathroom">
                    </div>

                    <div class="col-md-6 my-3">
                        <img class="img-fluid rounded" src="https://vrrestoration.ca/storage/uploads/O1xy2uqf9wcYNCfJzTxSVYFjVKxqcBmF7RBxK6tq.jpg" alt="Professional mold remediation team working in a Vancouver BC home">
                    </div>
                </div>

                <div class="col-md-12 my-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('About 1-9-1') }}
                    </h2>
                    <hr>

                    <h3 class="fs-4 fw-bold">
                        {{ __('Mold 1-46-1') }}
                    </h3>
                    <p>
                        {{ __('Mold 1-46-2') }}
                    </p>


                    <div class="d-flex flex-wrap gap-2 pb-3">
                        <a href="https://vrrestoration.ca/en/vancouver/mold-remediation-in-vancouver"
                            class="btn btn-warning btn-sm">
                            {{ __('Mold 1-46-3') }}
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

    <section class="py-3 py-md-5  ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-5">

                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/moldtype.jpeg') }}"
                        alt="Mold Remediation Restoration in BC">
                </div>
                <div class="col-md-7">


                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Mold 1-6') }}
                    </h2>

                    <p class="lead txt-def"> {{ __('Mold 1-7') }}

                    </p>
                </div>
                <div class="col-md-12 pt-5">

                    <p class="lead txt-def"> {{ __('Mold 1-8') }}
                    </p>

                    <p class="lead txt-def"> {{ __('Mold 1-9') }}

                    </p>
                </div>
            </div>

        </div>
    </section>


    <section class="py-3 py-md-5  bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">

                <div class="col-md-12 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Mold 1-50') }}
                    </h2>

                    <p class="lead txt-def"> {{ __('Mold 1-51') }}

                    </p>
                    <div class="row py-3">

                        <div class="col-md-7 ">
                            <h3 class="h4 section-title-h1"> {{ __('Mold 1-52') }} </h3>
                            <hr>
                            <p class="lead txt-def ">{{ __('Mold 1-53') }}

                            </p>
                        </div>

                        <div class="col-md-5 pb-3">

                            <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/Fogging.jpeg') }}"
                                alt="fogging Restoration in vancouver">

                        </div>

                        <div class="col-md-12 pt-4">
                            <h3 class="h4 section-title-h1">{{ __('Mold 1-54') }}

                            </h3>
                            <hr>
                            <p class="lead txt-def">{{ __('Mold 1-55') }}

                            </p>
                        </div>
                    </div>

                    <h3 class="h4 section-title-h1"> {{ __('Mold 1-56') }}</h3>
                    <hr>
                    <p class="lead txt-def">
                        {{ __('Mold 1-57') }}

                    </p>
                    <p class="lead txt-def">
                        {{ __('Mold 1-58') }}

                        <li>
                            {{ __('Mold 1-59') }}

                        </li>
                        <li>
                            {{ __('Mold 1-60') }}

                        </li>
                        <li>
                            {{ __('Mold 1-61') }}


                        </li>
                        </ul>
                    </p>
                </div>


            </div>
        </div>
    </section>


    <section class="py-3 py-md-5  ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-5">

                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/mold3.jpeg') }}"
                        alt="Mold Remediation Restoration In Vancouver">
                </div>
                <div class="col-md-7">


                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Mold 1-10') }}

                    </h2>

                    <p class="lead txt-def">{{ __('Mold 1-11') }}


                    </p>
                    <a class="lead txt-def txt-vr" href="#">{{ __('Mold 1-10') }} </a><br>
                    <a class="lead txt-def txt-vr" href="#">{{ __('Mold 1-12') }}</a><br>
                    <a class="lead txt-def txt-vr" href="#">{{ __('Mold 1-13') }}</a>
                </div>
                <div class="col-md-12 pt-4">
                    <p class="lead txt-def">{{ __('Mold 1-14') }}

                    </p>
                    <p class="lead txt-def">{{ __('Mold 1-15') }}

                    </p>
                </div>
            </div>

        </div>
    </section>




    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-12 mb-3">
                    <h2 class="section-title-h1">{{ __('Mold 1-16') }}

                    </h2>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            1){{ __('Mold 1-17') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Mold 1-18') }}

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            2) {{ __('Mold 1-19') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                {{ __('Mold 1-20') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            3) {{ __('Mold 1-21') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                {{ __('Mold 1-22') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            4) {{ __('Mold 1-23') }}
                        </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text"> {{ __('Mold 1-24') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            5) {{ __('Mold 1-25') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Mold 1-26') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            6) {{ __('Mold 1-27') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Mold 1-28') }}

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            7) {{ __('Restoration') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Mold 1-29') }}

                            </p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>



    <!-- Faq Section -->
    <section id="faq" class="faq  ">

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
                            <h3>{{ __('Mold 1-30') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-31') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-32') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-33') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-34') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-35') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-36') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-37') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-38') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-39') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-40') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-41') }} </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                {{ __('Mold 1-42') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-43') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->


                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-44') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-45') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-46') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-47') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->


                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-48') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-49') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->



                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
@endsection
