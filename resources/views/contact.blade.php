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
                        src="{{asset('img/contactus.jpeg')}}"
                        alt="Conatct Us">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="fs-1 fw-bolder">{{ __('contactheading') }}</h2>
                            <hr>
                            <p class="mb-5">{{ __('contactdescription') }}</p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <i class="bi bi-pin-map text-warning h1"> </i>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">{{ __('contactaddress_heading') }}</h2>
                                            <p class="text-secondary  mb-0">
                                                #7, 636 Clyde AveWest, Vancouver, BC
                                            </p><hr>
                                            <p class="text-secondary  mb-0">
                                                #112, 828 Harbourside, Dr North Vancouver, BC
                                            </p><hr>
                                            <p class="text-secondary  mb-0">
                                                4720 lougheed hwy, Burnaby, BC
                                            </p><hr>
                                            <p class="text-secondary  mb-0">
                                                #211, 3030 Lincoln Ave, Coquitlam, BC
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <i class="bi bi-phone text-warning h1"> </i>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">{{ __('contactcall_heading') }}</h2>
                                            <a href="tel:+17783186796" class="text-secondary h4 mb-2">
                                                778-318-6796
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-3 py-md-5 bg-vr-second" id="whyvr" >
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-12 col-lg-7">
                    <h1 class="fs-1 fw-bolder">{{ __('why_chooseheading') }}</h1>
                    <p class="def-txt text-secondary mb-3">
                        {{ __('why_choosedescription1') }}
                    </p>
                    <p class="def-txt text-secondary mb-3">
                        {{ __('why_choosedescription2') }}
                    </p>
                    <p class="def-txt text-secondary mb-3">
                        {{ __('why_choosedescription3') }}
                    </p>
                    <p class="def-txt text-secondary mb-3">
                        {{ __('why_choosedescription4') }}
                    </p>
                    <p class="def-txt text-secondary mb-3">
                        {{ __('why_choosedescription5') }}
                    </p>
                    <p class="def-txt text-secondary mb-3">
                        {{ __('why_choosedescription6') }}
                    </p>
                    <p class="def-txt text-secondary mb-3">
                        {{ __('why_choosedescription7') }}
                    </p>
                </div>

                <div class="col-12 col-lg-5">

                    <img class="img-fluid rounded" loading="lazy"
                    src="{{asset('img/contactus2.jpeg')}}"
                    alt="Conatct Us">

                </div>
            </div>
        </div>
    </section>
    <div class="container d-flex align-items-center justify-content-center">
        <iframe style="width: 100%" src="https://www.google.com/maps/d/u/0/embed?mid=1ZlFqpnfeNxRjioLAHd27DXnR2tVpFD4&ehbc=2E312F"  height="480"></iframe>
    </div>
@endsection
