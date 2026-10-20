@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <link rel="stylesheet" href="{{ asset('css/about-seismic.css') }}">
@endsection

@section('content')
@php
    $values = [
        ['bi-clock-history', '01', 'About 1-2'],
        ['bi-truck', '02', 'About 1-3'],
        ['bi-file-earmark-check', '03', 'About 1-4'],
        ['bi-heart', '04', 'About 1-5'],
        ['bi-patch-check', '05', 'About 1-6'],
    ];
    $certifications = ['Home Inspector Certified', 'IICRC Certified', 'Asbestos Abatement Licence', 'General Safety Certified'];
    $areas = ['Greater Vancouver', 'Metro Vancouver', 'North Shore', 'Downtown Vancouver', 'Sea to Sky', 'Tri-Cities', 'Fraser Valley', 'Howe Sound'];
@endphp

<main class="about-page">
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-grid">
                <div class="about-hero-copy">
                    <span class="vr-kicker">{{ __('About Hero Kicker') }}</span>
                    <h1>{{ __('About Hero Title') }}</h1>
                    <p>{{ __('About 1-1') }}</p>
                    <div class="about-actions">
                        <a class="vr-button vr-button-primary" href="{{ route('contact', ['lang' => app()->getLocale()]) }}">{{ __('Contact Us') }} <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
                        <a class="vr-button vr-button-outline" href="{{ route('team', ['lang' => app()->getLocale()]) }}">{{ __('Our Team') }}</a>
                    </div>
                </div>
                <div class="about-hero-media">
                    <img src="{{ asset('img/about.jpeg') }}" alt="{{ __('About Hero Image Alt') }}" width="900" height="700">
                    <div class="about-hero-badge"><strong>{{ __('About Local Team') }}</strong><span>{{ __('About Local Area') }}</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-proof" aria-label="{{ __('About Proof Label') }}">
        <div class="container">
            <div class="about-proof-grid">
                <div class="about-proof-item"><i class="bi bi-clock-fill" aria-hidden="true"></i><div><strong>{{ __('About Proof 1 Title') }}</strong><span>{{ __('About Proof 1 Text') }}</span></div></div>
                <div class="about-proof-item"><i class="bi bi-award-fill" aria-hidden="true"></i><div><strong>{{ __('About Proof 2 Title') }}</strong><span>{{ __('About Proof 2 Text') }}</span></div></div>
                <div class="about-proof-item"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i><div><strong>{{ __('About Proof 3 Title') }}</strong><span>{{ __('About Proof 3 Text') }}</span></div></div>
            </div>
        </div>
    </section>

    <section class="about-story">
        <div class="container">
            <div class="about-story-grid">
                <div class="about-story-media"><img loading="lazy" src="{{ asset('img/water-damage-vr.jpeg') }}" alt="{{ __('About Story Image Alt') }}" width="760" height="900"></div>
                <div class="about-story-copy">
                    <span class="vr-kicker">{{ __('About Story Kicker') }}</span>
                    <h2>{{ __('About Story Title') }}</h2>
                    <p>{{ __('About 1-7') }}</p>
                    <div class="about-story-callout">{{ __('About Story Callout') }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-values">
        <div class="container">
            <div class="about-values-head">
                <div><span class="vr-kicker">{{ __('About Values Kicker') }}</span><h2>{{ __('About Values Title') }}</h2></div>
                <p>{{ __('About Values Intro') }}</p>
            </div>
            <div class="about-values-grid">
                @foreach ($values as $value)
                    <article class="about-value"><i class="bi {{ $value[0] }}" aria-hidden="true"></i><span>{{ $value[1] }}</span><p>{{ __($value[2]) }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-credentials">
        <div class="container">
            <div class="about-credentials-grid">
                <div>
                    <span class="vr-kicker">{{ __('About Standards Kicker') }}</span>
                    <h2>{{ __('About 1-8') }}</h2>
                    <div class="about-cert-list">
                        @foreach ($certifications as $certification)
                            <div><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>{{ $certification }}</span></div>
                        @endforeach
                    </div>
                </div>
                <div class="about-areas">
                    <span class="vr-kicker">{{ __('About Coverage Kicker') }}</span>
                    <h2>{{ __('About 1-9') }}</h2>
                    <div class="about-area-list">
                        @foreach ($areas as $area)<span><i class="bi bi-geo-alt" aria-hidden="true"></i> {{ $area }}</span>@endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-next">
        <div class="container">
            <h2>{{ __('About Final Title') }}</h2>
            <a class="vr-button vr-button-dark" href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>{{ __('HP Call') }}</a>
        </div>
    </section>
</main>
@endsection
