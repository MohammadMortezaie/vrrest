@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <link rel="stylesheet" href="{{ asset('css/restoration-service.css') }}">
    @php
        $fireFaqItems = [];
        foreach (range(41, 49, 2) as $question) {
            $fireFaqItems[] = ['question' => __('Fire Damage 1-'.$question), 'answer' => __('Fire Damage 1-'.($question + 1))];
        }
        foreach (['Cost', 'Time', 'Odor'] as $question) {
            $fireFaqItems[] = ['question' => __('FD FAQ '.$question.' Question'), 'answer' => __('FD FAQ '.$question.' Answer')];
        }
        $firePageUrl = 'https://vrrestoration.ca/'.app()->getLocale().'/fire-damage';
        $fireSchemas = [
            [
                '@context' => 'https://schema.org', '@type' => 'Service',
                'name' => trim(__('Fire Damage 1-1')), 'serviceType' => __('FD Service Type'),
                'description' => __('FD Hero Intro'), 'url' => $firePageUrl,
                'provider' => ['@type' => 'LocalBusiness', 'name' => 'VR PLUS Restoration', 'url' => 'https://vrrestoration.ca', 'telephone' => '+1-604-800-3900'],
                'areaServed' => ['Vancouver', 'Greater Vancouver', 'Metro Vancouver', 'North Shore', 'Downtown', 'Sea to Sky', 'Tri-Cities', 'Fraser Valley', 'Howe Sound'],
            ],
            [
                '@context' => 'https://schema.org', '@type' => 'FAQPage',
                'mainEntity' => array_map(static fn ($faq) => [
                    '@type' => 'Question', 'name' => $faq['question'],
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['answer']],
                ], $fireFaqItems),
            ],
            [
                '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => __('Home'), 'item' => 'https://vrrestoration.ca/'.app()->getLocale()],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => __('fireDamage'), 'item' => $firePageUrl],
                ],
            ],
        ];
    @endphp
    @foreach($fireSchemas as $schema)
        <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endforeach
@endsection

@section('content')
    @php
        $projectImages = [
            ['src' => 'img/fire-damage.jpeg', 'alt' => __('FD Photo Fire')],
            ['src' => 'img/water-damage/water-damage-repair-floor-removal-vancouver.webp', 'alt' => __('FD Photo Drying')],
            ['src' => 'img/construction2.jpeg', 'alt' => __('FD Photo Rebuild')],
        ];
    @endphp
<div class="restoration-service-page fire-damage-page">
    <section class="wd-hero"><div class="container">
        <nav class="wd-breadcrumb" aria-label="{{ __('WD Breadcrumb') }}"><a href="{{ route('home2', ['lang' => app()->getLocale()]) }}">{{ __('Home') }}</a><span aria-hidden="true">/</span><span>{{ __('fireDamage') }}</span></nav>
        <div class="wd-hero-grid">
            <div class="wd-hero-copy">
                <p class="wd-eyebrow"><span class="wd-status-dot" aria-hidden="true"></span>{{ __('WD Emergency') }}</p>
                <h1>{{ __('Fire Damage 1-1') }}</h1>
                <p class="wd-hero-lead">{{ __('FD Hero Intro') }}</p>
                <div class="wd-actions"><a href="tel:+16048003900" class="wd-button wd-button-primary"><i class="bi bi-telephone" aria-hidden="true"></i>{{ __('WD Call') }} 604-800-3900</a><a href="#contact-form-section" class="wd-text-link">{{ __('FD Request Help') }} <span aria-hidden="true">↗</span></a></div>
                <p class="wd-hero-note">{{ __('WD Hero Note') }}</p>
                <p class="fd-emergency-note">{{ __('FD Emergency Note') }}</p>
            </div>
            <figure class="wd-hero-image"><img src="{{ asset($projectImages[0]['src']) }}" alt="{{ $projectImages[0]['alt'] }}" width="1200" height="675" loading="eager" fetchpriority="high"><figcaption><span class="wd-photo-label">{{ __('FD Photo Label') }}</span><strong>{{ __('FD Photo Title') }}</strong><span>{{ __('FD Photo Detail') }}</span></figcaption></figure>
        </div>
    </div></section>
    @include('partials.restoration-credentials')
    <nav class="wd-jumpnav" aria-label="{{ __('FD Navigation') }}"><div class="container"><span>{{ __('Water Damage Quick Links Label') }}</span>
        <a href="#fire-safety">{{ __('FD Safety Label') }}</a><a href="#fire-services">{{ __('Water Damage Quick Link Services') }}</a><a href="#fire-process">{{ __('Water Damage Quick Link Process') }}</a><a href="#fire-gallery">{{ __('MD Photos') }}</a><a href="#fire-cost">{{ __('WD Cost Insurance') }}</a><a href="#faq">{{ __('Water Damage Quick Link FAQ') }}</a>
    </div></nav>

    <section class="wd-section wd-intro" id="fire-safety"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('FD Safety Label') }}</p><h2>{{ __('Fire Damage 1-41') }}</h2></div><p>{{ __('Fire Damage 1-42') }}</p></div>
        <div class="wd-three-columns">@foreach(range(1,3) as $item)<article><h3>{{ __('FD Safety '.$item.' Title') }}</h3><p>{{ __('FD Safety '.$item.' Text') }}</p></article>@endforeach</div>
        <details class="wd-disclosure fd-safety-details"><summary><h3>{{ __('What Not To DO') }}</h3></summary><ul class="wd-checklist">@foreach(range(16,24,2) as $item)<li><strong>{{ __('Fire Damage 1-'.$item) }}</strong> {{ __('Fire Damage 1-'.($item+1)) }}</li>@endforeach</ul></details>
        <a class="wd-text-link" href="https://www.redcross.ca/blog/2022/1/preparing-to-return-home-after-a-house-fire">{{ __('FD Safety Link') }}</a>
    </div></section>

    <section class="wd-section wd-soft" id="fire-services"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('FD Service Type') }}</p><h2>{{ __('FD Services Title') }}</h2></div><p>{{ __('Fire Damage 1-4') }}</p></div>
        <div class="wd-reasons">@foreach(range(1,6) as $item)<article><span class="wd-mini-number">0{{ $item }}</span><h3>{{ __('FD Service '.$item.' Title') }}</h3><p>{{ __('FD Service '.$item.' Text') }}</p></article>@endforeach</div>
        @include('partials.restoration-contact-cta', ['message' => __('FD Services Help'), 'buttonLabel' => __('FD Request Help')])
    </div></section>

    <section class="wd-section" id="fire-process"><div class="container wd-process-grid">
        <div class="wd-section-intro"><p class="wd-eyebrow">{{ __('WD What Happens Next') }}</p><h2>{{ __('Fire Damage 1-26') }}</h2><p>{{ __('FD Process Intro') }}</p><a href="#contact-form-section" class="wd-text-link">{{ __('FD Request Help') }} <span aria-hidden="true">↗</span></a></div>
        <ol class="wd-process-list">
            @foreach(range(27,37,2) as $step)<li><span class="wd-step-number">0{{ $loop->iteration }}</span><details @if($loop->first) open @endif><summary><h3>{{ __('Fire Damage 1-'.$step) }}</h3></summary><p>{{ __('Fire Damage 1-'.($step+1)) }}</p></details></li>@endforeach
            <li><span class="wd-step-number">07</span><details><summary><h3>{{ __('Restoration') }}</h3></summary><p>{{ __('Fire Damage 1-39') }}</p></details></li>
            <li><span class="wd-step-number">08</span><details><summary><h3>{{ __('Water Damage 1-46') }}</h3></summary><p>{{ __('Fire Damage 1-40') }}</p></details></li>
        </ol>
    </div></section>

    <section class="wd-section wd-dark" id="fire-gallery"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('FD Photo Label') }}</p><h2>{{ __('FD Gallery Title') }}</h2></div><p>{{ __('FD Gallery Intro') }}</p></div>
        @include('partials.restoration-gallery', ['projectImages' => $projectImages])
        @include('partials.restoration-contact-cta', ['message' => __('FD Gallery Help'), 'buttonLabel' => __('FD Request Help')])
    </div></section>

    <section class="wd-section" id="fire-team"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">VR PLUS RESTORATION</p><h2>{{ __('Fire Damage 1-3-1') }}</h2></div><p>{{ __('Fire Damage 1-2') }}</p></div>
        <ul class="wd-equipment-list">@foreach(range(2,5) as $item)<li><i class="bi bi-check2" aria-hidden="true"></i>{{ __('Fire Damage 1-3-'.$item) }}</li>@endforeach</ul>
    </div></section>
    @include('partials.google-reviews', [
        'reviewKeys' => ['bobbidi-boo-cleaning', 'm-a'],
        'reviewSectionTitle' => __('Google Reviews Default Title'),
        'reviewSectionLead' => __('FD Reviews Intro'),
        'reviewSectionClass' => 'wd-soft',
    ])

    <section class="wd-section" id="fire-cost"><div class="container">
        <div class="wd-split">
            <div><p class="wd-eyebrow">{{ __('FD Cost Label') }}</p><h2>{{ __('FD FAQ Cost Question') }}</h2><p>{{ __('FD FAQ Cost Answer') }}</p><ul class="wd-checklist">@foreach(range(1,4) as $item)<li>{{ __('FD Cost Factor '.$item) }}</li>@endforeach</ul><a href="#contact-form-section" class="wd-button wd-button-primary">{{ __('FD Request Help') }} <span aria-hidden="true">↓</span></a></div>
            <div class="fd-timeline"><p class="wd-eyebrow">{{ __('FD Time Label') }}</p><h2>{{ __('FD FAQ Time Question') }}</h2><p>{{ __('FD FAQ Time Answer') }}</p><ol class="fd-timeline-list">@foreach(range(1,3) as $item)<li><h3>{{ __('FD Phase '.$item.' Title') }}</h3><p>{{ __('FD Phase '.$item.' Text') }}</p></li>@endforeach</ol></div>
        </div>
        <div class="wd-insurance"><div><p class="wd-eyebrow">{{ __('WD Cost Insurance') }}</p><h2>{{ __('FD Insurance Title') }}</h2><p>{{ __('FD Insurance Text') }}</p></div><ul class="wd-checklist">@foreach(range(1,3) as $item)<li>{{ __('FD Insurance '.$item) }}</li>@endforeach</ul></div>
    </div></section>

    <section class="wd-section wd-soft" id="fire-smoke-water"><div class="container">
        <div class="wd-section-heading"><div><p class="wd-eyebrow">{{ __('FD Beyond Flames') }}</p><h2>{{ __('FD Smoke Title') }}</h2></div><p>{{ __('FD Smoke Intro') }}</p></div>
        <div class="wd-three-columns">
            <article><h3>{{ __('FD Service 2 Title') }}</h3><p>{{ __('Fire Damage 1-36') }}</p></article>
            <article><h3>{{ __('FD Service 3 Title') }}</h3><p>{{ __('FD FAQ Odor Answer') }}</p></article>
            <article><h3>{{ __('FD Service 4 Title') }}</h3><p>{{ __('Fire Damage 1-34') }}</p><a class="wd-text-link" href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}">{{ __('waterDamage') }} <span aria-hidden="true">↗</span></a></article>
        </div>
        @include('partials.restoration-contact-cta', ['message' => __('FD Smoke Help'), 'buttonLabel' => __('FD Request Help')])
    </div></section>

    <section class="wd-section" id="fire-service-areas"><div class="container wd-intro-grid"><div><p class="wd-eyebrow">{{ __('MD Local Label') }}</p><h2>{{ __('Fire Damage 1-3-6') }}</h2></div><div><p>{{ __('Fire Damage 1-3-7') }}</p><ul class="fd-area-list">@foreach(['Vancouver','Greater Vancouver','Metro Vancouver','North Shore','Downtown','Sea to Sky','Tri-Cities','Fraser Valley','Howe Sound'] as $area)<li>{{ $area }}</li>@endforeach</ul></div></div></section>

    <section class="wd-section wd-soft" id="faq"><div class="container wd-faq-grid">
        <div><p class="wd-eyebrow">{{ __('WD Clear Answers') }}</p><h2>{{ __('Frequently Asked Questions') }}</h2><p>{{ __('FD FAQ Intro') }}</p><a href="#contact-form-section" class="wd-text-link">{{ __('FD Request Help') }} <span aria-hidden="true">↓</span></a></div>
        <div class="wd-faq-list">@foreach($fireFaqItems as $faq)<details class="wd-disclosure" @if($loop->first) open @endif><summary><h3>{{ $faq['question'] }}</h3></summary><p>{{ $faq['answer'] }}</p></details>@endforeach</div>
    </div></section>
    @include('partials.contact-form', [
        'source' => __('Contact Form Source Fire'),
        'title' => __('Contact Form Fire Title'),
        'subtitle' => __('Contact Form Fire Subtitle'),
    ])
    <section class="wd-section"><div class="container"><p class="wd-eyebrow">{{ __('WD Knowledge') }}</p><h2>{{ __('MD Related Title') }}</h2><div class="wd-guide-links">
        <a href="{{ route('waterdamage', ['lang' => app()->getLocale()]) }}">{{ __('waterDamage') }} <span aria-hidden="true">↗</span></a>
        <a href="{{ route('moldRemediation', ['lang' => app()->getLocale()]) }}">{{ __('moldRemediation') }} <span aria-hidden="true">↗</span></a>
        <a href="{{ route('construction', ['lang' => app()->getLocale()]) }}">{{ __('construction') }} <span aria-hidden="true">↗</span></a>
        <a href="{{ route('blog', ['lang' => app()->getLocale()]) }}">{{ __('Blog') }} <span aria-hidden="true">↗</span></a>
    </div></div></section>
    @include('partials.ai-trust-links')
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/restoration-service.js') }}" defer></script>
@endsection
