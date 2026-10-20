@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <link rel="stylesheet" href="{{ asset('css/construction-premium.css') }}">

@endsection

@section('content')
@php
    $services = [
        ['bi-house-gear', 'Construction Service 1 Title', 'Construction Service 1 Text'],
        ['bi-building-gear', 'Construction Service 2 Title', 'Construction Service 2 Text'],
        ['bi-hammer', 'Construction Service 3 Title', 'Construction Service 3 Text'],
        ['bi-bricks', 'Construction Service 4 Title', 'Construction Service 4 Text'],
        ['bi-palette2', 'Construction Service 5 Title', 'Construction Service 5 Text'],
        ['bi-file-earmark-check', 'Construction Service 6 Title', 'Construction Service 6 Text'],
    ];
    $process = [
        ['Construction Process 1 Title', 'Construction Process 1 Text'],
        ['Construction Process 2 Title', 'Construction Process 2 Text'],
        ['Construction Process 3 Title', 'Construction Process 3 Text'],
        ['Construction Process 4 Title', 'Construction Process 4 Text'],
        ['Construction Process 5 Title', 'Construction Process 5 Text'],
    ];
    $areas = ['Vancouver', 'West Vancouver', 'North Vancouver', 'Burnaby', 'Coquitlam', 'Richmond', 'Surrey', 'New Westminster'];
@endphp

<main class="construction-page">
    <section class="construction-hero">
        <div class="container">
            <nav class="construction-breadcrumb" aria-label="breadcrumb">
                <a href="{{ route('home2', ['lang' => app()->getLocale()]) }}">{{ __('Home') }}</a><i class="bi bi-chevron-right" aria-hidden="true"></i><span>{{ __('Construction Breadcrumb') }}</span>
            </nav>
            <div class="construction-hero-grid">
                <div class="construction-hero-copy">
                    <span class="construction-kicker">{{ __('Construction Hero Kicker') }}</span>
                    <h1>{{ __('Construction Hero Title') }}</h1>
                    <p class="construction-hero-lead">{{ __('Construction Hero Lead') }}</p>
                    <div class="construction-hero-points">@for ($i = 1; $i <= 3; $i++)<span><i class="bi bi-check-circle-fill" aria-hidden="true"></i>{{ __('Construction Hero Point '.$i) }}</span>@endfor</div>
                    <div class="construction-actions"><a class="construction-button construction-button-primary" href="#contact-form-section">{{ __('Construction Request Estimate') }} <i class="bi bi-arrow-down" aria-hidden="true"></i></a><a class="construction-button construction-button-ghost" href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>604 800 3900</a></div>
                </div>
                <div class="construction-hero-media">
                    {{-- Photo by Samuel Cruz on Unsplash: https://unsplash.com/photos/AdWKbWDwnng --}}
                    <img src="{{ asset('img/construction/vancouver-reconstruction-framing.webp') }}" alt="{{ __('Construction Hero Alt') }}" width="1800" height="2695" fetchpriority="high">
                    <div class="construction-hero-card"><span>{{ __('Construction Hero Card Label') }}</span><strong>{{ __('Construction Hero Card Title') }}</strong></div>
                </div>
            </div>
        </div>
    </section>

    <section class="construction-proof" aria-label="{{ __('Construction Proof Label') }}"><div class="container construction-proof-grid"><div><strong>{{ __('Construction Proof 1 Title') }}</strong><span>{{ __('Construction Proof 1 Text') }}</span></div><div><strong>{{ __('Construction Proof 2 Title') }}</strong><span>{{ __('Construction Proof 2 Text') }}</span></div><div><strong>{{ __('Construction Proof 3 Title') }}</strong><span>{{ __('Construction Proof 3 Text') }}</span></div><div class="construction-proof-logos"><img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA"><img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC"></div></div></section>

    <section class="construction-intro construction-section"><div class="container construction-split">
        <div class="construction-photo-stack"><img loading="lazy" src="{{ asset('img/construction/home-renovation-interior.webp') }}" alt="{{ __('Construction Interior Alt') }}" width="1600" height="1065"><div class="construction-photo-note"><i class="bi bi-shield-check" aria-hidden="true"></i><span>{{ __('Construction Photo Note') }}</span></div></div>
        <div class="construction-copy"><span class="construction-kicker construction-kicker-dark">{{ __('Construction Intro Kicker') }}</span><h2>{{ __('Construction Intro Title') }}</h2><p>{{ __('Construction Intro Text 1') }}</p><p>{{ __('Construction Intro Text 2') }}</p><a class="construction-text-link" href="#services">{{ __('Construction Explore Services') }} <span aria-hidden="true">↘</span></a></div>
    </div></section>

    <section class="construction-services construction-section" id="services"><div class="container">
        <div class="construction-section-head"><div><span class="construction-kicker construction-kicker-dark">{{ __('Construction Services Kicker') }}</span><h2>{{ __('Construction Services Title') }}</h2></div><p>{{ __('Construction Services Lead') }}</p></div>
        <div class="construction-service-grid">@foreach ($services as $service)<article class="construction-service-card"><div class="construction-service-icon"><i class="bi {{ $service[0] }}" aria-hidden="true"></i></div><small>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</small><h3>{{ __($service[1]) }}</h3><p>{{ __($service[2]) }}</p></article>@endforeach</div>
    </div></section>

    <section class="construction-process construction-section"><div class="container construction-process-grid">
        <div class="construction-process-intro"><span class="construction-kicker">{{ __('Construction Process Kicker') }}</span><h2>{{ __('Construction Process Title') }}</h2><p>{{ __('Construction Process Lead') }}</p><img loading="lazy" src="{{ asset('img/construction/residential-remodeling.webp') }}" alt="{{ __('Construction Process Alt') }}" width="1600" height="1067"></div>
        <ol class="construction-steps">@foreach ($process as $step)<li><span>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><div><h3>{{ __($step[0]) }}</h3><p>{{ __($step[1]) }}</p></div></li>@endforeach</ol>
    </div></section>

    <section class="construction-permits construction-section"><div class="container construction-permit-grid">
        <div class="construction-permit-copy"><span class="construction-kicker construction-kicker-dark">{{ __('Construction Permit Kicker') }}</span><h2>{{ __('Construction Permit Title') }}</h2><p>{{ __('Construction Permit Text') }}</p><div class="construction-permit-points">@for ($i = 1; $i <= 3; $i++)<span><i class="bi bi-check2" aria-hidden="true"></i>{{ __('Construction Permit Point '.$i) }}</span>@endfor</div><a class="construction-text-link" href="https://vancouver.ca/home-property-development/when-you-need-a-permit.aspx" target="_blank" rel="noopener noreferrer">{{ __('Construction Permit Link') }} <span aria-hidden="true">↗</span></a></div>
        <div class="construction-permit-media"><img loading="lazy" src="{{ asset('img/construction/renovation-craftsmanship.webp') }}" alt="{{ __('Construction Permit Alt') }}" width="1600" height="1200"><div><strong>{{ __('Construction Permit Card Title') }}</strong><span>{{ __('Construction Permit Card Text') }}</span></div></div>
    </div></section>

    <section class="construction-insurance construction-section"><div class="container construction-insurance-grid"><div><span class="construction-kicker">{{ __('Construction Insurance Kicker') }}</span><h2>{{ __('Construction Insurance Title') }}</h2></div><div><p>{{ __('Construction Insurance Text') }}</p><a class="construction-button construction-button-primary" href="#contact-form-section">{{ __('Construction Discuss Project') }} <i class="bi bi-arrow-down" aria-hidden="true"></i></a></div></div></section>

    <section class="construction-areas construction-section"><div class="container construction-areas-grid"><div><span class="construction-kicker construction-kicker-dark">{{ __('Construction Areas Kicker') }}</span><h2>{{ __('Construction Areas Title') }}</h2><p>{{ __('Construction Areas Lead') }}</p></div><div class="construction-area-list">@foreach ($areas as $area)<span><i class="bi bi-geo-alt-fill" aria-hidden="true"></i>{{ __($area) }}</span>@endforeach<span><i class="bi bi-compass-fill" aria-hidden="true"></i>{{ __('Construction Lower Mainland') }}</span></div></div></section>

    @include('partials.contact-form', ['source' => __('Construction Contact Source'), 'title' => __('Construction Contact Title'), 'subtitle' => __('Construction Contact Subtitle')])

    <section class="faq construction-faq construction-section" id="faq"><div class="container construction-faq-grid"><div class="construction-faq-intro"><span class="construction-kicker construction-kicker-dark">{{ __('Construction FAQ Kicker') }}</span><h2>{{ __('Frequently Asked Questions') }}</h2><p>{{ __('Construction FAQ Lead') }}</p></div><div class="faq-container">@for ($i = 1; $i <= 6; $i++)<div class="faq-item {{ $i === 1 ? 'faq-active' : '' }}"><i class="faq-icon bi bi-question-circle" aria-hidden="true"></i><h3>{{ __('Construction FAQ '.$i.' Question') }}</h3><div class="faq-content"><p>{{ __('Construction FAQ '.$i.' Answer') }}</p></div><i class="faq-toggle bi bi-chevron-right" aria-hidden="true"></i></div>@endfor</div></div></section>

    <section class="construction-final"><div class="container"><div><span>{{ __('Construction Final Kicker') }}</span><h2>{{ __('Construction Final Title') }}</h2></div><div class="construction-actions"><a class="construction-button construction-button-primary" href="#contact-form-section">{{ __('Construction Request Estimate') }}</a><a class="construction-button construction-button-ghost" href="tel:+16048003900">604 800 3900</a></div></div></section>
</main>
@endsection
