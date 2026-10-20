@extends('layouts.app')

@section('header')
{!! seo($SEOData) !!}
<link rel="stylesheet" href="{{ asset('css/company-pages.css') }}">
@endsection

@section('content')
<div class="company-page contact-page">
    <section class="company-hero contact-hero">
        <div class="container">
            <div class="company-hero-grid">
                <div class="company-hero-copy">
                    <span class="company-kicker"><i class="bi bi-broadcast-pin" aria-hidden="true"></i>{{ __('Contact Emergency Kicker') }}</span>
                    <h1>{{ __('contactheading') }}</h1>
                    <p>{{ __('Contact Hero Text') }}</p>
                    <div class="company-hero-actions">
                        <a class="company-button company-button-primary" href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>{{ __('HP Call') }}</a>
                        <a class="company-button company-button-secondary" href="#contact-form-section">{{ __('Contact Send Message') }}<i class="bi bi-arrow-down" aria-hidden="true"></i></a>
                    </div>
                    <div class="company-proof-row" aria-label="{{ __('Contact Service Facts') }}">
                        <span><strong>24/7</strong>{{ __('Contact Availability') }}</span>
                        <span><strong>4</strong>{{ __('Contact Local Offices') }}</span>
                        <span><strong>BC</strong>{{ __('Contact Service Area') }}</span>
                    </div>
                </div>
                <div class="company-hero-media">
                    <img src="{{ asset('img/water-damage/emergency-water-damage-drying-vancouver.webp') }}"
                        alt="{{ __('Contact Hero Image Alt') }}" width="1280" height="960">
                    <div class="company-media-note">
                        <i class="bi bi-lightning-charge-fill" aria-hidden="true"></i>
                        <span><strong>{{ __('Contact Fast Response') }}</strong>{{ __('Contact Fast Response Text') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-channels" aria-labelledby="contact-channels-title">
        <div class="container">
            <div class="company-section-head">
                <span>{{ __('Contact Direct Kicker') }}</span>
                <h2 id="contact-channels-title">{{ __('Contact Direct Title') }}</h2>
            </div>
            <div class="contact-channel-grid">
                <a class="contact-channel" href="tel:+16048003900">
                    <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                    <span><small>{{ __('contactcall_heading') }}</small><strong>604 800 3900</strong></span>
                    <i class="bi bi-arrow-up-right contact-channel-arrow" aria-hidden="true"></i>
                </a>
                <a class="contact-channel" href="mailto:info@vrrestoration.ca">
                    <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                    <span><small>{{ __('Contact Email Label') }}</small><strong>info@vrrestoration.ca</strong></span>
                    <i class="bi bi-arrow-up-right contact-channel-arrow" aria-hidden="true"></i>
                </a>
                <a class="contact-channel" href="https://www.linkedin.com/company/vr-plus-construction-and-restoration" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                    <span><small>{{ __('Contact Follow Label') }}</small><strong>VR Plus Restoration</strong></span>
                    <i class="bi bi-arrow-up-right contact-channel-arrow" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    @include('partials.contact-form', [
        'source' => __('Contact Form Source Contact'),
        'title' => __('Contact Form Contact Title'),
        'subtitle' => __('Contact Form Contact Subtitle'),
    ])

    @php
        $contactLocations = [
            ['West Vancouver', '636 Clyde Ave, West Vancouver, BC'],
            ['North Vancouver', '#112, 828 Harbourside Dr, North Vancouver, BC'],
            ['Burnaby', '4720 Lougheed Hwy, Burnaby, BC'],
            ['Coquitlam', '#211, 3030 Lincoln Ave, Coquitlam, BC'],
        ];
    @endphp
    <section class="contact-locations" aria-labelledby="contact-locations-title">
        <div class="container">
            <div class="company-section-head company-section-head-light">
                <span>{{ __('Contact Locations Kicker') }}</span>
                <h2 id="contact-locations-title">{{ __('Contact Locations Title') }}</h2>
                <p>{{ __('Contact Locations Text') }}</p>
            </div>
            <div class="contact-location-grid">
                @foreach ($contactLocations as [$city, $address])
                    <a class="contact-location-card" href="https://share.google/r4scdAGmnOKdOX6NW" target="_blank" rel="noopener noreferrer">
                        <span class="contact-location-icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></span>
                        <span><strong>{{ $city }}</strong><small>{{ $address }}</small></span>
                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                    </a>
                @endforeach
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZlFqpnfeNxRjioLAHd27DXnR2tVpFD4&amp;ehbc=2E312F"
                    title="{{ __('Contact Map Title') }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</div>
@endsection
