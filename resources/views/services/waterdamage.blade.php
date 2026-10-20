@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <link rel="stylesheet" href="{{ asset('css/restoration-service.css') }}">
    <script>!function(w,d,s,u){if(w.oaiq)return;var q=function(){q.q.push(arguments)};q.q=[];w.oaiq=q;var j=d.createElement(s);j.async=1;j.src=u;var f=d.getElementsByTagName(s)[0];f.parentNode.insertBefore(j,f)}(window,document,"script","https://bzrcdn.openai.com/sdk/oaiq.min.js");oaiq("init",{pixelId:"UjY3iNHaot5pnvK66tLLbm",debug:true});</script>
@endsection

@section('content')
    @php
        $waterDamageProjectImages = [
            [
                'src' => 'img/water-damage/vancouver-water-damage-drying-equipment-living-room.webp',
                'alt' => 'Air movers drying a water-damaged wall during a Vancouver restoration project',
            ],
            [
                'src' => 'img/water-damage/vancouver-water-damage-floor-drying-fans.webp',
                'alt' => 'Moisture meter checking a water-damaged wall during a Vancouver restoration project',
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
<div class="restoration-service-page water-damage-page">
    <section class="wd-hero">
        <div class="container">
            <nav class="wd-breadcrumb" aria-label="{{ __('WD Breadcrumb') }}">
                <a href="{{ route('home2', ['lang' => app()->getLocale()]) }}">{{ __('Home') }}</a>
                <span aria-hidden="true">/</span><span>{{ __('waterDamage') }}</span>
            </nav>
            <div class="wd-hero-grid">
                <div class="wd-hero-copy">
                    <p class="wd-eyebrow"><span class="wd-status-dot" aria-hidden="true"></span>{{ __('WD Emergency') }}</p>
                    <h1>{{ __('Water Damage 1-1') }}</h1>
                    <p class="wd-hero-lead">{{ __('WD Hero Intro') }}</p>
                    <div class="wd-actions">
                        <a href="tel:+16048003900" class="wd-button wd-button-primary"><i class="bi bi-telephone" aria-hidden="true"></i> {{ __('WD Call') }} 604-800-3900</a>
                        <a href="#contact-form-section" class="wd-text-link">{{ __('WD Request Inspection') }} <span aria-hidden="true">↗</span></a>
                    </div>
                    <p class="wd-hero-note">{{ __('WD Hero Note') }}</p>
                </div>
                <figure class="wd-hero-image">
                    <img src="{{ asset($waterDamageProjectImages[0]['src']) }}" alt="{{ $waterDamageProjectImages[0]['alt'] }}" width="1200" height="1600" fetchpriority="high" loading="eager">
                    <figcaption><span class="wd-photo-label">{{ __('WD On Site') }}</span><strong>{{ __('WD Photo Caption') }}</strong><span>{{ __('WD Photo Detail') }}</span></figcaption>
                    <span class="wd-photo-index" aria-hidden="true">01 / VR PLUS Restoration</span>
                </figure>
            </div>
        </div>
    </section>

    @include('partials.restoration-credentials')

    <nav class="wd-jumpnav" aria-label="{{ __('Water Damage Quick Links Label') }}">
        <div class="container">
            <span>{{ __('Water Damage Quick Links Label') }}</span>
            <a href="#water-damage-services">{{ __('Water Damage Quick Link Services') }}</a>
            <a href="#water-damage-process">{{ __('Water Damage Quick Link Process') }}</a>
            <a href="#water-damage-project-gallery">{{ __('WD Projects') }}</a>
            <a href="#water-damage-safety-cost">{{ __('WD Cost Insurance') }}</a>
            <a href="#water-damage-types">{{ __('Water Damage Quick Link Types') }}</a>
            <a href="#water-damage-causes">{{ __('Water Damage Quick Link Causes') }}</a>
            <a href="#faq">{{ __('Water Damage Quick Link FAQ') }}</a>
        </div>
    </nav>

    <section class="wd-section wd-intro">
        <div class="container wd-intro-grid">
            <div>
                <p class="wd-eyebrow">{{ __('WD First Things First') }}</p>
                <h2>{{ __('Water Damage 1-48') }}</h2>
            </div>
            <div>
                <p class="wd-lead">{{ __('Water Damage 1-49') }}</p>
                <div class="wd-safety-note"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i><p><strong>{{ __('Water Damage Categories Safety Title') }}</strong> {{ __('Water Damage Categories Safety Text') }}</p></div>
                <details class="wd-disclosure wd-safety-details"><summary><h3>{{ __('What Not To DO') }}</h3></summary><ul class="wd-list">@foreach(range(18, 22, 2) as $tip)<li><strong>{{ __('Water Damage 1-'.$tip) }}</strong> {{ __('Water Damage 1-'.($tip + 1)) }}</li>@endforeach</ul></details>
            </div>
        </div>
    </section>

    <section class="wd-section wd-soft" id="water-damage-services">
        <div class="container">
            <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('Water Damage Restoration Scope Eyebrow') }}</p><h2>{{ __('Water Damage Restoration Scope Title') }}</h2></div><p>{{ __('Water Damage Restoration Scope Intro') }}</p></div>
            <div class="wd-service-grid">
                @foreach (['water', 'wind', 'shield-check', 'tools'] as $icon)
                    <article class="wd-service">
                        <div class="wd-service-top"><i class="bi bi-{{ $icon }}" aria-hidden="true"></i><span>0{{ $loop->iteration }}</span></div>
                        <h3>{{ __('Water Damage Restoration Scope '.$loop->iteration.' Title') }}</h3>
                        <p>{{ __('Water Damage Restoration Scope '.$loop->iteration.' Text') }}</p>
                    </article>
                @endforeach
            </div>
            @include('partials.restoration-contact-cta', ['message' => __('WD Services Help')])
        </div>
    </section>

    <section class="wd-section" id="water-damage-process">
        <div class="container wd-process-grid">
            <div class="wd-section-intro"><p class="wd-eyebrow">{{ __('WD What Happens Next') }}</p><h2>{{ __('Water Damage 1-31') }}</h2><p>{{ __('WD Process Intro') }}</p><a href="#contact-form-section" class="wd-text-link">{{ __('WD Request Inspection') }} <span aria-hidden="true">↗</span></a></div>
            <ol class="wd-process-list">
                @foreach (range(32, 46, 2) as $step)
                    <li><span class="wd-step-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><details @if($loop->first) open @endif><summary><h3>{{ __('Water Damage 1-'.$step) }}</h3></summary><p>{{ __('Water Damage 1-'.($step + 1)) }}</p></details></li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="wd-section wd-dark" id="water-damage-project-gallery">
        <div class="container">
            <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('WD Real Projects') }}</p><h2>{{ __('WD Gallery Title') }}</h2></div><p>{{ __('WD Gallery Intro') }}</p></div>
            @include('partials.restoration-gallery', ['projectImages' => $waterDamageProjectImages])
            @include('partials.restoration-contact-cta', ['message' => __('WD Project Help')])
        </div>
    </section>

    <section class="wd-section" id="water-damage-team">
        <div class="container">
            <div class="wd-section-heading"><div><p class="wd-eyebrow">VR PLUS RESTORATION</p><h2>{{ __('Water Damage Why Choose Title') }}</h2></div><p>{{ __('Water Damage 1-5') }}</p></div>
            <div class="wd-reasons">
                @foreach (range(1, 6) as $reason)
                    <article><span class="wd-mini-number">0{{ $reason }}</span><h3>{{ __('Water Damage Why Choose '.$reason.' Title') }}</h3><p>{!! __('Water Damage Why Choose '.$reason.' Text') !!}</p>
                        @if ($reason === 3)<ul>@foreach(range(1, 4) as $item)<li>{{ __('Water Damage Why Choose 3 List '.$item) }}</li>@endforeach</ul>@endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.google-reviews', [
        'reviewKeys' => ['garnik-giloyan', 'nozar-kh', 'calzoner'],
        'reviewSectionTitle' => __('Google Reviews Water Title'),
        'reviewSectionLead' => __('Google Reviews Water Lead'),
        'reviewSectionClass' => 'wd-soft',
    ])

    <section class="wd-section" id="water-damage-safety-cost">
        <div class="container">
            <div class="wd-split">
                <figure class="wd-section-photo"><img src="{{ asset($waterDamageProjectImages[2]['src']) }}" alt="{{ $waterDamageProjectImages[2]['alt'] }}" width="1000" height="1200" loading="lazy" decoding="async"><figcaption>{{ __('Water Damage Cost Image Caption') }}</figcaption></figure>
                <div><p class="wd-eyebrow">{{ __('Water Damage Cost Eyebrow') }}</p><h2>{{ __('Water Damage Cost Title') }}</h2><p>{{ __('Water Damage Cost Intro') }}</p><ul class="wd-checklist">@foreach(range(1, 6) as $factor)<li>{{ __('Water Damage Cost Factor '.$factor) }}</li>@endforeach</ul><a href="#contact-form-section" class="wd-button wd-button-primary">{{ __('Water Damage Cost CTA') }} <span aria-hidden="true">↗</span></a></div>
            </div>
            <div class="wd-insurance">
                <div><p class="wd-eyebrow">{{ __('Water Damage Restoration Insurance Eyebrow') }}</p><h2>{{ __('Water Damage Restoration Insurance Title') }}</h2><p>{{ __('Water Damage Restoration Insurance Intro') }}</p><p class="wd-small">{{ __('Water Damage 1-55') }}</p></div>
                <div class="wd-insurance-grid">@foreach(range(1, 4) as $item)<article><h3>{{ __('Water Damage Restoration Insurance '.$item.' Title') }}</h3><p>{{ __('Water Damage Restoration Insurance '.$item.' Text') }}</p></article>@endforeach</div>
            </div>
            <details class="wd-disclosure"><summary><h3>{{ __('Water Damage Contents Title') }}</h3></summary><p>{{ __('Water Damage Contents Text') }}</p><ul>@foreach(range(1, 3) as $item)<li>{{ __('Water Damage Contents Item '.$item) }}</li>@endforeach</ul></details>
        </div>
    </section>

    <section class="wd-section wd-soft" id="water-damage-types">
        <div class="container">
            <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('WD Every Kind Of Loss') }}</p><h2>{{ __('Water Damage Types Title') }}</h2></div><p>{{ __('Water Damage Types Intro') }}</p></div>
            <div class="wd-types-grid">
                @foreach(range(1, 6) as $type)<details class="wd-disclosure"><summary><h3>{{ __('Water Damage Type '.$type.' Title') }}</h3></summary><p>{{ __('Water Damage Type '.$type.' Text') }}</p></details>@endforeach
                @if(app()->getLocale() === 'en')
                    <details class="wd-disclosure"><summary><h3>Ceiling and Wall Water Damage</h3></summary><p>Stains, bubbling paint, sagging drywall, and wet insulation can hide moisture behind finished surfaces. We trace the source, open only what is needed, dry cavities, and prepare walls or ceilings for repair.</p></details>
                    <details class="wd-disclosure"><summary><h3>Hardwood and Floor Water Damage</h3></summary><p>Wet hardwood, laminate, carpet, and subfloors need quick extraction and controlled drying. Our technicians check moisture below the surface to reduce cupping, swelling, odors, and mold risk.</p></details>
                @endif
            </div>
            <div class="wd-categories"><p class="wd-eyebrow">{{ __('Water Damage Categories Eyebrow') }}</p><h2>{{ __('Water Damage Categories Title') }}</h2><p class="wd-measure">{{ __('Water Damage Categories Intro') }}</p><div class="wd-three-columns">@foreach(range(1, 3) as $category)<article><span class="wd-category-label">{{ __('Water Damage Category '.$category.' Badge') }}</span><h3>{{ __('Water Damage Category '.$category.' Title') }}</h3><p>{{ __('Water Damage Category '.$category.' Text') }}</p></article>@endforeach</div></div>
            @include('partials.restoration-contact-cta', ['message' => __('WD Types Help')])
        </div>
    </section>

    <section class="wd-section" id="water-damage-causes">
        <div class="container">
            <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('Water Damage Causes Label') }}</p><h2>{{ __('Water Damage Causes Title') }}</h2></div><p>{{ __('Water Damage Causes Intro') }}</p></div>
            <div class="wd-causes-grid"><figure class="wd-section-photo"><img src="{{ asset($waterDamageProjectImages[3]['src']) }}" alt="{{ $waterDamageProjectImages[3]['alt'] }}" width="1000" height="1200" loading="lazy" decoding="async"></figure><div><h3>{{ __('Water Damage Causes Column Title') }}</h3><ul class="wd-list">@foreach(range(1, 8) as $item)<li>{{ __('Water Damage Causes '.$item) }}</li>@endforeach</ul></div><div><h3>{{ __('Water Damage Signs Column Title') }}</h3><ul class="wd-list">@foreach(range(1, 8) as $item)<li>{{ __('Water Damage Signs '.$item) }}</li>@endforeach</ul></div></div>
            <div class="wd-equipment"><h2>{{ __('Water Damage 1-70') }}</h2><p class="wd-measure">{!! __('Water Damage 1-71') !!}</p><ul class="wd-equipment-list">@foreach(range(72, 75) as $item)<li><i class="bi bi-check2" aria-hidden="true"></i>{{ __('Water Damage 1-'.$item) }}</li>@endforeach</ul></div>
            <details class="wd-disclosure"><summary><h3>{{ __('Water Damage 1-24') }}</h3></summary>@foreach(range(25, 30) as $item)<p>{{ __('Water Damage 1-'.$item) }}</p>@endforeach</details>
        </div>
    </section>

    <section class="wd-section wd-soft" id="water-damage-areas"><div class="container">                <div class="col-md-12 my-3">
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

                </div></div></section>

    <section class="wd-section" id="faq">
        <div class="container wd-faq-grid">
            <div><p class="wd-eyebrow">{{ __('WD Clear Answers') }}</p><h2>{{ __('Frequently Asked Questions') }}</h2><p>{{ __('WD FAQ Intro') }}</p><a class="wd-text-link" href="tel:+16048003900">604-800-3900 <span aria-hidden="true">↗</span></a></div>
            <div class="wd-faq-list">
                @foreach(range(48, 58, 2) as $question)<details class="wd-disclosure" @if($loop->first) open @endif><summary><h3>{{ __('Water Damage 1-'.$question) }}</h3></summary><p>{{ __('Water Damage 1-'.($question + 1)) }}</p></details>@endforeach
                @foreach(['Cost', 'Category', 'Strata', 'Contents'] as $question)<details class="wd-disclosure"><summary><h3>{{ __('Water Damage FAQ '.$question.' Question') }}</h3></summary><p>{{ __('Water Damage FAQ '.$question.' Answer') }}</p></details>@endforeach
                @if(app()->getLocale() === 'en')
                    <details class="wd-disclosure"><summary><h3>Do you repair walls, floors, and ceilings after drying?</h3></summary><p>Yes. After extraction and structural drying are complete, we can coordinate repairs for drywall, ceilings, flooring, trim, insulation, cabinets, and other affected finishes.</p></details>
                    <details class="wd-disclosure"><summary><h3>Do you serve Burnaby, Surrey, Coquitlam, North Vancouver, and West Vancouver?</h3></summary><p>Yes. VR PLUS Restoration serves Vancouver, Burnaby, Surrey, Coquitlam, North Vancouver, West Vancouver, New Westminster, and the wider Metro Vancouver area.</p></details>
                @endif
            </div>
        </div>
    </section>

    @include('partials.contact-form', [
        'source' => __('Contact Form Source Water'),
        'title' => __('Contact Form Water Title'),
        'subtitle' => __('Contact Form Water Subtitle'),
    ])

    <section class="wd-section" id="water-damage-guides">
        <div class="container">
            <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('WD Knowledge') }}</p><h2>{{ __('WD Related Guides') }}</h2></div><a href="{{ route('blog', ['lang' => app()->getLocale()]) }}" class="wd-text-link">{{ __('Blog') }} <span aria-hidden="true">↗</span></a></div>
            @if(app()->getLocale() === 'zh')<p class="wd-small">{{ __('Selected Guides English Note') }}</p>@endif
            <div class="wd-guide-links">
                <a href="/en/blog/122/water-damage-restoration-attics-basements" hreflang="en" lang="en">Water Damage Restoration for Attics and Basements <span aria-hidden="true">↗</span></a>
                <a href="/en/blog/126/how-dry-wet-basement-before-mold" hreflang="en" lang="en">How to Dry Out a Wet Basement Before Mold Starts <span aria-hidden="true">↗</span></a>
                <a href="/en/blog/121/snow-water-damage-vancouver-24-7" hreflang="en" lang="en">Snow And Water Damage In Vancouver What To Do If Your Home Is Affected <span aria-hidden="true">↗</span></a>
                <a href="/en/blog/110/stop-water-leak-inside-wall" hreflang="en" lang="en">How to Stop a Water Leak Inside a Wall | Vancouver Home <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>
    @include('partials.ai-trust-links')
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/restoration-service.js') }}" defer></script>
@endsection
