@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    @php
        $residentialServiceSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => __('residentialheading'),
            'serviceType' => __('residentialschema_servicetype'),
            'description' => __('residentialschema_servicedescription'),
            'provider' => [
                '@type' => 'LocalBusiness',
                'name' => 'VR PLUS Restoration',
                'telephone' => '+1-604-800-3900',
                'url' => route('residentialServices', ['lang' => app()->getLocale()]),
            ],
            'areaServed' => [
                'Vancouver',
                'Burnaby',
                'Richmond',
                'Surrey',
                'Coquitlam',
                'North Vancouver',
                'West Vancouver',
                'New Westminster',
            ],
            'offers' => [
                '@type' => 'Offer',
                'description' => __('residentialschema_offerdescription'),
                'availability' => 'https://schema.org/InStock',
                'priceCurrency' => 'CAD',
            ],
        ];

        $residentialFaqSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => __('residentialfaqquestion1'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('residentialfaqanswer1'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('residentialfaqquestion2'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('residentialfaqanswer2'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('residentialfaqquestion3'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('residentialfaqanswer3'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('residentialfaqquestion4'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('residentialfaqanswer4'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('residentialfaqquestion5'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('residentialfaqanswer5'),
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => __('residentialfaqquestion6'),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => __('residentialfaqanswer6'),
                    ],
                ],
            ],
        ];
    @endphp

    <script type="application/ld+json">
        {!! json_encode($residentialServiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <script type="application/ld+json">
        {!! json_encode($residentialFaqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <style>
        .residential-hero {
            background:
                radial-gradient(circle at 10% 15%, rgba(255, 193, 7, 0.16), transparent 35%),
                radial-gradient(circle at 85% 8%, rgba(13, 110, 253, 0.12), transparent 30%),
                #f8fafc;
        }

        .residential-card {
            border-radius: 1.25rem;
            overflow: hidden;
            background: #fff;
            position: relative;
        }

        .residential-soft-card {
            border-radius: 1rem;
            background: #fff;
            box-shadow: 0 12px 32px rgba(33, 37, 41, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .residential-soft-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 36px rgba(33, 37, 41, 0.14);
        }

        .residential-pill {
            background: #212529;
            color: #fff;
            border-radius: 999px;
            padding: 0.5rem 0.95rem;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        .residential-floating-badge {
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

        .residential-step-number {
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

        .residential-area-badge {
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

        .residential-gallery-img {
            border-radius: 1rem;
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            object-position: center;
            box-shadow: 0 10px 28px rgba(33, 37, 41, 0.12);
        }

        .residential-related-card {
            border-radius: 1rem;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 12px 30px rgba(33, 37, 41, 0.12);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .residential-related-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 36px rgba(33, 37, 41, 0.2);
        }

        .residential-related-media {
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .residential-cta {
            background: linear-gradient(135deg, rgba(33, 37, 41, 0.97), rgba(13, 110, 253, 0.9));
            color: #fff;
            border-radius: 1.25rem;
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
                'title' => $tr('residentialservice1_title'),
                'text' => $tr('residentialservice1_text'),
                'link' => route('waterdamage', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-fire',
                'title' => $tr('residentialservice2_title'),
                'text' => $tr('residentialservice2_text'),
                'link' => route('fireDamage', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-shield-check',
                'title' => $tr('residentialservice3_title'),
                'text' => $tr('residentialservice3_text'),
                'link' => route('moldRemediation', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-house-gear',
                'title' => $tr('residentialservice4_title'),
                'text' => $tr('residentialservice4_text'),
                'link' => route('construction', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-stars',
                'title' => $tr('residentialservice5_title'),
                'text' => $tr('residentialservice5_text'),
                'link' => route('specialtyCleaning', ['lang' => app()->getLocale()]),
            ],
            [
                'icon' => 'bi-clipboard2-pulse',
                'title' => $tr('residentialservice6_title'),
                'text' => $tr('residentialservice6_text'),
                'link' => route('contact', ['lang' => app()->getLocale()]),
            ],
        ];

        $issues = [
            $tr('residentialissue1'),
            $tr('residentialissue2'),
            $tr('residentialissue3'),
            $tr('residentialissue4'),
            $tr('residentialissue5'),
            $tr('residentialissue6'),
        ];

        $processSteps = [
            ['title' => $tr('residentialprocess_step1_title'), 'text' => $tr('residentialprocess_step1_text')],
            ['title' => $tr('residentialprocess_step2_title'), 'text' => $tr('residentialprocess_step2_text')],
            ['title' => $tr('residentialprocess_step3_title'), 'text' => $tr('residentialprocess_step3_text')],
            ['title' => $tr('residentialprocess_step4_title'), 'text' => $tr('residentialprocess_step4_text')],
            ['title' => $tr('residentialprocess_step5_title'), 'text' => $tr('residentialprocess_step5_text')],
        ];
    @endphp

    <section class="py-5 residential-hero">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-6 order-lg-2">
                    <div class="residential-card shadow-lg">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/residential.jpeg') }}"
                            alt="{{ $tr('residentialimgalt') }}">
                        <div class="residential-floating-badge">{{ $tr('residentialhero_badge1') }}</div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center align-items-center">
                        <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                        <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 90px; object-fit: contain;">
                        <img src="{{ asset('img/googleg.png') }}" alt="Google Guaranteed" style="height: 68px; object-fit: contain;">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-1">
                    <div class="residential-pill d-inline-flex align-items-center gap-2 mb-3">
                        <span>{{ $tr('residentialhero_badge2') }}</span>
                        <span class="badge bg-warning text-dark">{{ $tr('residentialhero_badge3') }}</span>
                    </div>
                    <h1 class="display-6 fw-bolder mb-3">{{ $tr('residentialheading') }}</h1>
                    <p class="lead mb-3">{{ $tr('residentialdescription') }}</p>
                    <p class="mb-4">{{ $tr('residentialhero_subdescription') }}</p>

                    <div class="row g-3 mb-4">
                        <div class="col-12 col-sm-6">
                            <div class="residential-soft-card p-3 h-100">
                                <div class="fw-bold mb-1">{{ $tr('residentialhero_feature1_title') }}</div>
                                <div class="small text-muted">{{ $tr('residentialhero_feature1_text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="residential-soft-card p-3 h-100">
                                <div class="fw-bold mb-1">{{ $tr('residentialhero_feature2_title') }}</div>
                                <div class="small text-muted">{{ $tr('residentialhero_feature2_text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="residential-soft-card p-3 h-100">
                                <div class="fw-bold mb-1">{{ $tr('residentialhero_feature3_title') }}</div>
                                <div class="small text-muted">{{ $tr('residentialhero_feature3_text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="residential-soft-card p-3 h-100">
                                <div class="fw-bold mb-1">{{ $tr('residentialhero_feature4_title') }}</div>
                                <div class="small text-muted">{{ $tr('residentialhero_feature4_text') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                            style="border-radius: 14px; box-shadow: 0 10px 28px rgba(0, 0, 0, 0.25);">
                            {{ $tr('residentialhero_cta_button') }}
                        </a>
                        <div class="small text-muted">{{ $tr('residentialhero_cta_note') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-12 col-lg-4">
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-2">{{ $tr('residentialtrust_title') }}</h2>
                    <p class="mb-0">{{ $tr('residentialtrust_lead') }}</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="residential-soft-card p-3 h-100">
                        <div class="fw-bold mb-1">{{ $tr('residentialtrust_stat1_title') }}</div>
                        <div class="small text-muted">{{ $tr('residentialtrust_stat1_text') }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="residential-soft-card p-3 h-100">
                        <div class="fw-bold mb-1">{{ $tr('residentialtrust_stat2_title') }}</div>
                        <div class="small text-muted">{{ $tr('residentialtrust_stat2_text') }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="residential-soft-card p-3 h-100">
                        <div class="fw-bold mb-1">{{ $tr('residentialtrust_stat3_title') }}</div>
                        <div class="small text-muted">{{ $tr('residentialtrust_stat3_text') }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="residential-soft-card p-3 h-100">
                        <div class="fw-bold mb-1">{{ $tr('residentialtrust_stat4_title') }}</div>
                        <div class="small text-muted">{{ $tr('residentialtrust_stat4_text') }}</div>
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
                        {{ $tr('residentialservices_section_badge') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $tr('residentialservices_section_title') }}</h2>
                    <p class="lead mb-3">{{ $tr('residentialservices_section_lead') }}</p>
                    <p class="mb-0">{{ $tr('residentialservices_section_sublead') }}</p>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="residential-card shadow-lg">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/residential2.jpeg') }}"
                            alt="{{ $tr('residentialimg2alt') }}">
                    </div>
                </div>
            </div>

            <div class="row g-3">
                @foreach ($serviceCards as $service)
                    <div class="col-12 col-md-6 col-xl-4">
                        <a href="{{ $service['link'] }}" class="text-decoration-none text-dark">
                            <div class="residential-soft-card p-4 h-100">
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
                <div class="small text-uppercase fw-semibold text-muted mb-2">{{ $tr('residentialservices_related_links') }}</div>
                <div class="d-flex flex-wrap gap-2">
                    <a class="badge bg-light text-dark border text-decoration-none px-3 py-2"
                        href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}">{{ $tr('residentialservices_link_water') }}</a>
                    <a class="badge bg-light text-dark border text-decoration-none px-3 py-2"
                        href="{{ route('fireDamage', ['lang' => app()->getLocale()]) }}">{{ $tr('residentialservices_link_fire') }}</a>
                    <a class="badge bg-light text-dark border text-decoration-none px-3 py-2"
                        href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}">{{ $tr('residentialservices_link_mold') }}</a>
                    <a class="badge bg-light text-dark border text-decoration-none px-3 py-2"
                        href="{{ route('construction', ['lang' => app()->getLocale()]) }}">{{ $tr('residentialservices_link_construction') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                        {{ $tr('residentialissues_badge') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $tr('residentialissues_title') }}</h2>
                    <p class="lead mb-4">{{ $tr('residentialissues_lead') }}</p>

                    <div class="row g-3">
                        @foreach ($issues as $issue)
                            <div class="col-12 col-md-6">
                                <div class="residential-soft-card p-3 h-100">
                                    <div class="d-flex gap-2 align-items-start">
                                        <i class="bi bi-check2-circle text-warning mt-1"></i>
                                        <div class="small text-muted">{{ $issue }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <p class="small text-muted mt-3 mb-0">{{ $tr('residentialissues_note') }}</p>
                </div>
                <div class="col-12 col-lg-5">
                    <img class="residential-gallery-img" loading="lazy" src="{{ asset('img/water-damage2.jpeg') }}"
                        alt="{{ $tr('residentialgallery_alt2') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-dark text-white fw-semibold small mb-3">
                        {{ $tr('residentialprocess_badge') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $tr('residentialprocess_title') }}</h2>
                    <p class="lead mb-4">{{ $tr('residentialprocess_lead') }}</p>
                    <div class="d-grid gap-3">
                        @foreach ($processSteps as $index => $step)
                            <div class="residential-soft-card p-3">
                                <div class="d-flex gap-3 align-items-start">
                                    <span class="residential-step-number">{{ $index + 1 }}</span>
                                    <div>
                                        <h3 class="h6 fw-bold mb-1">{{ $step['title'] }}</h3>
                                        <p class="small text-muted mb-0">{{ $step['text'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <p class="small text-muted mt-3 mb-0">{{ $tr('residentialprocess_note') }}</p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="residential-soft-card p-4 h-100">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                            {{ $tr('residentialcare_badge') }}
                        </div>
                        <h2 class="fs-3 fw-bolder section-title-h1 mb-3">{{ $tr('residentialcare_title') }}</h2>
                        <p class="mb-3">{{ $tr('residentialcare_lead') }}</p>
                        <ul class="small ps-3 mb-4">
                            <li>{{ $tr('residentialcare_item1') }}</li>
                            <li>{{ $tr('residentialcare_item2') }}</li>
                            <li>{{ $tr('residentialcare_item3') }}</li>
                            <li>{{ $tr('residentialcare_item4') }}</li>
                            <li>{{ $tr('residentialcare_item5') }}</li>
                        </ul>
                        <div class="row g-3">
                            <div class="col-12 col-md-4">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ $tr('residentialcare_box1_title') }}</div>
                                    <div class="small text-muted">{{ $tr('residentialcare_box1_text') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ $tr('residentialcare_box2_title') }}</div>
                                    <div class="small text-muted">{{ $tr('residentialcare_box2_text') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ $tr('residentialcare_box3_title') }}</div>
                                    <div class="small text-muted">{{ $tr('residentialcare_box3_text') }}</div>
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
                        {{ $tr('residentialcoverage_badge') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $tr('residentialcoverage_title') }}</h2>
                    <p class="lead mb-3">{{ $tr('residentialcoverage_lead') }}</p>
                    <p class="mb-3">{{ $tr('residentialcoverage_text1') }}</p>
                    <p class="mb-0">{{ $tr('residentialcoverage_text2') }}</p>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="residential-soft-card p-4 h-100">
                        <h3 class="h5 fw-bold mb-3">{{ $tr('residentialcoverage_area_title') }}</h3>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="residential-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ $tr('residentialcoverage_area1') }}</span>
                            <span class="residential-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ $tr('residentialcoverage_area2') }}</span>
                            <span class="residential-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ $tr('residentialcoverage_area3') }}</span>
                            <span class="residential-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ $tr('residentialcoverage_area4') }}</span>
                            <span class="residential-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ $tr('residentialcoverage_area5') }}</span>
                            <span class="residential-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ $tr('residentialcoverage_area6') }}</span>
                            <span class="residential-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ $tr('residentialcoverage_area7') }}</span>
                            <span class="residential-area-badge"><i class="bi bi-geo-alt-fill text-warning"></i>{{ $tr('residentialcoverage_area8') }}</span>
                        </div>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-2 mt-4 w-100"
                            style="border-radius: 12px; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.2);">
                            {{ $tr('residentialcoverage_cta') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5">
        <div class="container">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                {{ $tr('residentialgallery_badge') }}
            </div>
            <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $tr('residentialgallery_title') }}</h2>
            <p class="lead mb-4">{{ $tr('residentialgallery_lead') }}</p>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="residential-gallery-img" loading="lazy" src="{{ asset('img/residential2.jpeg') }}"
                        alt="{{ $tr('residentialgallery_alt1') }}">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="residential-gallery-img" loading="lazy" src="{{ asset('img/water-damage2.jpeg') }}"
                        alt="{{ $tr('residentialgallery_alt2') }}">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="residential-gallery-img" loading="lazy" src="{{ asset('img/mold3.jpeg') }}"
                        alt="{{ $tr('residentialgallery_alt3') }}">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="residential-gallery-img" loading="lazy" src="{{ asset('img/fire-damage.jpeg') }}"
                        alt="{{ $tr('residentialgallery_alt4') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                {{ $tr('residentialrelated_badge') }}
            </div>
            <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $tr('residentialrelated_title') }}</h2>
            <p class="lead mb-4">{{ $tr('residentialrelated_lead') }}</p>

            <div class="row g-4">
                <div class="col-12 col-lg-6">
                    <div class="residential-related-card h-100">
                        <img class="residential-related-media" loading="lazy" src="{{ asset('img/water-damage-vancouver.jpg') }}"
                            alt="{{ $tr('residentialrelated_water_alt') }}">
                        <div class="p-4">
                            <h3 class="h4 fw-bold mb-2">{{ $tr('residentialrelated_water_title') }}</h3>
                            <p class="small text-muted mb-3">{{ $tr('residentialrelated_water_text') }}</p>
                            <a href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}"
                                class="btn btn-warning fw-bold text-uppercase px-4 py-2">
                                {{ $tr('residentialrelated_water_button') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="residential-related-card h-100">
                        <img class="residential-related-media" loading="lazy" src="{{ asset('img/moldtype.jpeg') }}"
                            alt="{{ $tr('residentialrelated_mold_alt') }}">
                        <div class="p-4">
                            <h3 class="h4 fw-bold mb-2">{{ $tr('residentialrelated_mold_title') }}</h3>
                            <p class="small text-muted mb-3">{{ $tr('residentialrelated_mold_text') }}</p>
                            <a href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}"
                                class="btn btn-warning fw-bold text-uppercase px-4 py-2">
                                {{ $tr('residentialrelated_mold_button') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="residential-cta p-4 p-md-5 shadow-lg">
                <div class="row g-4 align-items-center">
                    <div class="col-12 col-lg-8">
                        <h2 class="fs-2 fw-bolder mb-2">{{ $tr('residentialfinal_title') }}</h2>
                        <p class="lead mb-2">{{ $tr('residentialfinal_text') }}</p>
                        <p class="small mb-0 opacity-75">{{ $tr('residentialfinal_note') }}</p>
                    </div>
                    <div class="col-12 col-lg-4 text-lg-end">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                            style="border-radius: 14px; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.35);">
                            {{ $tr('residentialfinal_button') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq py-3 py-md-5">
        <div class="container">
            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder">{{ __('faqheading') }}</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-container">
                        <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ $tr('residentialfaqquestion1') }}</h3>
                            <div class="faq-content">
                                <p>{{ $tr('residentialfaqanswer1') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ $tr('residentialfaqquestion2') }}</h3>
                            <div class="faq-content">
                                <p>{{ $tr('residentialfaqanswer2') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ $tr('residentialfaqquestion3') }}</h3>
                            <div class="faq-content">
                                <p>{{ $tr('residentialfaqanswer3') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ $tr('residentialfaqquestion4') }}</h3>
                            <div class="faq-content">
                                <p>{{ $tr('residentialfaqanswer4') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ $tr('residentialfaqquestion5') }}</h3>
                            <div class="faq-content">
                                <p>{{ $tr('residentialfaqanswer5') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="700">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ $tr('residentialfaqquestion6') }}</h3>
                            <div class="faq-content">
                                <p>{{ $tr('residentialfaqanswer6') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
