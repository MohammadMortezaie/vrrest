@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}

    <style>
        .commercial-hero {
            background:
                radial-gradient(circle at 15% 20%, rgba(255, 193, 7, 0.18), transparent 34%),
                radial-gradient(circle at 85% 10%, rgba(13, 110, 253, 0.16), transparent 30%),
                #f8fafc;
        }

        .commercial-card {
            border-radius: 1.25rem;
            overflow: hidden;
            background: #ffffff;
            position: relative;
        }

        .commercial-floating-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(33, 37, 41, 0.9);
            color: #fff;
            border-radius: 999px;
            padding: 0.45rem 0.8rem;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .commercial-pill {
            background: #212529;
            color: #fff;
            border-radius: 999px;
            padding: 0.5rem 0.95rem;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        .commercial-soft-card {
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 12px 32px rgba(33, 37, 41, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .commercial-soft-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 36px rgba(33, 37, 41, 0.14);
        }

        .commercial-step-number {
            width: 2.1rem;
            height: 2.1rem;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #212529;
            color: #ffc107;
            font-weight: 700;
            font-size: 0.95rem;
            flex-shrink: 0;
        }

        .commercial-cta {
            background: linear-gradient(135deg, rgba(33, 37, 41, 0.97), rgba(13, 110, 253, 0.9));
            color: #fff;
            border-radius: 1.25rem;
        }

        .commercial-area-badge {
            background: #fff;
            border: 1px solid rgba(33, 37, 41, 0.12);
            color: #212529;
            border-radius: 999px;
            font-size: 0.85rem;
            padding: 0.35rem 0.75rem;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        .commercial-gallery-img {
            border-radius: 1rem;
            width: 100%;
            height: 100%;
            object-fit: cover;
            min-height: 220px;
            box-shadow: 0 10px 28px rgba(33, 37, 41, 0.12);
        }

        .commercial-related-card {
            border-radius: 1rem;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 12px 30px rgba(33, 37, 41, 0.12);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .commercial-related-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 36px rgba(33, 37, 41, 0.2);
        }

        .commercial-related-media {
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            object-position: center;
            display: block;
        }
    </style>
@endsection

@section('content')
    @php
        $tr = function (string $key): string {
            $value = __($key);
            if ($value !== $key) {
                return $value;
            }

            $fallback = __($key, [], 'en');
            if ($fallback !== $key) {
                return $fallback;
            }

            return \Illuminate\Support\Str::of($key)->replace('_', ' ')->title()->toString();
        };

        $serviceCards = [
            [
                'icon' => 'bi-droplet-half',
                'title' => $tr('commercialservice1_title'),
                'text' => $tr('commercialservice1_text'),
                'link' => route('waterdamage', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-fire',
                'title' => $tr('commercialservice2_title'),
                'text' => $tr('commercialservice2_text'),
                'link' => route('fireDamage', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-shield-check',
                'title' => $tr('commercialservice3_title'),
                'text' => $tr('commercialservice3_text'),
                'link' => route('moldRemediation', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-building-gear',
                'title' => $tr('commercialservice4_title'),
                'text' => $tr('commercialservice4_text'),
                'link' => route('construction', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-stars',
                'title' => $tr('commercialservice5_title'),
                'text' => $tr('commercialservice5_text'),
                'link' => route('specialtyCleaning', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-brush',
                'title' => $tr('commercialservice6_title'),
                'text' => $tr('commercialservice6_text'),
                'link' => route('generalCleaning', ['lang' => app()->getLocale()]),
            ],
        ];

        $industries = [
            $tr('commercialindustry1'),
            $tr('commercialindustry2'),
            $tr('commercialindustry3'),
            $tr('commercialindustry4'),
            $tr('commercialindustry5'),
            $tr('commercialindustry6'),
        ];

        $processSteps = [
            ['title' => $tr('commercialprocess_step1_title'), 'text' => $tr('commercialprocess_step1_text')],
            ['title' => $tr('commercialprocess_step2_title'), 'text' => $tr('commercialprocess_step2_text')],
            ['title' => $tr('commercialprocess_step3_title'), 'text' => $tr('commercialprocess_step3_text')],
            ['title' => $tr('commercialprocess_step4_title'), 'text' => $tr('commercialprocess_step4_text')],
            ['title' => $tr('commercialprocess_step5_title'), 'text' => $tr('commercialprocess_step5_text')],
        ];

        $googleReviewUrl = 'https://share.google/6qvSbfJtu8MKHNalD';
        $googleReviewCount = 33;
    @endphp

    <section class="py-5 commercial-hero">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-6 order-lg-2">
                    <div class="commercial-card shadow-lg">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/commercial.jpeg') }}"
                            alt="{{ __('commercialimgalt') }}">
                        <div class="commercial-floating-badge">{{ $tr('commercialhero_badge1') }}</div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center align-items-center">
                        <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                        <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 90px; object-fit: contain;">
                        <img src="{{ asset('img/googleg.png') }}" alt="Google Guaranteed" style="height: 68px; object-fit: contain;">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-1">
                    <div class="commercial-pill d-inline-flex align-items-center gap-2 mb-3">
                        <span>{{ $tr('commercialhero_badge2') }}</span>
                        <span class="badge bg-warning text-dark">{{ $tr('commercialhero_badge3') }}</span>
                    </div>
                    <h1 class="display-6 fw-bolder mb-3">{{ $tr('commercialheading') }}</h1>
                    <p class="lead mb-3">{{ $tr('commercialdescription') }}</p>
                    <p class="mb-4">{{ $tr('commercialhero_subdescription') }}</p>

                    <div class="row g-3 mb-4">
                        <div class="col-12 col-sm-6">
                            <div class="commercial-soft-card p-3 h-100">
                                <div class="fw-bold mb-1">{{ $tr('commercialhero_feature1_title') }}</div>
                                <div class="small text-muted">{{ $tr('commercialhero_feature1_text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="commercial-soft-card p-3 h-100">
                                <div class="fw-bold mb-1">{{ $tr('commercialhero_feature2_title') }}</div>
                                <div class="small text-muted">{{ $tr('commercialhero_feature2_text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="commercial-soft-card p-3 h-100">
                                <div class="fw-bold mb-1">{{ $tr('commercialhero_feature3_title') }}</div>
                                <div class="small text-muted">{{ $tr('commercialhero_feature3_text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="commercial-soft-card p-3 h-100">
                                <div class="fw-bold mb-1">{{ $tr('commercialhero_feature4_title') }}</div>
                                <div class="small text-muted">{{ $tr('commercialhero_feature4_text') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                            style="border-radius: 14px; box-shadow: 0 10px 28px rgba(0, 0, 0, 0.25);">
                            {{ $tr('commercialhero_cta_button') }}
                        </a>
                        <div class="small text-muted">{{ $tr('commercialhero_cta_note') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-12 col-lg-4">
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-2">{{ $tr('commercialtrust_title') }}</h2>
                    <p class="mb-0">{{ $tr('commercialtrust_lead') }}</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="commercial-soft-card p-3 h-100">
                        <div class="fw-bold mb-1">{{ $tr('commercialtrust_stat1_title') }}</div>
                        <div class="small text-muted">{{ $tr('commercialtrust_stat1_text') }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="commercial-soft-card p-3 h-100">
                        <div class="fw-bold mb-1">{{ $tr('commercialtrust_stat2_title') }}</div>
                        <div class="small text-muted">{{ $tr('commercialtrust_stat2_text') }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="commercial-soft-card p-3 h-100">
                        <div class="fw-bold mb-1">{{ $tr('commercialtrust_stat3_title') }}</div>
                        <div class="small text-muted">{{ $tr('commercialtrust_stat3_text') }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="commercial-soft-card p-3 h-100">
                        <div class="fw-bold mb-1">{{ $tr('commercialtrust_stat4_title') }}</div>
                        <div class="small text-muted">{{ $tr('commercialtrust_stat4_text') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-12 col-lg-7">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                        {{ __('commercialservices_section_badge') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('commercialservices_section_title') }}</h2>
                    <p class="lead mb-3">{{ __('commercialservices_section_lead') }}</p>
                    <p class="mb-0">{{ __('commercialservices_section_sublead') }}</p>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="commercial-card shadow-lg">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/commercial2.jpeg') }}"
                            alt="{{ __('commercialimg2alt') }}">
                    </div>
                </div>
            </div>

            <div class="row g-3">
                @foreach ($serviceCards as $service)
                    <div class="col-12 col-md-6 col-xl-4">
                        <a href="{{ $service['link'] }}" class="text-decoration-none text-dark">
                            <div class="commercial-soft-card p-4 h-100">
                                <div class="d-flex align-items-start gap-3">
                                    <span class="fs-4 text-warning"><i class="bi {{ $service['icon'] }}"></i></span>
                                    <div>
                                        <h3 class="h5 fw-bold mb-2">{{ $service['title'] }}</h3>
                                        <p class="small text-muted mb-0">{{ $service['text'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                <div class="small text-uppercase fw-semibold text-muted mb-2">{{ __('commercialservices_related_links') }}</div>
                <div class="d-flex flex-wrap gap-2">
                    <a class="badge bg-light text-dark border text-decoration-none px-3 py-2"
                        href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}">{{ __('commercialservices_link_water') }}</a>
                    <a class="badge bg-light text-dark border text-decoration-none px-3 py-2"
                        href="{{ route('fireDamage', ['lang' => app()->getLocale()]) }}">{{ __('commercialservices_link_fire') }}</a>
                    <a class="badge bg-light text-dark border text-decoration-none px-3 py-2"
                        href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}">{{ __('commercialservices_link_mold') }}</a>
                    <a class="badge bg-light text-dark border text-decoration-none px-3 py-2"
                        href="{{ route('construction', ['lang' => app()->getLocale()]) }}">{{ __('commercialservices_link_construction') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                {{ __('commercialindustries_badge') }}
            </div>
            <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('commercialindustries_title') }}</h2>
            <p class="lead mb-4">{{ __('commercialindustries_lead') }}</p>

            <div class="row g-3">
                @foreach ($industries as $industry)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="commercial-soft-card p-3 h-100">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-building-check text-warning"></i>
                                <div class="fw-semibold">{{ $industry }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="small text-muted mt-3 mb-0">{{ __('commercialindustry_note') }}</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-dark text-white fw-semibold small mb-3">
                        {{ __('commercialprocess_badge') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('commercialprocess_title') }}</h2>
                    <p class="lead mb-4">{{ __('commercialprocess_lead') }}</p>
                    <div class="d-grid gap-3">
                        @foreach ($processSteps as $index => $step)
                            <div class="commercial-soft-card p-3">
                                <div class="d-flex gap-3 align-items-start">
                                    <span class="commercial-step-number">{{ $index + 1 }}</span>
                                    <div>
                                        <h3 class="h6 fw-bold mb-1">{{ $step['title'] }}</h3>
                                        <p class="small text-muted mb-0">{{ $step['text'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <p class="small text-muted mt-3 mb-0">{{ __('commercialprocess_note') }}</p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="commercial-soft-card p-4 h-100">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                            {{ __('commercialcontinuity_badge') }}
                        </div>
                        <h2 class="fs-3 fw-bolder section-title-h1 mb-3">{{ __('commercialcontinuity_title') }}</h2>
                        <p class="mb-3">{{ __('commercialcontinuity_lead') }}</p>
                        <ul class="small ps-3 mb-4">
                            <li>{{ __('commercialcontinuity_item1') }}</li>
                            <li>{{ __('commercialcontinuity_item2') }}</li>
                            <li>{{ __('commercialcontinuity_item3') }}</li>
                            <li>{{ __('commercialcontinuity_item4') }}</li>
                            <li>{{ __('commercialcontinuity_item5') }}</li>
                        </ul>
                        <div class="row g-3">
                            <div class="col-12 col-md-4">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ __('commercialcontinuity_box1_title') }}</div>
                                    <div class="small text-muted">{{ __('commercialcontinuity_box1_text') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ __('commercialcontinuity_box2_title') }}</div>
                                    <div class="small text-muted">{{ __('commercialcontinuity_box2_text') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ __('commercialcontinuity_box3_title') }}</div>
                                    <div class="small text-muted">{{ __('commercialcontinuity_box3_text') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                        {{ __('commercialcoverage_badge') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('commercialcoverage_title') }}</h2>
                    <p class="lead mb-3">{{ __('commercialcoverage_lead') }}</p>
                    <p class="mb-3">{{ __('commercialcoverage_text1') }}</p>
                    <p class="mb-0">{{ __('commercialcoverage_text2') }}</p>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="commercial-soft-card p-4 h-100">
                        <h3 class="h5 fw-bold mb-3">{{ __('commercialcoverage_area_title') }}</h3>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="commercial-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ __('commercialcoverage_area1') }}</span>
                            <span class="commercial-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ __('commercialcoverage_area2') }}</span>
                            <span class="commercial-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ __('commercialcoverage_area3') }}</span>
                            <span class="commercial-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ __('commercialcoverage_area4') }}</span>
                            <span class="commercial-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ __('commercialcoverage_area5') }}</span>
                            <span class="commercial-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ __('commercialcoverage_area6') }}</span>
                            <span class="commercial-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ __('commercialcoverage_area7') }}</span>
                            <span class="commercial-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ __('commercialcoverage_area8') }}</span>
                        </div>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-2 mt-4 w-100"
                            style="border-radius: 12px; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.2);">
                            {{ __('commercialcoverage_cta') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-12 col-lg-7">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-dark text-white fw-semibold small mb-3">
                        Metro Vancouver Local SEO
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">Commercial Restoration Near You in Metro Vancouver</h2>
                    <p class="lead mb-3">
                        If you are searching for a commercial restoration company in Vancouver, Burnaby, Richmond, Surrey,
                        Coquitlam, North Vancouver, West Vancouver, or New Westminster, our team is ready 24/7.
                    </p>
                    <p class="mb-3">
                        We support offices, retail units, restaurants, strata properties, warehouses, and mixed-use buildings
                        with fast emergency mitigation, cleanup, and reconstruction planning.
                    </p>
                    <p class="mb-4">
                        Every project is scoped for business continuity, safety compliance, and faster reopening timelines,
                        with insurance-ready records for adjusters and property stakeholders.
                    </p>

                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="commercial-soft-card p-3 h-100">
                                <h3 class="h6 fw-bold mb-2">Commercial Water Damage Restoration in Vancouver and Burnaby</h3>
                                <p class="small text-muted mb-0">
                                    Rapid extraction, structural drying, and moisture mapping for burst pipes, roof leaks, and
                                    sprinkler failures in active commercial spaces.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="commercial-soft-card p-3 h-100">
                                <h3 class="h6 fw-bold mb-2">Commercial Fire and Smoke Cleanup in Richmond and Surrey</h3>
                                <p class="small text-muted mb-0">
                                    Detailed soot cleanup, odor control, and phased restoration planning designed to reduce
                                    shutdown time for local businesses.
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="commercial-soft-card p-3 h-100">
                                <h3 class="h6 fw-bold mb-2">Commercial Mold Remediation in Coquitlam and North Shore Properties</h3>
                                <p class="small text-muted mb-0">
                                    Containment-first workflows, HEPA cleaning, and source correction support for offices,
                                    healthcare facilities, strata buildings, and industrial units.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="commercial-soft-card p-4 h-100">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                            Google Reputation
                        </div>
                        <h3 class="fs-4 fw-bolder mb-3">Trusted by Local Businesses Across Metro Vancouver</h3>
                        <p class="mb-3">
                            VR PLUS Restoration currently has <strong>{{ $googleReviewCount }} five-star Google reviews</strong>
                            from property owners, managers, and commercial clients across the region.
                        </p>
                        <ul class="small ps-3 mb-4">
                            <li>5.0-star reputation for emergency response and restoration quality.</li>
                            <li>Verified local feedback from business and facility stakeholders.</li>
                            <li>Consistent praise for communication, professionalism, and speed.</li>
                        </ul>
                        <a href="{{ $googleReviewUrl }}" target="_blank" rel="noopener noreferrer"
                            class="btn btn-warning fw-bolder text-uppercase px-4 py-3 w-100 mb-3"
                            style="border-radius: 12px; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.2);">
                            Read {{ $googleReviewCount }} Google Reviews
                        </a>
                        <a href="tel:+16048003900" class="btn btn-outline-dark fw-bolder text-uppercase px-4 py-3 w-100"
                            style="border-radius: 12px;">
                            Talk to Commercial Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5">
        <div class="container">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                {{ $tr('commercialgallery_badge') }}
            </div>
            <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $tr('commercialgallery_title') }}</h2>
            <p class="lead mb-4">{{ $tr('commercialgallery_lead') }}</p>

            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="commercial-gallery-img" loading="lazy" src="{{ asset('img/water-damage-vancouver.jpg') }}"
                        alt="{{ $tr('commercialgallery_alt1') }}">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="commercial-gallery-img" loading="lazy" src="{{ asset('img/fire-damage.jpeg') }}"
                        alt="{{ $tr('commercialgallery_alt2') }}">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="commercial-gallery-img" loading="lazy" src="{{ asset('img/mold.jpeg') }}"
                        alt="{{ $tr('commercialgallery_alt3') }}">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="commercial-gallery-img" loading="lazy" src="{{ asset('img/water-damage-restoration-vancouver-equipment.jpg') }}"
                        alt="{{ $tr('commercialgallery_alt4') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                {{ $tr('commercialrelated_badge') }}
            </div>
            <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $tr('commercialrelated_title') }}</h2>
            <p class="lead mb-4">{{ $tr('commercialrelated_lead') }}</p>

            <div class="row g-4">
                <div class="col-12 col-lg-6">
                    <div class="commercial-related-card h-100">
                        <img class="commercial-related-media" loading="lazy" decoding="async" src="{{ asset('img/water-damage2.jpeg') }}"
                            alt="{{ $tr('commercialrelated_water_alt') }}">
                        <div class="p-4">
                            <h3 class="h4 fw-bold mb-2">{{ $tr('commercialrelated_water_title') }}</h3>
                            <p class="small text-muted mb-3">{{ $tr('commercialrelated_water_text') }}</p>
                            <a href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}"
                                class="btn btn-warning fw-bold text-uppercase px-4 py-2">
                                {{ $tr('commercialrelated_water_button') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="commercial-related-card h-100">
                        <img class="commercial-related-media" loading="lazy" decoding="async" src="{{ asset('img/mold3.jpeg') }}"
                            alt="{{ $tr('commercialrelated_mold_alt') }}">
                        <div class="p-4">
                            <h3 class="h4 fw-bold mb-2">{{ $tr('commercialrelated_mold_title') }}</h3>
                            <p class="small text-muted mb-3">{{ $tr('commercialrelated_mold_text') }}</p>
                            <a href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}"
                                class="btn btn-warning fw-bold text-uppercase px-4 py-2">
                                {{ $tr('commercialrelated_mold_button') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="commercial-cta p-4 p-md-5 shadow-lg">
                <div class="row g-4 align-items-center">
                    <div class="col-12 col-lg-8">
                        <h2 class="fs-2 fw-bolder mb-2">{{ $tr('commercialfinal_title') }}</h2>
                        <p class="lead mb-2">{{ $tr('commercialfinal_text') }}</p>
                        <p class="small mb-0 opacity-75">{{ $tr('commercialfinal_note') }}</p>
                    </div>
                    <div class="col-12 col-lg-4 text-lg-end">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                            style="border-radius: 14px; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.35);">
                            {{ $tr('commercialfinal_button') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq py-3 py-md-5">
        <div class="container">
            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder">
                    {{ __('faqheading') }}
                </h2>
                <hr>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="faq-container">
                        <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('commercialfaqquestion1') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('commercialfaqanswer1') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('commercialfaqquestion2') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('commercialfaqanswer2') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('commercialfaqquestion3') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('commercialfaqanswer3') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('commercialfaqquestion4') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('commercialfaqanswer4') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('commercialfaqquestion5') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('commercialfaqanswer5') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="700">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('commercialfaqquestion6') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('commercialfaqanswer6') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Faq Section -->
@endsection
