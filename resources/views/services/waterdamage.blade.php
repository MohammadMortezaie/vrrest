@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}


    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <script>!function(w,d,s,u){if(w.oaiq)return;var q=function(){q.q.push(arguments)};q.q=[];w.oaiq=q;var j=d.createElement(s);j.async=1;j.src=u;var f=d.getElementsByTagName(s)[0];f.parentNode.insertBefore(j,f)}(window,document,"script","https://bzrcdn.openai.com/sdk/oaiq.min.js");oaiq("init",{pixelId:"UjY3iNHaot5pnvK66tLLbm",debug:true});</script>
    <style>
        .vr-project-gallery {
            background: #ffffff;
            border: 1px solid rgba(33, 37, 41, 0.08);
            border-radius: 1rem;
            padding: 1rem;
            box-shadow: 0 12px 30px rgba(33, 37, 41, 0.08);
        }

        .vr-project-gallery-main {
            border-radius: 0.9rem;
            overflow: hidden;
            background: #111;
        }

        .vr-project-gallery-figure {
            position: relative;
            margin: 0;
            aspect-ratio: 16 / 9;
            min-height: 320px;
        }

        .vr-project-gallery-figure img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .vr-project-gallery-main .swiper-slide-active img {
            animation: vrGalleryImageIn 5s ease-out both;
        }

        .vr-project-gallery-caption {
            position: absolute;
            inset: auto 0 0 0;
            padding: 3rem 1.25rem 1.25rem;
            color: #fff;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0));
        }

        .vr-project-gallery-nav {
            position: absolute;
            top: 50%;
            z-index: 5;
            width: 44px;
            height: 44px;
            border: 0;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #111;
            background: rgba(249, 181, 0, 0.95);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.22);
            transform: translateY(-50%);
        }

        .vr-project-gallery-prev {
            left: 1rem;
        }

        .vr-project-gallery-next {
            right: 1rem;
        }

        .vr-project-gallery-pagination {
            position: static;
            margin-top: 0.75rem;
        }

        .vr-project-gallery-pagination .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: #212529;
            opacity: 0.25;
        }

        .vr-project-gallery-pagination .swiper-pagination-bullet-active {
            background: var(--accent-color);
            opacity: 1;
        }

        .vr-project-gallery-thumbs {
            display: grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .vr-gallery-thumb {
            border: 2px solid transparent;
            border-radius: 0.75rem;
            padding: 0;
            background: transparent;
            overflow: hidden;
            opacity: 0.72;
            transition: border-color 0.2s ease, opacity 0.2s ease, transform 0.2s ease;
        }

        .vr-gallery-thumb img {
            width: 100%;
            aspect-ratio: 4 / 3;
            object-fit: cover;
            display: block;
        }

        .vr-gallery-thumb.is-active,
        .vr-gallery-thumb:hover,
        .vr-gallery-thumb:focus-visible {
            border-color: var(--accent-color);
            opacity: 1;
            transform: translateY(-2px);
        }

        @keyframes vrGalleryImageIn {
            from {
                opacity: 0.92;
                transform: scale(1.035);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 991px) {
            .vr-project-gallery-figure {
                min-height: 260px;
            }

            .vr-project-gallery-thumbs {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }


        @media (max-width: 575px) {
            .vr-project-gallery {
                padding: 0.75rem;
            }

            .vr-project-gallery-figure {
                aspect-ratio: 4 / 5;
                min-height: 300px;
            }

            .vr-project-gallery-thumbs {
                display: flex;
                overflow-x: auto;
                padding-bottom: 0.25rem;
                scroll-snap-type: x proximity;
            }

            .vr-gallery-thumb {
                flex: 0 0 88px;
                scroll-snap-align: start;
            }

            .vr-project-gallery-nav {
                width: 38px;
                height: 38px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .vr-project-gallery-main .swiper-slide-active img,
            .vr-gallery-thumb {
                animation: none;
                transition: none;
            }
        }
    </style>
@endsection

@section('content')
    @php
        $googleReviewUrl = 'https://share.google/6qvSbfJtu8MKHNalD';
        $googleReviewCount = 33;
        $waterDamageProjectImages = [
            [
                'src' => 'img/water-damage/vancouver-water-damage-drying-equipment-living-room.webp',
                'alt' => 'Water damage restoration Vancouver drying equipment in a living room',
            ],
            [
                'src' => 'img/water-damage/vancouver-water-damage-floor-drying-fans.webp',
                'alt' => 'Vancouver water damage floor drying fans after water extraction',
            ],
            [
                'src' => 'img/water-damage/vancouver-water-damage-exposed-subfloor-drying.webp',
                'alt' => 'Exposed subfloor drying during water damage repair in Vancouver',
            ],
            [
                'src' => 'img/water-damage/vancouver-water-damage-moisture-containment.webp',
                'alt' => 'Moisture containment setup for water damage restoration in Vancouver',
            ],
            [
                'src' => 'img/water-damage/vancouver-water-extraction-damaged-flooring.webp',
                'alt' => 'Water extraction and damaged flooring removal in Vancouver',
            ],
            [
                'src' => 'img/water-damage/structural-drying-equipment-vancouver-home.webp',
                'alt' => 'Structural drying equipment in a Vancouver home after water damage',
            ],
            [
                'src' => 'img/water-damage/basement-water-damage-cleanup-vancouver.webp',
                'alt' => 'Basement water damage cleanup in Vancouver with drying equipment',
            ],
            [
                'src' => 'img/water-damage/water-damage-repair-floor-removal-vancouver.webp',
                'alt' => 'Water damage repair and floor removal in a Vancouver property',
            ],
            [
                'src' => 'img/water-damage/emergency-water-damage-drying-vancouver.webp',
                'alt' => 'Emergency water damage drying equipment in Vancouver',
            ],
            [
                'src' => 'img/water-damage/water-damage-restoration-project-vancouver.webp',
                'alt' => 'Water damage restoration project in Vancouver after a leak',
            ],
            [
                'src' => 'img/water-damage/vancouver-water-restoration-equipment-project.webp',
                'alt' => 'Vancouver water restoration equipment project for structural drying',
            ],
        ];
    @endphp

    <section class="py-md-5 d-flex " style="background: radial-gradient(circle at 15% 20%, rgba(255, 193, 7, 0.16), transparent 35%), radial-gradient(circle at 80% 10%, rgba(13, 110, 253, 0.12), transparent 30%), #f8fafc;">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="rounded-4 overflow-hidden shadow-sm">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="{{ asset('img/water-damage.jpeg') }}" alt="Water damage restoration Vancouver emergency drying equipment">
                    </div>
                    <div class="d-flex gap-3 mt-4 justify-content-center align-items-center">
                        <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                        <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 80px; object-fit: contain;">
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="p-2 p-md-3">
                        <div class="d-inline-flex align-items-center bg-warning text-dark fw-semibold px-3 py-2 rounded-pill mb-3">
                            {{ __('Water Damage 1-3') }}
                        </div>
                        <h1 class="fs-1 fw-bolder mb-3">{{ __('Water Damage 1-1') }}</h1>
                        <p class="lead mb-3">
                            {{ __('Water Damage 1-2') }}
                        </p>
                        <p class="lead fw-semibold mb-4">
                            {{ __('Water Damage 1-2-2') }} <a href="tel:+16048003900" class="text-warning"> {{ __('Water Damage Hero CTA Number') }}</a>.
                            {{ __('Water Damage Hero CTA') }}
                        </p>

                        <div class="row g-3 mb-4">
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('Water Damage Hero Bullet 1') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('Water Damage Hero Bullet 2') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('Water Damage Hero Bullet 3') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('Water Damage Hero Bullet 4') }}</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row align-items-md-center gap-3">
                            <a href="tel:+16048003900" class="btn btn-warning btn-lg px-4 fw-bold shadow-sm text-dark">
                                Call +1 604-800-3900
                            </a>
                            <div class="text-muted">
                                {{ __('Water Damage Types CTA Button') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (app()->getLocale() === 'en')
        <section class="py-4 py-md-5 bg-white">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="h-100 border rounded-4 p-4 p-md-5 shadow-sm">
                            <p class="text-uppercase small fw-semibold text-warning mb-2">Fast local dispatch</p>
                            <h2 class="fs-2 fw-bolder section-title-h1">24/7 Water Damage Repair Near You</h2>
                            <p class="text-muted mb-3">
                                Searching for water damage repair near me usually means something is actively leaking, flooding, or spreading. VR PLUS Restoration dispatches local crews across Metro Vancouver for burst pipes, floods, ceiling leaks, basement water, appliance leaks, and sewage backup emergencies.
                            </p>
                            <p class="text-muted mb-0">
                                Our team arrives with extraction, drying, moisture inspection, and safety equipment so work can begin right away in Vancouver, Burnaby, Surrey, North Vancouver, West Vancouver, Coquitlam, and nearby communities.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="h-100 bg-vr-second rounded-4 p-4 p-md-5 shadow-sm">
                            <p class="text-uppercase small fw-semibold text-warning mb-2">Extraction and drying</p>
                            <h2 class="fs-2 fw-bolder section-title-h1">Emergency Water Extraction and Structural Drying</h2>
                            <p class="text-muted mb-3">
                                For water extraction Vancouver and structural drying Vancouver calls, we remove standing water, map moisture, and place commercial dehumidifiers and air movers to dry wet building materials quickly and correctly.
                            </p>
                            <p class="text-muted mb-0">
                                Thermal imaging, moisture meters, daily monitoring, and final drying verification help confirm hidden cavities, subfloors, drywall, and framing are ready for repair.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4 py-md-5 bg-vr-second">
            <div class="container">
                <div class="row g-4 align-items-end mb-3">
                    <div class="col-lg-8">
                        <p class="text-uppercase small fw-semibold text-warning mb-2">Real project photos</p>
                        <h2 class="fs-2 fw-bolder section-title-h1">Recent Vancouver Water Damage Restoration Project</h2>
                        <p class="text-muted mb-0">
                            These photos show professional water extraction, exposed flooring, containment, dehumidifiers, and structural drying equipment from a recent water damage project handled by VR PLUS Restoration.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bold text-dark px-4">
                            Call +1 604-800-3900
                        </a>
                    </div>
                </div>

                <div class="vr-project-gallery" id="water-damage-project-gallery">
                    <div class="swiper vr-project-gallery-main"
                        data-swiper-config='{
                            "loop": true,
                            "speed": 850,
                            "effect": "fade",
                            "fadeEffect": {
                                "crossFade": true
                            },
                            "autoplay": {
                                "delay": 4500,
                                "disableOnInteraction": false
                            },
                            "keyboard": {
                                "enabled": true
                            },
                            "grabCursor": true,
                            "lazyPreloadPrevNext": 2,
                            "pagination": {
                                "el": ".vr-project-gallery-pagination",
                                "clickable": true
                            },
                            "navigation": {
                                "nextEl": ".vr-project-gallery-next",
                                "prevEl": ".vr-project-gallery-prev"
                            }
                        }'>
                        <div class="swiper-wrapper">
                            @foreach ($waterDamageProjectImages as $image)
                                <div class="swiper-slide">
                                    <figure class="vr-project-gallery-figure">
                                        <img
                                            src="{{ asset($image['src']) }}"
                                            alt="{{ $image['alt'] }}"
                                            loading="{{ $loop->first ? 'eager' : 'lazy' }}"
                                            decoding="async"
                                        >
                                        <figcaption class="vr-project-gallery-caption">
                                            <span class="badge bg-warning text-dark fw-semibold mb-2">
                                                Project photo {{ $loop->iteration }} of {{ count($waterDamageProjectImages) }}
                                            </span>
                                            <p class="mb-0 fw-semibold">{{ $image['alt'] }}</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            @endforeach
                        </div>

                        <button class="vr-project-gallery-nav vr-project-gallery-prev" type="button" aria-label="Previous water damage project photo">
                            <i class="bi bi-chevron-left" aria-hidden="true"></i>
                        </button>
                        <button class="vr-project-gallery-nav vr-project-gallery-next" type="button" aria-label="Next water damage project photo">
                            <i class="bi bi-chevron-right" aria-hidden="true"></i>
                        </button>
                    </div>

                    <div class="vr-project-gallery-pagination swiper-pagination" aria-label="Water damage project photo pagination"></div>

                    <div class="vr-project-gallery-thumbs" aria-label="Choose a water damage project photo">
                        @foreach ($waterDamageProjectImages as $image)
                            <button
                                class="vr-gallery-thumb {{ $loop->first ? 'is-active' : '' }}"
                                type="button"
                                data-gallery-target="water-damage-project-gallery"
                                data-slide-index="{{ $loop->index }}"
                                aria-label="Show water damage project photo {{ $loop->iteration }}"
                            >
                                <img
                                    src="{{ asset($image['src']) }}"
                                    alt="{{ $image['alt'] }}"
                                    loading="lazy"
                                    decoding="async"
                                >
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif


    @include('partials.contact-form', [
        'source' => __('Contact Form Source Water'),
        'title' => __('Contact Form Water Title'),
        'subtitle' => __('Contact Form Water Subtitle'),
    ])

    @include('partials.ai-trust-links')

    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">

                <div class="col-lg-5 mb-4 mb-lg-0">
                    <!-- Image card with overlay label -->
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm h-100">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="{{ asset('img/water-damage/vancouver-water-damage-floor-drying-fans.webp') }}"
                            alt="Vancouver water damage floor drying fans after water extraction">

                        <div class="position-absolute bottom-0 start-0 end-0 px-3 px-md-4 py-2"
                            style="background: linear-gradient( to top, rgba(0,0,0,0.65), rgba(0,0,0,0) );">
                            <span class="badge rounded-pill bg-warning text-dark fw-semibold px-3 py-2 small">
                                On-Site Water Damage Drying in Vancouver
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 mb-3">
                    <!-- Content card -->
                    <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                        <!-- Heading + intro -->
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <h2 class="mb-0 fs-2 fw-bolder section-title-h1">
                                    {{ __('Water Damage 1-3-1') }}
                                </h2>
                            </div>

                            <p class="text-muted mb-3">
                                {{ __('Water Damage 1-3-2') }}
                            </p>

                            <!-- Bullet list -->
                            <ul class="mb-0 ps-3" style="font-size: 1.02rem; line-height: 1.6;">
                                <li>{{ __('Water Damage 1-63') }}</li>
                                <li>{{ __('Water Damage 1-64') }}</li>
                                <li>{{ __('Water Damage 1-65') }}</li>
                                <li>{{ __('Water Damage 1-66') }}</li>
                                <li>{{ __('Water Damage 1-67') }}</li>
                            </ul>
                        </div>

                        <!-- CTA row -->
                        <div class="mt-4 pt-3 border-top">
                            <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                                <div class="text-center text-md-start">
                                    <strong class="d-block mb-2" style="font-size: 1.05rem;">
                                        {{ __('Mold 1-3-7') }}
                                    </strong>
                                    <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                                        style="font-size: 1rem; border-radius: 30px; box-shadow: 0 8px 18px rgba(0, 0, 0, 0.22);">
                                        📞 Call Now: +1 604-800-3900
                                    </a>
                                </div>
                                <p class="mb-0 small text-muted text-center text-md-start">
                                    {{ __('Mold 1-3-8') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 mb-3">
                    <h2 class="mt-5 fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage Why Choose Title') }}</h2>


                    <div class="row g-4">
                        <!-- Faster On-Site Arrival -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                1
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 1 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">
                                                {{ __('Water Damage Why Choose 1 Text') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certified & Experienced Technicians -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                2
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 2 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">{!! __('Water Damage Why Choose 2 Text') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Full Insurance Support -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                3
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 3 Title') }}</h3>
                                            <p class="card-text text-muted mb-2">
                                                {{ __('Water Damage Why Choose 3 Text') }}
                                            </p>
                                            <ul class="text-muted mb-0 ps-3">
                                                <li>{{ __('Water Damage Why Choose 3 List 1') }}</li>
                                                <li>{{ __('Water Damage Why Choose 3 List 2') }}</li>
                                                <li>{{ __('Water Damage Why Choose 3 List 3') }}</li>
                                                <li>{{ __('Water Damage Why Choose 3 List 4') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Local Vancouver Expertise -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                4
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 4 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">
                                                {{ __('Water Damage Why Choose 4 Text') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Industrial-Grade Equipment -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                5
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 5 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">
                                                {{ __('Water Damage Why Choose 5 Text') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Transparent Pricing -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                6
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 6 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">
                                                {{ __('Water Damage Why Choose 6 Text') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End-to-End CTA card -->
                    <div class="row my-5">
                        <div class="col-lg-10 mx-auto">
                            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                                <div class="row g-0 align-items-center">
                                    <div class="col-lg-8">
                                        <div class="card-body p-4 p-lg-5">
                                            <h3 class="h4 fw-bold mb-2">{{ __('Water Damage End-to-End Title') }}</h3>
                                            <p class="text-muted mb-0">{!! __('Water Damage End-to-End Text') !!}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-center text-lg-end pe-lg-4 pb-4 pb-lg-0">
                                        <a href="tel:+16048003900"
                                            class="btn btn-primary btn-lg mt-3 mt-lg-0 px-4 w-auto">
                                            {{ __('Water Damage End-to-End CTA') }}
                                        </a>
                                        <p class="small text-muted mt-2 mb-0">
                                            {{ __('Water Damage End-to-End Note') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


<div class="col-12">
    <div class="bg-white rounded-4 shadow-sm p-4 p-md-5">
        <div class="row g-4 align-items-center">
            <!-- Image -->
            <div class="col-lg-5">
                <figure class="position-relative overflow-hidden rounded-4 shadow-sm mb-0">
                    <img
                        src="{{ asset('img/water-damage/vancouver-water-damage-moisture-containment.webp') }}"
                        alt="Moisture containment setup for water damage restoration in Vancouver"
                        class="img-fluid w-100"
                        style="aspect-ratio: 4 / 5; object-fit: cover; object-position: center;"
                        loading="lazy"
                    >
                    <figcaption class="position-absolute bottom-0 start-0 end-0 px-3 px-md-4 py-3 text-white"
                        style="background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0));">
                        <span class="badge bg-warning text-dark fw-semibold">
                            Vancouver structural drying project
                        </span>
                    </figcaption>
                </figure>
            </div>

            <!-- Text -->
            <div class="col-lg-7">
                <!-- Title block with accent bar -->
                <div class="mb-3">
                    <p class="text-uppercase small fw-semibold text-warning mb-1">
                        {{ __('Water Damage Causes Label') }}
                    </p>
                    <h2 class="fw-bold mb-0 section-title-h1">
                        {{ __('Water Damage Causes Title') }}
                    </h2>
                </div>

                <p class="text-muted mb-4">
                    {{ __('Water Damage Causes Intro') }}
                </p>

                <div class="row g-4">
                    <!-- Common Causes -->
                    <div class="col-md-6">
                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Causes Column Title') }}</h3>
                        <ul class="mb-0 ps-3" style="font-size: 0.98rem; line-height: 1.6;">
                            <li>{{ __('Water Damage Causes 1') }}</li>
                            <li>{{ __('Water Damage Causes 2') }}</li>
                            <li>{{ __('Water Damage Causes 3') }}</li>
                            <li>{{ __('Water Damage Causes 4') }}</li>
                            <li>{{ __('Water Damage Causes 5') }}</li>
                            <li>{{ __('Water Damage Causes 6') }}</li>
                            <li>{{ __('Water Damage Causes 7') }}</li>
                            <li>{{ __('Water Damage Causes 8') }}</li>
                        </ul>
                    </div>

                    <!-- Early Warning Signs -->
                    <div class="col-md-6">
                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Signs Column Title') }}</h3>
                        <ul class="mb-0 ps-3" style="font-size: 0.98rem; line-height: 1.6;">
                            <li>{{ __('Water Damage Signs 1') }}</li>
                            <li>{{ __('Water Damage Signs 2') }}</li>
                            <li>{{ __('Water Damage Signs 3') }}</li>
                            <li>{{ __('Water Damage Signs 4') }}</li>
                            <li>{{ __('Water Damage Signs 5') }}</li>
                            <li>{{ __('Water Damage Signs 6') }}</li>
                            <li>{{ __('Water Damage Signs 7') }}</li>
                            <li>{{ __('Water Damage Signs 8') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                <div class="row align-items-center my-4">
                    <div class="col-md-4 my-3 text-center mb-md-0">
                        <div class="bg-white shadow-sm rounded-4 p-3 d-inline-block">
                            <img src="{{ asset('img/googleg.png') }}" alt="Google Guaranteed Service Provider"
                                class="img-fluid" style="max-height: 180px;">
                        </div>
                    </div>

                    <div class="col-md-8 mb-3">
                        <!-- Heading + intro -->
                        <h2 class="mt-3 fs-2 fw-bolder section-title-h1">
                            {{ __('Water Damage 1-60') }}
                        </h2>

                        <p class=" text-muted mb-3">
                            {{ __('Water Damage 1-61') }}
                        </p>

                        <!-- CTA card -->
                        <div class="mt-4">
                            <div class="bg-white rounded-4 shadow-sm p-4 p-md-4 text-center text-md-start">
                                <strong class="d-block mb-3" style="font-size: 1.1rem;">
                                    {{ __('Mold 1-3-7') }}
                                </strong>

                                <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                                    <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                                        style="font-size: 1rem; border-radius: 30px; box-shadow: 0 6px 14px rgba(0, 0, 0, 0.18);">
                                        📞 Call Now: +1 604-800-3900
                                    </a>

                                    <p class="mb-0 small text-muted">
                                        {{ __('Mold 1-3-8') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="border rounded-4 p-4 bg-light text-center text-md-start">
                                <div class="small text-uppercase fw-semibold text-warning mb-2">
                                    {{ __('Water Damage Review Eyebrow') }}
                                </div>
                                <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Review Title') }}</h3>
                                <p class="text-muted mb-2">{{ __('Water Damage Review Text') }}</p>
                                <p class="fw-semibold mb-3">
                                    <span class="text-warning">★★★★★</span>
                                    <span class="ms-1">{{ __('Water Damage Review Meta', ['count' => $googleReviewCount]) }}</span>
                                </p>
                                <a href="{{ $googleReviewUrl }}" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-dark fw-semibold text-uppercase px-4 py-2">
                                    {{ __('Water Damage Review CTA') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
                    <h2 class="mt-5 fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage 1-4') }}
                    </h2>
                    <p class="lead ">{{ __('Water Damage 1-5') }}
                    </p>
                </div>

                <div class="col-md-6 mt-5">
                    <img class="img-fluid rounded" loading="lazy"
                        src="{{ asset('img/water-damage/vancouver-water-restoration-equipment-project.webp') }}"
                        alt="Vancouver water restoration equipment project for structural drying">

                </div>

                <div class="col-md-12">
                    <div class="text-center mt-3">
                        <strong class="d-block mb-2" style="font-size: 1.2rem;">{{ __('Mold 1-3-7') }} </strong>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                            style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            📞 Call Now: +1 604-800-3900
                        </a>
                        <p class="mt-2" style="font-size: 0.95rem; color: #555;">{{ __('Mold 1-3-8') }} </p>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="mt-3">
                        <h2 class="mt-5 fs-2 fw-bolder section-title-h1">{{ __('waterDamage 1-68') }}</h2>
                        <p>
                            {{ __('watedamage 1-69') }}
                        </p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 my-3">
                        <img class="img-fluid rounded" loading="lazy"
                            src="{{ asset('img/water-damage/structural-drying-equipment-vancouver-home.webp') }}"
                            alt="Structural drying equipment in a Vancouver home after water damage">
                    </div>

                    <div class="col-md-6 my-3">
                        <img class="img-fluid rounded" loading="lazy"
                            src="{{ asset('img/water-damage/vancouver-water-extraction-damaged-flooring.webp') }}"
                            alt="Water extraction and damaged flooring removal in Vancouver">
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-12 my-3">
                        <h2 class="mt-5 fs-2 fw-bolder section-title-h1">
                            {{ __('Water Damage Types Title') }}</h2>

                    </div>

                    <div class="col-md-12 my-3">
                        <p>{{ __('Water Damage Types Intro') }}</p>

                        <div class="row g-4">
                            <!-- Burst Pipes -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 1 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 1 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Appliance Leaks -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 2 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 2 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Toilet Overflow & Sewage -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 3 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 3 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Basement Flooding -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 4 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 4 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Roof Leaks -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 5 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 5 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Rainstorm Water Intrusion -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 6 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 6 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            @if (app()->getLocale() === 'en')
                                <div class="col-md-6 col-lg-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body">
                                            <h3 class="h5 fw-bold mb-2">Ceiling and Wall Water Damage</h3>
                                            <p class="card-text text-muted mb-0">
                                                Stains, bubbling paint, sagging drywall, and wet insulation can hide moisture behind finished surfaces. We trace the source, open only what is needed, dry cavities, and prepare walls or ceilings for repair.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body">
                                            <h3 class="h5 fw-bold mb-2">Hardwood and Floor Water Damage</h3>
                                            <p class="card-text text-muted mb-0">
                                                Wet hardwood, laminate, carpet, and subfloors need quick extraction and controlled drying. Our technicians check moisture below the surface to reduce cupping, swelling, odors, and mold risk.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Optional CTA under the grid -->
                        <div class="row mt-5">
                            <div class="col text-center">
                                <p class="mb-3 fw-semibold">
                                    {{ __('Water Damage Types CTA Text') }}
                                </p>
                                <a href="tel:+16048003900" class="btn btn-primary btn-lg px-4">
                                    {{ __('Water Damage Types CTA Button') }}
                                </a>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="row g-4 mt-4">
                    <div class="col-md-12">
                        <p class="text-uppercase small fw-semibold text-warning mb-1">
                            {{ __('Water Damage Restoration Scope Eyebrow') }}
                        </p>
                        <h2 class="fs-2 fw-bolder section-title-h1">
                            {{ __('Water Damage Restoration Scope Title') }}
                        </h2>
                        <p class="lead text-muted">
                            {{ __('Water Damage Restoration Scope Intro') }}
                        </p>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 fw-bold">{{ __('Water Damage Restoration Scope 1 Title') }}</h3>
                                <p class="text-muted mb-0">{{ __('Water Damage Restoration Scope 1 Text') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 fw-bold">{{ __('Water Damage Restoration Scope 2 Title') }}</h3>
                                <p class="text-muted mb-0">{{ __('Water Damage Restoration Scope 2 Text') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 fw-bold">{{ __('Water Damage Restoration Scope 3 Title') }}</h3>
                                <p class="text-muted mb-0">{{ __('Water Damage Restoration Scope 3 Text') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 fw-bold">{{ __('Water Damage Restoration Scope 4 Title') }}</h3>
                                <p class="text-muted mb-0">{{ __('Water Damage Restoration Scope 4 Text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 align-items-center mt-5">
                    <div class="col-lg-5">
                        <img class="img-fluid rounded-4 shadow-sm" loading="lazy"
                            src="{{ asset('img/water-damage/vancouver-water-damage-exposed-subfloor-drying.webp') }}"
                            alt="Exposed subfloor drying during water damage repair in Vancouver">
                    </div>

                    <div class="col-lg-7">
                        <p class="text-uppercase small fw-semibold text-warning mb-1">
                            {{ __('Water Damage Restoration Insurance Eyebrow') }}
                        </p>
                        <h2 class="fs-2 fw-bolder section-title-h1">
                            {{ __('Water Damage Restoration Insurance Title') }}
                        </h2>
                        <p class="text-muted">
                            {{ __('Water Damage Restoration Insurance Intro') }}
                        </p>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 shadow-sm p-3 h-100">
                                    <h3 class="h6 fw-bold mb-2">{{ __('Water Damage Restoration Insurance 1 Title') }}</h3>
                                    <p class="small text-muted mb-0">{{ __('Water Damage Restoration Insurance 1 Text') }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 shadow-sm p-3 h-100">
                                    <h3 class="h6 fw-bold mb-2">{{ __('Water Damage Restoration Insurance 2 Title') }}</h3>
                                    <p class="small text-muted mb-0">{{ __('Water Damage Restoration Insurance 2 Text') }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 shadow-sm p-3 h-100">
                                    <h3 class="h6 fw-bold mb-2">{{ __('Water Damage Restoration Insurance 3 Title') }}</h3>
                                    <p class="small text-muted mb-0">{{ __('Water Damage Restoration Insurance 3 Text') }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 shadow-sm p-3 h-100">
                                    <h3 class="h6 fw-bold mb-2">{{ __('Water Damage Restoration Insurance 4 Title') }}</h3>
                                    <p class="small text-muted mb-0">{{ __('Water Damage Restoration Insurance 4 Text') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>



    <section class="py-3 py-md-5  ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">



                <div class="col-md-7 mb-4 pb-4">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage 1-70') }}
                    </h2>
                    <p>{!! __('Water Damage 1-71') !!}</p>

                    <ul>
                        <li>{{ __('Water Damage 1-72') }}</li>
                        <li>{{ __('Water Damage 1-73') }}</li>
                        <li>{{ __('Water Damage 1-74') }}</li>
                        <li>{{ __('Water Damage 1-75') }}</li>
                    </ul>

                </div>
                <div class="col-md-5 mb-4 pb-4">

                    <img class="img-fluid rounded " loading="lazy"
                        src="{{ asset('img/water-damage/basement-water-damage-cleanup-vancouver.webp') }}"
                        alt="Basement water damage cleanup in Vancouver with drying equipment">

                </div>







                <div class="col-md-5 mb-3">

                    <img class="img-fluid rounded " loading="lazy"
                        src="{{ asset('img/water-damage/emergency-water-damage-drying-vancouver.webp') }}"
                        alt="Emergency water damage drying equipment in Vancouver">

                </div>
                <div class="col-md-7 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1"> {{ __('What Not To DO') }}

                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>{{ __('Water Damage 1-18') }}

                            </strong>{{ __('Water Damage 1-19') }}


                        </li>


                        <li>
                            <strong>{{ __('Water Damage 1-20') }}

                            </strong>{{ __('Water Damage 1-21') }}


                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-22') }}

                            </strong>{{ __('Water Damage 1-23') }}

                        </li>


                    </ul>

                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('What To DO') }}
                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>{{ __('Water Damage 1-6') }}

                            </strong>{{ __('Water Damage 1-7') }}

                        </li>


                        <li>
                            <strong>{{ __('Water Damage 1-8') }}

                            </strong>{{ __('Water Damage 1-9') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-10') }}

                            </strong>{{ __('Water Damage 1-11') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-12') }}

                            </strong>{{ __('Water Damage 1-13') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-14') }}

                            </strong>
                            {{ __('Water Damage 1-15') }}
                        </li>

                        <li>
                            <strong> {{ __('Water Damage 1-16') }}

                            </strong>
                            {{ __('Water Damage 1-17') }}
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <section class="py-3 py-md-5 bg-vr-second ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-7 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage 1-24') }}

                    </h2>

                    <p class="lead"> {{ __('Water Damage 1-25') }}

                        <button class="btn btn-link txt-vr" type="button" data-bs-toggle="collapse"
                            onclick="scrollToText()" data-bs-target="#collapseVrRestoration" aria-expanded="false"
                            aria-controls="collapseVrRestoration"> {{ __('Read More') }} >>
                        </button>
                    </p>

                </div>
                <div class="col-md-5 mb-3">

                    <img class="img-fluid rounded" loading="lazy"
                        src="{{ asset('img/water-damage/water-damage-restoration-project-vancouver.webp') }}"
                        alt="Water damage restoration project in Vancouver after a leak">
                </div>

                <div class="collapse" id="collapseVrRestoration">
                    <div class="card card-body " id="textToScrollTo">
                        <p class="lead">
                            {{ __('Water Damage 1-26') }}

                            <br>
                            <br>
                            {{ __('Water Damage 1-27') }}

                            <br>
                            <br>
                            {{ __('Water Damage 1-28') }}


                            <br>
                            <br>
                            {{ __('Water Damage 1-29') }}
                            <br>
                            <br>
                            {{ __('Water Damage 1-30') }}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-3 py-md-5 ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-12 mb-3">
                    <h2 class="section-title-h1">
                        {{ __('Water Damage 1-31') }}

                    </h2>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            1) {{ __('Water Damage 1-32') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-33') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            2) {{ __('Water Damage 1-34') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-35') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            3){{ __('Water Damage 1-36') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-37') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            4) {{ __('Water Damage 1-38') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text"> {{ __('Water Damage 1-39') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            5) {{ __('Water Damage 1-40') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-41') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            6) {{ __('Water Damage 1-42') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-43') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            7) {{ __('Water Damage 1-44') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-45') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            8) {{ __('Water Damage 1-46') }}
                        </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text ">{{ __('Water Damage 1-47') }}

                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 my-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        @if (app()->getLocale() === 'en')
                            Water Damage Restoration Across Metro Vancouver
                        @else
                            {{ __('About 1-9') }}
                        @endif
                    </h2>
                    <hr>

                    @if (app()->getLocale() === 'en')
                        <p class="lead text-muted">
                            VR PLUS Restoration provides fast local water damage restoration across Vancouver and Metro Vancouver, with emergency water extraction, structural drying, flood cleanup, documentation, and repair planning for homes, strata buildings, and businesses.
                        </p>

                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="h-100 bg-white rounded-4 shadow-sm p-4">
                                    <h3 class="h5 fw-bold">
                                        <a href="/en/burnaby/water-damage-restoration" class="text-decoration-none">
                                            Burnaby water damage restoration
                                        </a>
                                    </h3>
                                    <p class="text-muted mb-0">Emergency support for condo leaks, basement floods, appliance failures, and strata water losses in Burnaby.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="h-100 bg-white rounded-4 shadow-sm p-4">
                                    <h3 class="h5 fw-bold">
                                        <a href="/en/surrey/water-damage-restoration-surrey" class="text-decoration-none">
                                            Surrey water damage restoration
                                        </a>
                                    </h3>
                                    <p class="text-muted mb-0">Water removal, drying, cleanup, and insurance-ready reporting for Surrey homes and commercial properties.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="h-100 bg-white rounded-4 shadow-sm p-4">
                                    <h3 class="h5 fw-bold">
                                        <a href="/en/new-westminster/new-westminster-water-damage-restoration" class="text-decoration-none">
                                            New Westminster water damage restoration
                                        </a>
                                    </h3>
                                    <p class="text-muted mb-0">Fast help for older buildings, river-area moisture issues, burst pipes, ceiling leaks, and flooded suites.</p>
                                </div>
                            </div>
                        </div>

                        <p class="mt-4 mb-0 text-muted">
                            We also dispatch to Coquitlam, North Vancouver, West Vancouver, Richmond, Langley, Delta, and other Metro Vancouver communities for urgent water restoration and flood cleanup.
                        </p>
                    @else
                        <h3 class="fs-4 fw-bold">
                            {{ __('Water Damage 1-46-1') }}
                        </h3>
                        <p>
                            {{ __('Water Damage 1-46-2') }}
                        </p>
                    @endif


                    @if (app()->getLocale() !== 'en')
                        <div class="d-flex flex-wrap gap-2 pb-3">
                            <a href="https://vrrestoration.ca/en/blog/9/what-number-to-call-for-water-damage-in-vancouver"
                                class="btn btn-warning btn-sm">

                                {{ __('Water Damage 1-46-3') }}
                            </a>
                        </div>
                        <ul class="txt-vr d-flex flex-wrap gap-3">
                            <li class="lead px-2">Vancouver</li>
                            <li class="lead px-2">West Vancouver</li>
                            <li class="lead px-2">North Shore</li>
                            <li class="lead px-2">Downtown</li>
                            <li class="lead px-2">Greater Vancouver</li>
                            <li class="lead px-2">Metro Vancouver</li>
                            <li class="lead px-2">Coquitlam</li>
                            <li class="lead px-2">Sea to Sky</li>
                            <li class="lead px-2">Tri-Cities</li>
                            <li class="lead px-2">Fraser Valley</li>
                            <li class="lead px-2">Howe Sound</li>
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq  bg-vr-second">

        <div class="container">


            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Frequently Asked Questions') }}

                </h2>
                <hr>
            </div>

            <div class="row ">

                <div class="col-lg-12">

                    <div class="faq-container">

                        <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-48') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-49') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-50') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-51') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-52') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-53') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-54') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-55') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-56') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-57') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-58') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-59') }} </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        @if (app()->getLocale() === 'en')
                            <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="650">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Do you repair walls, floors, and ceilings after drying?</h3>
                                <div class="faq-content">
                                    <p>Yes. After extraction and structural drying are complete, we can coordinate repairs for drywall, ceilings, flooring, trim, insulation, cabinets, and other affected finishes.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="700">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Do you serve Burnaby, Surrey, Coquitlam, North Vancouver, and West Vancouver?</h3>
                                <div class="faq-content">
                                    <p>Yes. VR PLUS Restoration serves Vancouver, Burnaby, Surrey, Coquitlam, North Vancouver, West Vancouver, New Westminster, and the wider Metro Vancouver area.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        @endif

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Recommended For You -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="section-title">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        @if (app()->getLocale() === 'en')
                            Related Water Damage Guides
                        @else
                            {{ __('Recommended For You') }}
                        @endif
                    </h2>
                </div>

                @if (app()->getLocale() === 'en')
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 col-lg">
                            <a class="d-block h-100 border rounded-4 p-3 text-decoration-none text-dark bg-white shadow-sm" href="/en/blog/14/emergency-water-restoration-in-burnaby-bc-247-response">
                                Emergency water restoration in Burnaby
                            </a>
                        </div>
                        <div class="col-md-6 col-lg">
                            <a class="d-block h-100 border rounded-4 p-3 text-decoration-none text-dark bg-white shadow-sm" href="/en/blog/15/flooded-basement-solutions-what-to-do-and-who-to-call">
                                Flooded basement cleanup guide
                            </a>
                        </div>
                        <div class="col-md-6 col-lg">
                            <a class="d-block h-100 border rounded-4 p-3 text-decoration-none text-dark bg-white shadow-sm" href="/en/blog/29/how-long-does-water-damage-restoration-take-in-vancouver-bc">
                                Water damage restoration timeline in Vancouver
                            </a>
                        </div>
                        <div class="col-md-6 col-lg">
                            <a class="d-block h-100 border rounded-4 p-3 text-decoration-none text-dark bg-white shadow-sm" href="/en/blog/22/what-to-do-if-you-have-water-damage-in-your-walls">
                                Water damage in walls: what to do
                            </a>
                        </div>
                        <div class="col-md-6 col-lg">
                            <a class="d-block h-100 border rounded-4 p-3 text-decoration-none text-dark bg-white shadow-sm" href="/en/blog/148/water-coming-up-basement-floor">
                                Water coming up through basement floor
                            </a>
                        </div>
                    </div>
                @endif


                <div class="container">

                    <div class="swiper"
                        data-swiper-config=' {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                              "delay": 4000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                              "el": ".swiper-pagination",
                              "type": "bullets",
                              "clickable": true
                            },
                            "breakpoints": {
                              "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 30
                              },
                              "480": {
                                "slidesPerView": 1,
                                "spaceBetween": 30
                              },
                              "640": {
                                "slidesPerView": 2,
                                "spaceBetween": 30
                              },
                              "992": {
                                "slidesPerView": 3,
                                "spaceBetween": 30
                              }
                            }
                          }'>
                        <div class="swiper-wrapper ">
                            @foreach ($blog as $b)
                                <div class="swiper-slide my-3 ">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title txt-vr h5">{{ $b->title }}</h3>
                                            <hr>
                                            <p class="card-text">
                                                {{ $b->subtitle }}
                                            </p>
                                            <a href="{{ route('blog.post', ['lang' => app()->getLocale(), 'blog' => $b->id, 'slug' => $b->slug]) }}"
                                                class="text-decoration-none text-black">{{ __('Read More') }}
                                                <i class="bi bi-chevron-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>


    </section><!-- /Recommended For You -->
@endsection

@section('scripts')
    <script>
        function scrollToText() {
            const collapseElement = document.getElementById('collapseVrRestoration');

            collapseElement.addEventListener('shown.bs.collapse', function() {
                const textToScrollTo = document.getElementById('textToScrollTo');
                textToScrollTo.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
    </script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        function initSwiper() {
            document.querySelectorAll('.swiper').forEach(function(swiper) {
                let config = JSON.parse(swiper.getAttribute('data-swiper-config'));
                let instance = new Swiper(swiper, config);

                if (swiper.classList.contains('vr-project-gallery-main')) {
                    initWaterDamageGallery(swiper, instance);
                }
            });
        }

        function initWaterDamageGallery(swiperElement, swiperInstance) {
            const gallery = swiperElement.closest('.vr-project-gallery');

            if (!gallery) {
                return;
            }

            const thumbs = gallery.querySelectorAll('.vr-gallery-thumb');

            const setActiveThumb = function(index) {
                thumbs.forEach(function(thumb) {
                    thumb.classList.toggle('is-active', Number(thumb.dataset.slideIndex) === index);
                });
            };

            thumbs.forEach(function(thumb) {
                thumb.addEventListener('click', function() {
                    const targetIndex = Number(thumb.dataset.slideIndex);

                    if (Number.isNaN(targetIndex)) {
                        return;
                    }

                    if (typeof swiperInstance.slideToLoop === 'function') {
                        swiperInstance.slideToLoop(targetIndex);
                    } else {
                        swiperInstance.slideTo(targetIndex);
                    }

                    setActiveThumb(targetIndex);
                });
            });

            swiperInstance.on('slideChange', function() {
                setActiveThumb(swiperInstance.realIndex ?? swiperInstance.activeIndex);
            });
        }

        window.addEventListener('load', initSwiper);
    </script>
@endsection
