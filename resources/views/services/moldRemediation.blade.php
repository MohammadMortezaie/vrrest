@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    @php
        $moldServiceSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => __('Mold Extra Schema Service Name'),
            'serviceType' => __('Mold Extra Schema Service Type'),
            'description' => __('Mold Extra Schema Service Description'),
            'provider' => [
                '@type' => 'LocalBusiness',
                'name' => 'VR PLUS Restoration',
                'telephone' => '+1-604-800-3900',
                'url' => route('moldRemediation', ['lang' => app()->getLocale()]),
                'image' => asset('img/mold.jpeg'),
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '636 Clyde Ave Suite 7',
                    'addressLocality' => 'West Vancouver',
                    'addressRegion' => 'BC',
                    'postalCode' => 'V7T 1E1',
                    'addressCountry' => 'CA',
                ],
            ],
            'areaServed' => [
                __('Mold Extra Location Downtown'),
                __('Mold Extra Location Kitsilano'),
                __('Mold Extra Location Mount Pleasant'),
                __('Mold Extra Location East Vancouver'),
                __('Mold Extra Location Point Grey'),
                __('Mold Extra Location North Vancouver'),
                __('Mold Extra Location West Vancouver'),
                __('Mold Extra Location Burnaby'),
                __('Mold Extra Location Richmond'),
                __('Mold Extra Location New Westminster'),
                __('Mold Extra Location Coquitlam'),
                __('Mold Extra Location Surrey'),
            ],
            'availableChannel' => [
                '@type' => 'ServiceChannel',
                'servicePhone' => '+1-604-800-3900',
                'availableLanguage' => ['English', 'Chinese'],
            ],
            'offers' => [
                '@type' => 'Offer',
                'availability' => 'https://schema.org/InStock',
                'priceCurrency' => 'CAD',
                'description' => __('Mold Extra Schema Offer Description'),
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => __('Mold Guide Catalog Title'),
                'itemListElement' => array_map(static fn ($service) => [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => __($service),
                    ],
                ], [
                    'Mold Guide Catalog Service 1',
                    'Mold Guide Catalog Service 2',
                    'Mold Guide Catalog Service 3',
                    'Mold Guide Catalog Service 4',
                    'Mold Guide Catalog Service 5',
                ]),
            ],
        ];

        $moldFaqItems = array_map(static fn ($faq) => [
            'question' => __($faq[0]),
            'answer' => __($faq[1]),
        ], [
            ['Mold 1-30', 'Mold 1-31'],
            ['Mold 1-32', 'Mold 1-33'],
            ['Mold 1-34', 'Mold 1-35'],
            ['Mold 1-36', 'Mold 1-37'],
            ['Mold 1-38', 'Mold 1-39'],
            ['Mold 1-40', 'Mold 1-41'],
            ['Mold 1-42', 'Mold 1-43'],
            ['Mold 1-44', 'Mold 1-45'],
            ['Mold 1-46', 'Mold 1-47'],
            ['Mold 1-48', 'Mold 1-49'],
            ['Mold Extra FAQ 1 Question', 'Mold Extra FAQ 1 Answer'],
            ['Mold Extra FAQ 2 Question', 'Mold Extra FAQ 2 Answer'],
            ['Mold Extra FAQ 3 Question', 'Mold Extra FAQ 3 Answer'],
            ['Mold Extra FAQ 4 Question', 'Mold Extra FAQ 4 Answer'],
            ['Mold Guide FAQ 1 Question', 'Mold Guide FAQ 1 Answer'],
            ['Mold Guide FAQ 2 Question', 'Mold Guide FAQ 2 Answer'],
            ['Mold Guide FAQ 3 Question', 'Mold Guide FAQ 3 Answer'],
            ['Mold Guide FAQ 4 Question', 'Mold Guide FAQ 4 Answer'],
        ]);

        $moldFaqSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(static fn ($faq) => [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'],
                ],
            ], $moldFaqItems),
        ];
    @endphp

    <script type="application/ld+json">
        {!! json_encode($moldServiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <script type="application/ld+json">
        {!! json_encode($moldFaqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => __('Home'), 'item' => 'https://vrrestoration.ca/'.app()->getLocale()],
                ['@type' => 'ListItem', 'position' => 2, 'name' => __('moldRemediation'), 'item' => 'https://vrrestoration.ca/'.app()->getLocale().'/mold-remediation'],
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <link rel="stylesheet" href="{{ asset('css/restoration-service.css') }}">
    <script>!function(w,d,s,u){if(w.oaiq)return;var q=function(){q.q.push(arguments)};q.q=[];w.oaiq=q;var j=d.createElement(s);j.async=1;j.src=u;var f=d.getElementsByTagName(s)[0];f.parentNode.insertBefore(j,f)}(window,document,"script","https://bzrcdn.openai.com/sdk/oaiq.min.js");oaiq("init",{pixelId:"UjY3iNHaot5pnvK66tLLbm",debug:true});</script>
@endsection

@section('content')
    @php
        $projectImages = [
            ['src' => 'img/mold-remediation/mold-wall-cleaning.jpg', 'alt' => __('MD Photo Cleaning')],
            ['src' => 'img/mold-remediation/mold-containment.jpg', 'alt' => __('MD Photo Containment')],
            ['src' => 'img/mold-remediation/mold-on-attic-sheathing.jpg', 'alt' => __('MD Photo Attic')],
            ['src' => 'img/mold-remediation/mold-on-interior-wall.jpg', 'alt' => __('MD Photo Wall')],
            ['src' => 'img/mold-refrigerator.jpg', 'alt' => __('MD Photo Fridge')],
        ];
    @endphp
<div class="restoration-service-page mold-remediation-page">
    <section class="wd-hero">
        <div class="container">
            <nav class="wd-breadcrumb" aria-label="{{ __('WD Breadcrumb') }}"><a href="{{ route('home2', ['lang' => app()->getLocale()]) }}">{{ __('Home') }}</a><span aria-hidden="true">/</span><span>{{ __('moldRemediation') }}</span></nav>
            <div class="wd-hero-grid">
                <div class="wd-hero-copy">
                    <p class="wd-eyebrow"><span class="wd-status-dot" aria-hidden="true"></span>{{ __('WD Emergency') }}</p>
                    <h1>{{ __('Mold Hero Title') }}</h1>
                    <p class="wd-hero-lead">{{ __('MD Hero Intro') }}</p>
                    <div class="wd-actions"><a href="tel:+16048003900" class="wd-button wd-button-primary"><i class="bi bi-telephone" aria-hidden="true"></i>{{ __('WD Call') }} 604-800-3900</a><a href="#contact-form-section" class="wd-text-link">{{ __('Mold Guide DIY CTA') }} <span aria-hidden="true">↗</span></a></div>
                    <p class="wd-hero-note">{{ __('WD Hero Note') }}</p>
                </div>
                <figure class="wd-hero-image">
                    <img src="{{ asset($projectImages[0]['src']) }}" alt="{{ $projectImages[0]['alt'] }}" width="1920" height="1080" loading="eager" fetchpriority="high">
                    <figcaption><span class="wd-photo-label">{{ __('MD Photo Label') }}</span><strong>{{ __('MD Photo Title') }}</strong><span>{{ __('MD Photo Detail') }}</span></figcaption>
                </figure>
            </div>
        </div>
    </section>
    @include('partials.restoration-credentials')
    <nav class="wd-jumpnav" aria-label="{{ __('Mold Guide Navigation Label') }}"><div class="container">
        <span>{{ __('Water Damage Quick Links Label') }}</span>
        <a href="#mold-services">{{ __('Mold Guide Nav Services') }}</a>
        <a href="#mold-process">{{ __('Mold Guide Nav Process') }}</a>
        <a href="#mold-gallery">{{ __('MD Photos') }}</a>
        <a href="#mold-cost-timeline">{{ __('MD Cost Time') }}</a>
        <a href="#mold-causes-signs">{{ __('Mold Guide Nav Causes') }}</a>
        <a href="#mold-types-testing">{{ __('Mold Guide Nav Types') }}</a>
        <a href="#faq">{{ __('Mold Guide Nav FAQ') }}</a>
    </div></nav>

    <section class="wd-section wd-intro" id="mold-assessment">
        <div class="container">
            <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('WD First Things First') }}</p><h2>{{ __('Mold Guide Decision Title') }}</h2></div><p>{{ __('Mold Guide Decision Lead') }}</p></div>
            <div class="wd-three-columns">@foreach(['Inspection', 'Testing', 'Remediation'] as $step)<article><h3>{{ __('Mold Guide '.$step.' Title') }}</h3><p>{{ __('Mold Guide '.$step.' Text') }}</p></article>@endforeach</div>
            <details class="wd-disclosure md-diy"><summary><h3>{{ __('Mold Guide DIY Title') }}</h3></summary><p>{{ __('Mold Guide DIY Text') }}</p><ul class="wd-checklist">@foreach(range(1,4) as $item)<li>{{ __('Mold Guide DIY Signal '.$item) }}</li>@endforeach</ul><a class="wd-text-link" href="https://www.canada.ca/en/health-canada/services/publications/healthy-living/addressing-moisture-mould-your-home.html">{{ __('Mold Guide Health Canada Link') }}</a></details>
        </div>
    </section>

    <section class="wd-section wd-soft" id="mold-services"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('Mold SEO Services Badge 2') }}</p><h2>{{ __('Mold SEO Services Title') }}</h2></div><p>{{ __('Mold SEO Services Lead') }}</p></div>
        <div class="wd-reasons">@foreach(range(1,6) as $service)<article><span class="wd-mini-number">0{{ $service }}</span><h3>{{ __('Mold SEO Service Card '.$service.' Title') }}</h3><p>{{ __('Mold SEO Service Card '.$service.' Text') }}</p></article>@endforeach</div>
        @include('partials.restoration-contact-cta', ['message' => __('MD Services Help'), 'buttonLabel' => __('Mold Guide DIY CTA')])
    </div></section>

    <section class="wd-section" id="mold-process"><div class="container wd-process-grid">
        <div class="wd-section-intro"><p class="wd-eyebrow">{{ __('WD What Happens Next') }}</p><h2>{{ __('Mold 1-16') }}</h2><p>{{ __('MD Process Intro') }}</p><a class="wd-text-link" href="#contact-form-section">{{ __('Mold Guide DIY CTA') }} <span aria-hidden="true">↗</span></a></div>
        <ol class="wd-process-list">
            @foreach(range(17,27,2) as $step)<li><span class="wd-step-number">0{{ $loop->iteration }}</span><details @if($loop->first) open @endif><summary><h3>{{ __('Mold 1-'.$step) }}</h3></summary><p>{{ __('Mold 1-'.($step+1)) }}</p></details></li>@endforeach
            <li><span class="wd-step-number">07</span><details><summary><h3>{{ __('MD Drying Step') }}</h3></summary><p>{{ __('Mold Process Step4 Text') }}</p></details></li>
            <li><span class="wd-step-number">08</span><details><summary><h3>{{ __('Restoration') }}</h3></summary><p>{{ __('Mold 1-29') }}</p></details></li>
        </ol>
    </div></section>

    <section class="wd-section wd-dark" id="mold-gallery"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('MD Photo Label') }}</p><h2>{{ __('MD Gallery Title') }}</h2></div><p>{{ __('MD Gallery Intro') }}</p></div>
        @include('partials.restoration-gallery', ['projectImages' => $projectImages])
        @include('partials.restoration-contact-cta', ['message' => __('MD Gallery Help'), 'buttonLabel' => __('Mold Guide DIY CTA')])
    </div></section>

    <section class="wd-section" id="mold-team"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('Mold About Title') }}</p><h2>{{ __('Mold About Subtitle') }}</h2></div><p>{{ __('Mold About Body 1') }}</p></div>
        <div class="wd-three-columns">@foreach(range(1,3) as $item)<article><h3>{{ __('Mold Hero Card '.$item.' Title') }}</h3><p>{{ __('Mold Hero Card '.$item.' Text') }}</p></article>@endforeach</div>
        <p class="md-team-note">{{ __('Mold About Body 2') }}</p>
    </div></section>
    @include('partials.google-reviews', [
        'reviewKeys' => ['vancity-barbershop', 'k-c'],
        'reviewSectionTitle' => __('Google Reviews Mold Title'),
        'reviewSectionLead' => __('Google Reviews Mold Lead'),
        'reviewSectionClass' => 'wd-soft',
    ])

    <section class="wd-section" id="mold-cost-timeline"><div class="container">
        <div class="wd-split">
            <div><p class="wd-eyebrow">{{ __('Mold SEO Cost Badge') }}</p><h2>{{ __('Mold SEO Cost Title') }}</h2><p>{{ __('Mold SEO Cost Lead') }}</p><ul class="wd-checklist">@foreach(range(1,4) as $item)<li>{{ __('Mold SEO Cost Factor '.$item) }}</li>@endforeach</ul><h3>{{ __('Mold SEO Estimate Title') }}</h3><p>{{ __('Mold SEO Estimate Text') }}</p><a href="#contact-form-section" class="wd-button wd-button-primary">{{ __('Mold Guide DIY CTA') }} <span aria-hidden="true">↓</span></a></div>
            <div class="md-timeline"><p class="wd-eyebrow">{{ __('Mold SEO Timeline Badge') }}</p><h2>{{ __('Mold SEO Timeline Title') }}</h2><p>{{ __('MD Timeline Note') }}</p><ol class="md-timeline-list">@foreach(range(1,4) as $item)<li><h3>{{ __('Mold SEO Timeline Step '.$item.' Title') }}</h3><p>{{ __('Mold SEO Timeline Step '.$item.' Text') }}</p></li>@endforeach</ol></div>
        </div>
        <div class="wd-insurance"><div><p class="wd-eyebrow">{{ __('Mold SEO Insurance Title') }}</p><h2>{{ __('MD Insurance Title') }}</h2><p>{{ __('MD Insurance Text') }}</p></div><ul class="wd-checklist">@foreach(range(1,3) as $item)<li>{{ __('Mold Block2 Assurance '.$item) }}</li>@endforeach</ul></div>
    </div></section>

    <section class="wd-section wd-soft" id="mold-causes-signs"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('Mold Guide Nav Causes') }}</p><h2>{{ __('Mold SEO Title') }}</h2></div><p>{{ __('Mold SEO Intro') }}</p></div>
        <div class="wd-causes-grid"><figure class="wd-section-photo"><img src="{{ asset($projectImages[2]['src']) }}" alt="{{ $projectImages[2]['alt'] }}" width="1920" height="1080" loading="lazy" decoding="async"></figure><div><h3>{{ __('Mold SEO Causes Title') }}</h3><p>{{ __('Mold SEO Causes Text') }}</p><ul class="wd-list">@foreach(range(1,4) as $item)<li>{{ __('Mold SEO Cause '.$item) }}</li>@endforeach</ul></div><div><h3>{{ __('Mold SEO Signs Title') }}</h3><p>{{ __('Mold SEO Signs Text') }}</p><ul class="wd-list">@foreach(range(1,4) as $item)<li>{{ __('Mold SEO Sign '.$item) }}</li>@endforeach</ul></div></div>
        <div class="wd-equipment"><h2>{{ __('Mold 1-10') }}</h2><p class="wd-measure">{{ __('Mold 1-11') }}</p><p class="wd-measure">{{ __('Mold Extra Hides Text') }}</p><ul class="wd-equipment-list">@foreach(['Mold 1-12','Mold 1-13','Mold 1-68','Mold Extra Sources Text'] as $item)<li><i class="bi bi-check2" aria-hidden="true"></i>{{ __($item) }}</li>@endforeach</ul></div>
        @include('partials.restoration-contact-cta', ['message' => __('MD Signs Help'), 'buttonLabel' => __('Mold Guide DIY CTA')])
    </div></section>

    <section class="wd-section" id="mold-types-testing"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('Mold Guide Types Badge') }}</p><h2>{{ __('Mold Guide Types Title') }}</h2></div><p>{{ __('Mold Guide Types Lead') }}</p></div>
        <div class="wd-safety-note"><i class="bi bi-info-circle" aria-hidden="true"></i><p>{{ __('Mold Guide Types Note') }}</p></div>
        <div class="wd-three-columns">@foreach(range(1,3) as $type)<article><h3>{{ __('Mold Guide Type '.$type.' Title') }}</h3><p>{{ __('Mold Guide Type '.$type.' Text') }}</p></article>@endforeach</div>
        <p class="md-team-note"><strong>{{ __('Mold Guide Moisture Label') }}.</strong> {{ __('Mold Guide Moisture Text') }}</p>
        <a class="wd-text-link" href="https://www.canada.ca/en/health-canada/services/publications/healthy-living/addressing-moisture-mould-your-home.html">{{ __('Mold Guide Health Canada Link') }}</a>
        <div class="wd-equipment"><p class="wd-eyebrow">{{ __('Mold 1-50-badge2') }}</p><h2>{{ __('Mold 1-50') }}</h2><p class="wd-measure">{{ __('MD Fogging Intro') }}</p>
            <details class="wd-disclosure"><summary><h3>{{ __('Mold 1-54') }}</h3></summary><p>{{ __('Mold 1-55') }}</p><ul class="wd-checklist">@foreach(range(59,61) as $item)<li>{{ __('Mold 1-'.$item) }}</li>@endforeach</ul></details>
        </div>
    </div></section>

    <section class="wd-section wd-soft" id="mold-service-areas"><div class="container wd-intro-grid">
        <div><p class="wd-eyebrow">{{ __('MD Local Label') }}</p><h2>{{ __('Mold Extra Local Title') }}</h2><p>{{ __('Mold Extra Local Lead') }}</p><p>{{ __('Mold Extra Local Body') }}</p></div>
        <div><h3>{{ __('Mold Extra Areas Title') }}</h3><ul class="md-area-list">@foreach(['Downtown','Kitsilano','Mount Pleasant','East Vancouver','Point Grey','South Vancouver','West End','False Creek','North Vancouver','West Vancouver','Burnaby','Richmond','New Westminster','Coquitlam','Surrey'] as $area)<li>{{ __('Mold Extra Location '.$area) }}</li>@endforeach</ul><p class="wd-small">{{ __('Mold About SEO Line') }}</p></div>
    </div></section>

    <section class="wd-section" id="faq"><div class="container wd-faq-grid">
        <div><p class="wd-eyebrow">{{ __('WD Clear Answers') }}</p><h2>{{ __('Frequently Asked Questions') }}</h2><p>{{ __('MD FAQ Intro') }}</p><a href="#contact-form-section" class="wd-text-link">{{ __('Mold Guide DIY CTA') }} <span aria-hidden="true">↓</span></a></div>
        <div class="wd-faq-list">@foreach($moldFaqItems as $faq)<details class="wd-disclosure" @if($loop->first) open @endif><summary><h3>{{ $faq['question'] }}</h3></summary><p>{{ $faq['answer'] }}</p></details>@endforeach</div>
    </div></section>
    @include('partials.contact-form', [
        'source' => __('Contact Form Source Mold'),
        'title' => __('Contact Form Mold Title'),
        'subtitle' => __('Contact Form Mold Subtitle'),
    ])
    <section class="wd-section" id="mold-guides">
        <div class="container">
            <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('WD Knowledge') }}</p><h2>{{ __('MD Related Guides') }}</h2></div><a href="{{ route('blog', ['lang' => app()->getLocale()]) }}" class="wd-text-link">{{ __('Blog') }} <span aria-hidden="true">↗</span></a></div>
            @if(app()->getLocale() === 'zh')<p class="wd-small">{{ __('Selected Guides English Note') }}</p>@endif
            <div class="wd-guide-links">
                <a href="/en/blog/72/bc-homeowners-need-to-know-insurance" hreflang="en" lang="en">What BC Homeowners Need to Know About Mold Coverage in Their Insurance Policy <span aria-hidden="true">↗</span></a>
                <a href="/en/blog/69/mold-removal-canada-costs-insurance" hreflang="en" lang="en">Mold Removal in Canada: Costs, Insurance, and Permanent Solutions <span aria-hidden="true">↗</span></a>
                <a href="/en/blog/27/10-warning-signs-of-mold-toxicity-in-canada" hreflang="en" lang="en">10 Warning Signs of Mold Toxicity in canada <span aria-hidden="true">↗</span></a>
                <a href="/en/blog/131/how-remove-small-mold-yourself-home" hreflang="en" lang="en">How to Remove Small Mold Yourself Safely at Home <span aria-hidden="true">↗</span></a>
                <a href="/en/blog/135/mold-around-toilet-bathroom-ceiling" hreflang="en" lang="en">How to Get Rid of Mold Around the Toilet and Bathroom Ceiling <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>
    @include('partials.ai-trust-links')
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/restoration-service.js') }}" defer></script>
@endsection
