@extends('layouts.app')

@section('header')
    <title>Team</title>
@endsection

@section('content')
<section class="py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5">
                <img class="img-fluid rounded" loading="lazy" src="{{asset('img/team.jpeg')}}" alt="{{ __('teamimage alt') }}">
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h2 class="fs-1 fw-bolder">{{ __('teamheading') }}</h2>
                        <strong class="h5">{{ __('teamsubheading') }}</strong>
                        <hr>
                        <p class="mb-5">
                            {{ __('teamdescription') }}
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
            <div class="col-12">
                <h1 class="fs-1 fw-bolder mb-3">
                    {{ __('expertiseheading') }}
                </h1>
                <hr>
                <p>
                    {{ __('expertisedescription') }}
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
