@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <link rel="stylesheet" href="{{ asset('css/about-seismic.css') }}">
    <style>html{scroll-behavior:smooth}#contact-form-section{scroll-margin-top:140px}</style>
@endsection

@section('content')
@php
    $includedItems = [
        ['bi-house-check', 'seismic_included_1_title', 'seismic_included_1_text'],
        ['bi-clipboard2-pulse', 'seismic_included_2_title', 'seismic_included_2_text'],
        ['bi-geo-alt', 'seismic_included_3_title', 'seismic_included_3_text'],
        ['bi-calculator', 'seismic_included_4_title', 'seismic_included_4_text'],
        ['bi-file-earmark-richtext', 'seismic_included_5_title', 'seismic_included_5_text'],
        ['bi-file-earmark-check', 'seismic_included_6_title', 'seismic_included_6_text'],
        ['bi-tools', 'seismic_included_7_title', 'seismic_included_7_text'],
        ['bi-people', 'seismic_included_8_title', 'seismic_included_8_text'],
    ];
    $whyItems = [
        ['seismic_why_1_title', 'seismic_why_1_text'], ['seismic_why_2_title', 'seismic_why_2_text'],
        ['seismic_why_3_title', 'seismic_why_3_text'], ['seismic_why_4_title', 'seismic_why_4_text'],
        ['seismic_why_5_title', 'seismic_why_5_text'], ['seismic_why_6_title', 'seismic_why_6_text'],
    ];
    $processItems = ['seismic_process_1', 'seismic_process_2', 'seismic_process_3', 'seismic_process_4', 'seismic_process_5', 'seismic_process_6'];
    $benefitItems = ['seismic_benefit_1', 'seismic_benefit_2', 'seismic_benefit_3', 'seismic_benefit_4', 'seismic_benefit_5', 'seismic_benefit_6'];
@endphp

<main class="seismic-page">
    <section class="seismic-hero">
        <div class="container">
            <nav class="seismic-breadcrumb" aria-label="breadcrumb">
                <a href="{{ route('home2', ['lang' => app()->getLocale()]) }}">{{ __('Home') }}</a><i class="bi bi-chevron-right" aria-hidden="true"></i><span>{{ __('seismic_title') }}</span>
            </nav>
            <div class="seismic-hero-grid">
                <div class="seismic-hero-copy">
                    <span class="vr-kicker">{{ __('seismic_badge') }}</span>
                    <h1>{{ __('seismic_title') }}</h1>
                    <p>{{ __('seismic_subtitle') }}</p>
                    <div class="seismic-checks">
                        @for ($i = 1; $i <= 4; $i++)<span><i class="bi bi-check-circle-fill" aria-hidden="true"></i>{{ __('seismic_hero_bullet_' . $i) }}</span>@endfor
                    </div>
                    <div class="seismic-actions">
                        <a class="vr-button vr-button-primary" href="#contact-form-section">{{ __('seismic_primary_cta') }} <i class="bi bi-arrow-down" aria-hidden="true"></i></a>
                        <a class="vr-button vr-button-outline" href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>{{ __('seismic_secondary_cta') }}</a>
                    </div>
                </div>
                <div class="seismic-hero-media">
                    <img src="{{ asset('img/seismic-retrofit-plan-hero.jpeg') }}" alt="{{ __('seismic_hero_alt') }}" width="900" height="760">
                    <div class="seismic-logos"><span>{{ __('Seismic Professional Standards') }}</span><div class="seismic-logo-row"><img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA"><img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC"></div></div>
                </div>
            </div>
        </div>
    </section>

    <section class="seismic-overview">
        <div class="container">
            <div class="seismic-overview-grid">
                <div class="seismic-overview-media"><img loading="lazy" src="{{ asset('img/seismic-retrofit-engineering-review.jpeg') }}" alt="{{ __('seismic_overview_alt') }}" width="760" height="900"><span>{{ __('seismic_overview_badge') }}</span></div>
                <div class="seismic-overview-copy">
                    <span class="vr-kicker">{{ __('Seismic Overview Kicker') }}</span>
                    <h2>{{ __('seismic_overview_title') }}</h2>
                    <p>{{ __('seismic_overview_p1') }}</p><p>{{ __('seismic_overview_p2') }}</p><p>{{ __('seismic_overview_p3') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="seismic-included">
        <div class="container">
            <div class="seismic-section-head">
                <div><span class="vr-kicker">{{ __('Seismic Scope Kicker') }}</span><h2>{{ __('seismic_included_title') }}</h2></div>
                <p>{{ __('Seismic Scope Intro') }}</p>
            </div>
            <div class="seismic-scope-grid">
                @foreach ($includedItems as $item)
                    <article class="seismic-scope-card"><div class="seismic-scope-icon"><i class="bi {{ $item[0] }}" aria-hidden="true"></i></div><small>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</small><h3>{{ __($item[1]) }}</h3><p>{{ __($item[2]) }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="seismic-process">
        <div class="container">
            <div class="seismic-process-grid">
                <div class="seismic-process-intro"><span class="vr-kicker">{{ __('Seismic Process Kicker') }}</span><h2>{{ __('seismic_process_title') }}</h2><p>{{ __('seismic_process_intro') }}</p></div>
                <div class="seismic-steps">
                    @foreach ($processItems as $item)<article class="seismic-step"><small>{{ __('seismic_step') }} {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</small><h3>{{ __($item) }}</h3></article>@endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="seismic-why">
        <div class="container">
            <div class="seismic-section-head">
                <div><span class="vr-kicker">{{ __('Seismic Why Kicker') }}</span><h2>{{ __('seismic_why_title') }}</h2></div>
                <p>{{ __('seismic_mid_cta_text') }}</p>
            </div>
            <div class="seismic-why-grid">
                @foreach ($whyItems as $item)<article class="seismic-why-card"><span>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><h3>{{ __($item[0]) }}</h3><p>{{ __($item[1]) }}</p></article>@endforeach
            </div>
            <div class="seismic-benefits" aria-label="{{ __('seismic_benefits_title') }}">
                @foreach ($benefitItems as $item)<span><i class="bi bi-check-circle-fill" aria-hidden="true"></i>{{ __($item) }}</span>@endforeach
            </div>
        </div>
    </section>

    @include('partials.contact-form', ['source' => __('seismic_contact_source'), 'title' => __('seismic_contact_title'), 'subtitle' => __('seismic_contact_subtitle')])

    <section id="faq" class="faq seismic-faq">
        <div class="container">
            <div class="seismic-faq-grid">
                <div class="seismic-faq-intro"><span class="vr-kicker">{{ __('Seismic FAQ Kicker') }}</span><h2>{{ __('seismic_faq_title') }}</h2></div>
                <div class="faq-container">
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="faq-item {{ $i === 1 ? 'faq-active' : '' }}"><i class="faq-icon bi bi-question-circle"></i><h3>{{ __('seismic_faq_question_' . $i) }}</h3><div class="faq-content"><p>{{ __('seismic_faq_answer_' . $i) }}</p></div><i class="faq-toggle bi bi-chevron-right"></i></div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <section class="seismic-final">
        <div class="container">
            <div><h2>{{ __('seismic_final_cta_title') }}</h2><p>{{ __('seismic_final_cta_text') }}</p></div>
            <div class="seismic-final-actions"><a class="vr-button vr-button-primary" href="#contact-form-section">{{ __('seismic_final_cta_button') }}</a><a class="vr-button vr-button-outline" href="tel:+16048003900">604-800-3900</a></div>
        </div>
    </section>
</main>
@endsection
