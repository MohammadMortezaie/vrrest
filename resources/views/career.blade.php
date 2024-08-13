@extends('layouts.app')

@section('header')
{!! seo($SEOData) !!}
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/career.jpeg') }}"
                    alt="Career">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="fs-1 fw-bolder">{{ __('careersheading') }}</h2>
                            <strong>
                                {{ __('careerssubheading') }}
                            </strong>
                            <hr>
                            <p class="lead txt-def mb-5">
                                {{ __('careersdescription') }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Services We Provide -->
    <section id="services" class="services section ">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
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



    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-12">
                    <h1 class="fs-1 fw-bolder">{{ __('career_listheading') }}</h1>
                    <hr>

                    <p class="txt-def">
                        {{ __('career_listdescription') }}
                        <strong>{{ __('career_listemail') }}</strong>
                    </p>
                    <ul class="list-group ">
                        <a href="#" class="text-decoration-none">
                            <li class="list-group-item fs-4 rounded">
                                Job title - Vancouver
                            </li>
                        </a>
                    </ul>

                </div>

            </div>
        </div>
    </section>
@endsection
