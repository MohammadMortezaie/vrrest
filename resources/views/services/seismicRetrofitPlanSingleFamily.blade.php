@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <style>
        html {
            scroll-behavior: smooth;
        }

        #contact-form-section {
            scroll-margin-top: 140px;
        }
    </style>
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
            ['seismic_why_1_title', 'seismic_why_1_text'],
            ['seismic_why_2_title', 'seismic_why_2_text'],
            ['seismic_why_3_title', 'seismic_why_3_text'],
            ['seismic_why_4_title', 'seismic_why_4_text'],
            ['seismic_why_5_title', 'seismic_why_5_text'],
            ['seismic_why_6_title', 'seismic_why_6_text'],
        ];

        $processItems = [
            'seismic_process_1',
            'seismic_process_2',
            'seismic_process_3',
            'seismic_process_4',
            'seismic_process_5',
            'seismic_process_6',
        ];

        $benefitItems = [
            'seismic_benefit_1',
            'seismic_benefit_2',
            'seismic_benefit_3',
            'seismic_benefit_4',
            'seismic_benefit_5',
            'seismic_benefit_6',
        ];

        $seismicHeroImage = asset('img/seismic-retrofit-plan-hero.jpeg');
        $seismicOverviewImage = asset('img/seismic-retrofit-engineering-review.jpeg');
    @endphp

    <section class="py-md-5 d-flex" style="background: radial-gradient(circle at 15% 20%, rgba(255, 193, 7, 0.16), transparent 35%), radial-gradient(circle at 80% 10%, rgba(13, 110, 253, 0.12), transparent 30%), #f8fafc;">
        <div class="container">
            <nav aria-label="breadcrumb" class="pt-3">
                <ol class="breadcrumb small mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('home2', ['lang' => app()->getLocale()]) }}">{{ __('Home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('home2', ['lang' => app()->getLocale()]) }}#services">{{ __('Services') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('seismic_title') }}</li>
                </ol>
            </nav>

            <div class="row gy-4 align-items-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="rounded-4 overflow-hidden shadow-sm">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="{{ $seismicHeroImage }}" alt="{{ __('seismic_hero_alt') }}">
                    </div>
                    <div class="d-flex gap-3 mt-4 justify-content-center align-items-center">
                        <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                        <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 80px; object-fit: contain;">
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="p-2 p-md-3">
                        <div class="d-inline-flex align-items-center bg-warning text-dark fw-semibold px-3 py-2 rounded-pill mb-3">
                            {{ __('seismic_badge') }}
                        </div>
                        <h1 class="fs-1 fw-bolder mb-3">{{ __('seismic_title') }}</h1>
                        <p class="lead mb-4">{{ __('seismic_subtitle') }}</p>

                        <div class="row g-3 mb-4">
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('seismic_hero_bullet_1') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('seismic_hero_bullet_2') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('seismic_hero_bullet_3') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('seismic_hero_bullet_4') }}</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row align-items-md-center gap-3">
                            <a href="#contact-form-section" class="btn btn-warning btn-lg px-4 fw-bold shadow-sm text-dark">
                                {{ __('seismic_primary_cta') }}
                            </a>
                            <a href="tel:+16048003900" class="btn btn-light btn-lg px-4 fw-bold text-dark shadow-sm">
                                {{ __('seismic_secondary_cta') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact-form', [
        'source' => __('seismic_contact_source'),
        'title' => __('seismic_contact_title'),
        'subtitle' => __('seismic_contact_subtitle'),
    ])

    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm h-100">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="{{ $seismicOverviewImage }}" alt="{{ __('seismic_overview_alt') }}">
                        <div class="position-absolute bottom-0 start-0 end-0 px-3 px-md-4 py-2"
                            style="background: linear-gradient( to top, rgba(0,0,0,0.65), rgba(0,0,0,0) );">
                            <span class="badge rounded-pill bg-warning text-dark fw-semibold px-3 py-2 small">
                                {{ __('seismic_overview_badge') }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 h-100">
                        <h2 class="mb-3 fs-2 fw-bolder section-title-h1">{{ __('seismic_overview_title') }}</h2>
                        <p class="text-muted mb-3">{{ __('seismic_overview_p1') }}</p>
                        <p class="text-muted mb-3">{{ __('seismic_overview_p2') }}</p>
                        <p class="text-muted mb-0">{{ __('seismic_overview_p3') }}</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-4">{{ __('seismic_included_title') }}</h2>
                </div>
                @foreach ($includedItems as $item)
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4">
                            <div class="card-body">
                                <i class="bi {{ $item[0] }} fs-2 text-warning"></i>
                                <h3 class="h5 fw-bold mt-3 mb-2">{{ __($item[1]) }}</h3>
                                <p class="card-text text-muted mb-0">{{ __($item[2]) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-4">{{ __('seismic_why_title') }}</h2>
                </div>
                @foreach ($whyItems as $index => $item)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="me-3">
                                        <span class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                            {{ $index + 1 }}
                                        </span>
                                    </div>
                                    <div>
                                        <h3 class="h5 fw-bold mb-2">{{ __($item[0]) }}</h3>
                                        <p class="card-text text-muted mb-0">{{ __($item[1]) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row my-5">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-8">
                                <div class="card-body p-4 p-lg-5">
                                    <h3 class="h4 fw-bold mb-2">{{ __('seismic_mid_cta_title') }}</h3>
                                    <p class="text-muted mb-0">{{ __('seismic_mid_cta_text') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center text-lg-end pe-lg-4 pb-4 pb-lg-0">
                                <a href="#contact-form-section" class="btn btn-primary btn-lg mt-3 mt-lg-0 px-4 w-auto">
                                    {{ __('seismic_primary_cta') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('seismic_process_title') }}</h2>
                    <p class="lead mb-0">{{ __('seismic_process_intro') }}</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        @foreach ($processItems as $index => $item)
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                                    <div class="small text-uppercase fw-semibold text-warning mb-2">{{ __('seismic_step') }} {{ $index + 1 }}</div>
                                    <h3 class="h5 fw-bold mb-0">{{ __($item) }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-4">{{ __('seismic_benefits_title') }}</h2>
                </div>
                @foreach ($benefitItems as $item)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="bg-white rounded-4 shadow-sm p-4 h-100 d-flex align-items-start gap-3">
                            <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                            <h3 class="h5 fw-bold mb-0">{{ __($item) }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="bg-white rounded-4 shadow-sm p-4 p-md-5">
                        <div class="small text-uppercase fw-semibold text-warning mb-2">{{ __('seismic_related_links') }}</div>
                        <div class="d-flex flex-wrap gap-2">
                            <a class="btn btn-outline-dark" href="{{ route('home2', ['lang' => app()->getLocale()]) }}">{{ __('Home') }}</a>
                            <a class="btn btn-outline-dark" href="{{ route('home2', ['lang' => app()->getLocale()]) }}#services">{{ __('Services') }}</a>
                            <a class="btn btn-outline-dark" href="{{ route('contact', ['lang' => app()->getLocale()]) }}">{{ __('Contact Us') }}</a>
                            <a class="btn btn-outline-dark" href="{{ route('about', ['lang' => app()->getLocale()]) }}">{{ __('About') }}</a>
                            <a class="btn btn-outline-dark" href="{{ route('construction', ['lang' => app()->getLocale()]) }}">{{ __('construction') }}</a>
                            <a class="btn btn-outline-dark" href="{{ route('residentialServices', ['lang' => app()->getLocale()]) }}">{{ __('residentialServices') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq py-3 py-md-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('seismic_faq_title') }}</h2>
                </div>
                <div class="col-lg-8">
                    <div class="faq-container">
                        @for ($i = 1; $i <= 8; $i++)
                            <div class="faq-item rounded-3 {{ $i === 1 ? 'faq-active' : '' }}" data-aos="fade-up" data-aos-delay="{{ 100 + ($i * 100) }}">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>{{ __('seismic_faq_question_' . $i) }}</h3>
                                <div class="faq-content">
                                    <p>{{ __('seismic_faq_answer_' . $i) }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-vr text-white">
        <div class="container text-center">
            <h2 class="fs-2 fw-bolder mb-3">{{ __('seismic_final_cta_title') }}</h2>
            <p class="lead mb-4">{{ __('seismic_final_cta_text') }}</p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                <a href="#contact-form-section" class="btn btn-warning btn-lg px-4 fw-bold text-dark">
                    {{ __('seismic_final_cta_button') }}
                </a>
                <a href="tel:+16048003900" class="btn btn-light btn-lg px-4 fw-bold">
                    {{ __('seismic_secondary_cta') }}: +1 604-800-3900
                </a>
            </div>
        </div>
    </section>
@endsection
