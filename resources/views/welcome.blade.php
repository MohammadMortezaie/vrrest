@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/restoration-service.css') }}" rel="stylesheet">
    <link href="{{ asset('css/restoration-home.css') }}" rel="stylesheet">
@endsection

@section('content')
@php
    $lang = app()->getLocale();
    $specialties = [__('waterDamage'), __('fireDamage'), __('moldRemediation'), __('SpecialtyCleaning'), __('construction')];
    // Preserve the original illustrated assets and their .clients hover behaviour.
    $services = [
        ['waterdamage', 'template11.png', 'waterDamage', 'Restoration', 'bi-droplet-fill'],
        ['fireDamage', 'template10.png', 'fireDamage', 'Restoration', 'bi-fire'],
        ['moldRemediation', 'template9.png', 'moldRemediation', 'Services', 'bi-shield-check'],
        ['specialtyCleaning', 'template1.png', 'SpecialtyCleaning', 'Restoration', 'bi-stars'],
        ['generalCleaning', 'template2.png', 'GeneralCleaning', 'Services', 'bi-house-check'],
        ['commercialServices', 'template3.png', 'commercial', 'Services', 'bi-buildings'],
        ['residentialServices', 'template5.png', 'Residential', 'Services', 'bi-house-heart'],
        ['construction', 'template6.png', 'construction', 'Services', 'bi-hammer'],
    ];
    $projectImages = [
        ['src' => 'img/water-damage/emergency-water-damage-drying-vancouver.webp', 'alt' => __('HP Project 1')],
        ['src' => 'img/water-damage/water-damage-restoration-project-vancouver.webp', 'alt' => __('HP Project 2')],
        ['src' => 'img/water-damage/structural-drying-equipment-vancouver-home.webp', 'alt' => __('HP Project 3')],
        ['src' => 'img/water-damage/vancouver-water-damage-exposed-subfloor-drying.webp', 'alt' => __('HP Project 4')],
        ['src' => 'img/water-damage/vancouver-water-damage-industrial-dehumidifier.webp', 'alt' => __('HP Project 5')],
    ];
    $locations = [
        ['West Vancouver', '636 Clyde Ave, West Vancouver, BC', 'https://share.google/r4scdAGmnOKdOX6NW'],
        ['North Vancouver', '#112, 828 Harbourside Dr, North Vancouver, BC', 'https://share.google/r4scdAGmnOKdOX6NW'],
        ['Burnaby', '4720 Lougheed Hwy, Burnaby, BC', 'https://share.google/r4scdAGmnOKdOX6NW'],
        ['Coquitlam', '#211, 3030 Lincoln Ave, Coquitlam, BC', 'https://share.google/r4scdAGmnOKdOX6NW'],
    ];
@endphp
<div class="restoration-service-page restoration-home">
    <section class="hp-hero" aria-labelledby="home-title">
        <figure class="hp-hero-photo">
            <img src="{{ asset('img/hero-bg3.jpeg') }}" alt="{{ __('HP Photo Alt') }}" width="2560" height="1706" loading="eager" fetchpriority="high" decoding="async">
        </figure>
        <div class="hp-hero-shade" aria-hidden="true"></div>
        <div class="container hp-hero-stage">
            <div class="hp-hero-copy">
                <p class="hp-location" data-home-reveal><i class="bi bi-geo-alt" aria-hidden="true"></i>{{ __('HP Eyebrow') }}</p>
                <h1 id="home-title" data-home-reveal><span>VR PLUS</span>{{ __('HP Brand Restoration') }}</h1>
                <div class="hp-specialty" data-home-reveal>
                    <span class="hp-specialty-label">{{ __('HP Specialists') }}</span>
                    <div class="hp-type-row">
                        <p class="hp-type-line" aria-hidden="true"><span data-typewriter data-words="{{ json_encode($specialties) }}">{{ __('waterDamage') }}</span><span class="hp-type-cursor" aria-hidden="true">|</span></p>
                        <button type="button" class="hp-motion-toggle" aria-label="{{ __('HP Pause Motion') }}" data-pause-label="{{ __('HP Pause Motion') }}" data-play-label="{{ __('HP Play Motion') }}" aria-pressed="false" hidden><i class="bi bi-pause-fill" aria-hidden="true"></i></button>
                    </div>
                </div>
                <p class="hp-hero-lead" data-home-reveal>{{ __('HP Hero Lead V2') }}</p>
                <div class="hp-actions" data-home-reveal>
                    <a class="hp-button hp-button-primary" href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>{{ __('HP Call') }}<span aria-hidden="true">↗</span></a>
                    <a class="hp-button hp-button-glass" href="#contact-form-section">{{ __('HP Request') }}<span aria-hidden="true">→</span></a>
                </div>
                <p class="hp-hero-assurance" data-home-reveal><i class="bi bi-shield-check" aria-hidden="true"></i>{{ __('HP Hero Assurance') }}</p>
            </div>
            <div class="hp-availability" data-home-reveal>
                <p class="hp-status"><span class="wd-status-dot" aria-hidden="true"></span>{{ __('WD Emergency') }}</p>
                <strong>24<span>/</span>7</strong>
                <p>{{ __('HP Hero Note') }}</p>
                <a href="tel:+16048003900">{{ __('HP Talk To Us') }} <span aria-hidden="true">↗</span></a>
            </div>
        </div>
        <div class="hp-hero-bottom">
            <nav class="container hp-quicklinks" aria-label="{{ __('HP Explore') }}">
                <a class="hp-scroll-link" href="#services"><span class="hp-scroll-arrow" aria-hidden="true">↓</span>{{ __('HP Explore') }}</a>
                <span class="hp-hero-brandline">{{ __('HP Homes Businesses') }}</span>
                <a href="#our-process">{{ __('HP Our Process') }} <span aria-hidden="true">↗</span></a>
                <a href="#google-reviews">{{ __('HP Customer Stories') }} <span aria-hidden="true">↗</span></a>
            </nav>
        </div>
    </section>

    <section id="services" class="hp-section hp-services clients" aria-labelledby="services-title">
        <div class="container">
            <div class="hp-section-heading" data-home-reveal>
                <div><p class="hp-kicker">{{ __('HP Services Eyebrow') }}</p><h2 id="services-title">{{ __('HP Services Title') }}</h2></div>
                <p>{{ __('HP Services Lead') }}</p>
            </div>
            <div class="hp-service-stage">
                <button type="button" class="hp-service-nav hp-service-prev" aria-label="{{ __('HP Previous Services') }}" hidden><span aria-hidden="true">←</span></button>
                <div class="swiper hp-service-carousel">
                    <div class="swiper-wrapper">
                    @foreach ($services as [$serviceRoute, $image, $label, $category, $icon])
                        <div class="swiper-slide">
                            <a href="{{ route($serviceRoute, ['lang' => $lang]) }}" class="text-decoration-none">
                                <div class="card text-center border-0">
                                    <div class="card-body">
                                        <div class="card-card-avatar"><img src="{{ asset('img/'.$image) }}" alt="{{ __($label) }}" width="180" height="180" loading="lazy" decoding="async"></div>
                                        <div class="hp-service-card-line">
                                            <span class="hp-service-card-icon"><i class="bi {{ $icon }}" aria-hidden="true"></i></span>
                                            <h3 class="card-title h6">{{ __($label) }}</h3>
                                            <span class="hp-service-card-arrow" aria-hidden="true">↗</span>
                                        </div>
                                        <div class="text-muted">{{ __($category) }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
                <button type="button" class="hp-service-nav hp-service-next" aria-label="{{ __('HP Next Services') }}" hidden><span aria-hidden="true">→</span></button>
            </div>
            <div class="hp-service-footer">
                <a class="hp-link" href="{{ route('seismicRetrofitPlanSingleFamily', ['lang' => $lang]) }}">{{ __('HP Seismic') }} <span aria-hidden="true">↗</span></a>
            </div>
        </div>
        <div class="hp-service-marquee" aria-label="{{ __('HP All Services') }}">
            <div class="hp-marquee-track">
                @foreach ([0, 1] as $copy)
                    <div class="hp-marquee-group" @if($copy) aria-hidden="true" @endif>
                        @foreach ($services as [$serviceRoute, $image, $label, $category, $icon])
                            <a href="{{ route($serviceRoute, ['lang' => $lang]) }}" @if($copy) tabindex="-1" @endif><i class="bi {{ $icon }}" aria-hidden="true"></i><span>{{ __($label) }}</span><b aria-hidden="true">↗</b></a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.restoration-credentials')

    <section class="hp-section hp-feature" id="restoration-work">
        <div class="container hp-feature-grid">
            <div class="hp-feature-copy" data-home-reveal>
                <p class="hp-kicker">{{ __('HP Feature Eyebrow') }}</p>
                <h2>{{ __('HP Feature Title') }}</h2>
                <p>{{ __('HP Feature Lead') }}</p>
                <ul class="hp-checklist">
                    @foreach ([1, 2, 3] as $number)
                        <li><i class="bi bi-check2" aria-hidden="true"></i>{{ __('HP Feature Bullet '.$number) }}</li>
                    @endforeach
                </ul>
                <a class="hp-link" href="{{ route('waterdamage', ['lang' => $lang]) }}">{{ __('HP Feature Link') }} <span aria-hidden="true">↗</span></a>
                <div class="hp-feature-help"><a class="hp-button hp-button-primary" href="#contact-form-section">{{ __('HP Request') }} <span aria-hidden="true">↗</span></a></div>
            </div>
            <div class="hp-projects" data-home-reveal>
                <div class="hp-project-mosaic">
                    @foreach ($projectImages as $image)
                        <figure>
                            <img src="{{ asset($image['src']) }}" alt="{{ $image['alt'] }}" width="960" height="1280" loading="lazy" decoding="async">
                            <figcaption>{{ $image['alt'] }}</figcaption>
                        </figure>
                    @endforeach
                </div>
                <p class="hp-project-note"><span>{{ str_pad(count($projectImages), 2, '0', STR_PAD_LEFT) }}</span>{{ __('HP Project Collection') }}</p>
            </div>
        </div>
    </section>

    <section id="our-process" class="hp-section hp-process">
        <div class="container hp-process-grid">
            <div class="hp-process-intro" data-home-reveal>
                <p class="hp-kicker">{{ __('HP Process Eyebrow') }}</p>
                <h2>{{ __('HP Process Title') }}</h2>
                <p>{{ __('HP Process Lead') }}</p>
                <a class="hp-button hp-button-primary" href="tel:+16048003900">{{ __('HP Call') }} <span aria-hidden="true">↗</span></a>
            </div>
            <ol class="hp-steps">
                @foreach ([1, 2, 3] as $step)
                    <li data-home-reveal><span class="hp-step-number" aria-hidden="true">0{{ $step }}</span><div><h3>{{ __('HP Step '.$step.' Title') }}</h3><p>{{ __('HP Step '.$step.' Text') }}</p></div></li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="hp-section hp-about" id="about-vr">
        <div class="container hp-about-grid">
            <figure data-home-reveal><img src="{{ asset('img/about.jpeg') }}" alt="{{ __('HP About Alt') }}" width="1000" height="1000" loading="lazy" decoding="async"><figcaption>VR PLUS <span>RESTORATION</span></figcaption></figure>
            <div data-home-reveal>
                <p class="hp-kicker">{{ __('HP About Eyebrow') }}</p>
                <h2>{{ __('HP About Title') }}</h2>
                <p>{{ __('HP About Lead') }}</p>
                <div class="hp-values">
                    @foreach ([1, 2] as $value)
                        <div><h3>{{ __('HP About '.$value.' Title') }}</h3><p>{{ __('HP About '.$value.' Text') }}</p></div>
                    @endforeach
                </div>
                <a class="hp-link" href="{{ route('about', ['lang' => $lang]) }}">{{ __('HP About Link') }} <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>

    @include('partials.google-reviews', [
        'reviewKeys' => ['garnik-giloyan', 'vancity-barbershop', 'm-a'],
        'reviewSectionTitle' => __('Google Reviews Home Title'),
        'reviewSectionLead' => __('Google Reviews Home Lead'),
        'reviewSectionClass' => 'hp-reviews',
    ])

    <section class="hp-section hp-areas" id="service-areas">
        <div class="container">
            <div class="hp-area-intro" data-home-reveal><p class="hp-kicker">{{ __('HP Areas Eyebrow') }}</p><h2>{{ __('HP Areas Title') }}</h2><p>{{ __('HP Areas Lead') }}</p></div>
            <div class="hp-location-grid" data-home-reveal>
                @foreach ($locations as [$city, $address, $map])
                    <a class="hp-location-card" href="{{ $map }}" target="_blank" rel="noopener noreferrer">
                        <span class="hp-map-icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></span>
                        <span><strong>{{ $city }}</strong><small>{{ $address }}</small></span>
                        <span class="hp-map-arrow" aria-hidden="true">↗</span>
                    </a>
                @endforeach
            </div>
            <div class="hp-area-foot" data-home-reveal>
                <a class="hp-link" href="{{ route('localServices', ['lang' => $lang]) }}">{{ __('HP Areas Link') }} <span aria-hidden="true">↗</span></a>
                <ul class="hp-city-list" aria-label="{{ __('HP Service Areas') }}">
                @foreach (['Vancouver', 'West Vancouver', 'North Vancouver', 'Burnaby', 'Coquitlam', 'Port Coquitlam', 'Richmond', 'Surrey', 'New Westminster', 'Langley', 'Maple Ridge', 'Abbotsford', 'Chilliwack', 'Mission', 'Hope'] as $city)
                    <li><i class="bi bi-check2" aria-hidden="true"></i>{{ $city }}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="hp-section hp-faq" id="faq">
        <div class="container hp-faq-grid">
            <div data-home-reveal><p class="hp-kicker">{{ __('HP FAQ Eyebrow') }}</p><h2>{{ __('HP FAQ Title') }}</h2><p>{{ __('HP FAQ Lead') }}</p><a class="hp-link" href="#contact-form-section">{{ __('HP Request') }} <span aria-hidden="true">↗</span></a></div>
            <div data-home-reveal>
                @foreach ([1, 2] as $number)
                    <details @if($loop->first) open @endif><summary>{{ __('HP FAQ '.$number.' Q') }}<span aria-hidden="true">+</span></summary><p>{{ __('HP FAQ '.$number.' A') }}</p></details>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.contact-form', [
        'source' => __('Contact Form Source Home'),
        'title' => __('Contact Form Home Title'),
        'subtitle' => __('Contact Form Home Subtitle'),
    ])

    <section class="hp-section hp-journal" id="restoration-guides">
        <div class="container">
            <div class="hp-section-heading" data-home-reveal>
                <div><p class="hp-kicker">{{ __('HP Guides Eyebrow') }}</p><h2>{{ __('HP Guides Title') }}</h2></div>
                <div class="hp-journal-actions">
                    <a class="hp-link" href="{{ route('blog', ['lang' => $lang]) }}">{{ __('HP Guides Link') }} <span aria-hidden="true">↗</span></a>
                    <div class="hp-journal-controls" aria-label="{{ __('HP Guides Controls') }}">
                        <button class="hp-journal-prev" type="button" aria-label="{{ __('HP Guides Previous') }}" hidden><i class="bi bi-arrow-left" aria-hidden="true"></i></button>
                        <button class="hp-journal-next" type="button" aria-label="{{ __('HP Guides Next') }}" hidden><i class="bi bi-arrow-right" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="swiper hp-journal-carousel" data-home-reveal>
                <div class="swiper-wrapper">
                @forelse ($blog as $post)
                    @php
                        $postUrl = route('blog.post', ['lang' => $lang, 'blog' => $post->id, 'slug' => $post->slug]);
                        $postImage = $post->image
                            ? (str_starts_with($post->image, 'http') ? $post->image : asset(ltrim($post->image, '/')))
                            : asset('img/water-damage.jpeg');
                    @endphp
                    <div class="swiper-slide">
                        <article class="hp-journal-card">
                            <a class="hp-journal-image" href="{{ $postUrl }}" tabindex="-1" aria-hidden="true">
                                <img src="{{ $postImage }}" alt="" loading="lazy" decoding="async">
                                <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            </a>
                            <div class="hp-journal-card-body">
                                <p>{{ __('HP Guides Latest') }}</p>
                                <h3><a href="{{ $postUrl }}">{{ $post->title }}</a></h3>
                                <div>{{ \Illuminate\Support\Str::limit(strip_tags($post->subtitle ?? ''), 120) }}</div>
                                <a class="hp-journal-read" href="{{ $postUrl }}">{{ __('HP Guides Read') }} <span aria-hidden="true">↗</span></a>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="swiper-slide"><p>{{ __('HP Guides Empty') }}</p></div>
                @endforelse
                </div>
            </div>
        </div>
    </section>
    @include('partials.ai-trust-links')
</div>
@endsection

@section('scripts')
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/restoration-service.js') }}" defer></script>
    <script src="{{ asset('js/restoration-home.js') }}" defer></script>
@endsection
