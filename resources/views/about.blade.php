@extends('layouts.app')

@section('header')
{!! seo($SEOData) !!}
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 ">
                    <img class="img-fluid rounded" loading="lazy" style="max-height: 400px; width: 100%"
                        src="{{ asset('img/hero-bg.jpeg') }}" alt="About 1">
                </div>
            </div>
        </div>
    </section>


    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-12 col-lg-7">
                    <h1 class="section-title-h1">{{ __('About Us') }} </h1>
                    <p class="txt-def  mb-3">
                        {{ __('About 1-1') }}
                    </p>
                    <ul>
                        <li>{{ __('About 1-2') }}

                        </li>
                        <li>{{ __('About 1-3') }}

                        </li>
                        <li>{{ __('About 1-4') }}

                        </li>
                        <li>{{ __('About 1-5') }}
                        </li>
                        <li>{{ __('About 1-6') }}
                        </li>
                    </ul>
                    <p class="txt-def">
                        {{ __('About 1-7') }}
                    </p>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="row ">
                        <div class="col-12 col-xl-11">
                            <h2 class="section-title-h1">{{ __('About 1-8') }}</h2>
                            <ul class="txt-vr">
                                <li class="fs-5">Home Inspector Certified</li>
                                <li class="fs-5">IICRC Certified</li>
                                <li class="fs-5">Asbestos Abatement Licence</li>
                                <li class="fs-5">General Safety Certified</li>
                            </ul>
                            <hr class="my-4">
                            <h2 class="section-title-h1">{{ __('About 1-9') }}</h2>
                            <ul class="txt-vr">
                                <li class="fs-5">Greater Vancouver</li>
                                <li class="fs-5">Metro Vancouver</li>
                                <li class="fs-5">North Shore </li>
                                <li class="fs-5">Downtown </li>
                                <li class="fs-5">Sea to Sky </li>
                                <li class="fs-5">Tri-Cities </li>
                                <li class="fs-5">Fraser Valley </li>
                                <li class="fs-5">Howe Sound </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
