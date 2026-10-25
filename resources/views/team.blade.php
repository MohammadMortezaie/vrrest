@extends('layouts.app')

@section('header')
{!! seo($SEOData) !!}
<link rel="stylesheet" href="{{ asset('css/company-pages.css') }}">
@endsection

@section('content')
<div class="company-page team-page">
    <section class="company-hero team-hero">
        <div class="container">
            <div class="company-hero-grid">
                <div class="company-hero-copy">
                    <span class="company-kicker"><i class="bi bi-people-fill" aria-hidden="true"></i>{{ __('Team Kicker') }}</span>
                    <h1>{{ __('teamheading') }}</h1>
                    <strong class="team-hero-subtitle">{{ __('teamsubheading') }}</strong>
                    <p>{{ __('teamdescription') }}</p>
                    <div class="company-hero-actions">
                        <a class="company-button company-button-primary" href="{{ route('contact', ['lang' => app()->getLocale()]) }}">{{ __('Team Contact Button') }}<i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
                        <a class="company-button company-button-secondary" href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>{{ __('HP Call') }}</a>
                    </div>
                </div>
                <div class="team-hero-visual" aria-hidden="true">
                    <img class="team-hero-main" src="{{ asset('img/team/sasan-ghanbari.webp') }}" alt="">
                    <img class="team-hero-small team-hero-small-one" src="{{ asset('img/team/saman-ghanbari.webp') }}" alt="">
                    <img class="team-hero-small team-hero-small-two" src="{{ asset('img/team/milad-mohammadi.webp') }}" alt="">
                    <span class="team-hero-mark"><i class="bi bi-shield-check" aria-hidden="true"></i>{{ __('Team Local Leadership') }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="team-members" aria-labelledby="team-members-title">
        <div class="container">
            <div class="company-section-head">
                <span>{{ __('Team Members Kicker') }}</span>
                <h2 id="team-members-title">{{ __('Team Members Title') }}</h2>
                <p>{{ __('Team Members Text') }}</p>
            </div>
            <div class="team-member-grid">
                <article class="team-member-card">
                    <div class="team-member-photo"><img src="{{ asset('img/team/sasan-ghanbari.webp') }}" alt="Sasan Ghanbari, Founder and CEO" width="300" height="300"></div>
                    <div class="team-member-copy"><span>01</span><h3>Sasan Ghanbari</h3><p>{{ __('Team Role Sasan') }}</p></div>
                </article>
                <article class="team-member-card">
                    <div class="team-member-photo"><img src="{{ asset('img/team/saman-ghanbari.webp') }}" alt="Saman Ghanbari, Restoration and Logistics Manager" width="300" height="300"></div>
                    <div class="team-member-copy"><span>02</span><h3>Saman Ghanbari</h3><p>{{ __('Team Role Saman') }}</p></div>
                </article>
                <article class="team-member-card">
                    <div class="team-member-photo"><img src="{{ asset('img/team/moe-ghanbari.webp') }}" alt="Moe Ghanbari, Structural Engineer" width="1280" height="1280" loading="lazy"></div>
                    <div class="team-member-copy"><span>04</span><h3>Moe Ghanbari</h3><p>{{ __('Team Role Moe Ghanbari') }}</p></div>
                </article>
                <article class="team-member-card">
                    <div class="team-member-photo"><img src="{{ asset('img/team/moe-mortezaei.webp') }}" alt="Moe Mortezaei, IT and Web Developer" width="900" height="900" loading="lazy"></div>
                    <div class="team-member-copy"><span>05</span><h3>Moe Mortezaei</h3><p>{{ __('Team Role Moe Mortezaei') }}</p></div>
                </article>
                <article class="team-member-card">
                    <div class="team-member-photo"><img src="{{ asset('img/team/nirvana-asadi.webp') }}" alt="Nirvana Asadi, Project Coordinator" width="900" height="900" loading="lazy"></div>
                    <div class="team-member-copy"><span>06</span><h3>Nirvana Asadi</h3><p>{{ __('Team Role Nirvana') }}</p></div>
                </article>
            </div>
        </div>
    </section>

    <section class="team-expertise" aria-labelledby="team-expertise-title">
        <div class="container">
            <div class="team-expertise-grid">
                <div>
                    <span class="company-kicker company-kicker-dark"><i class="bi bi-patch-check-fill" aria-hidden="true"></i>{{ __('Team Expertise Kicker') }}</span>
                    <h2 id="team-expertise-title">{{ __('expertiseheading') }}</h2>
                </div>
                <div>
                    <p>{{ __('expertisedescription') }}</p>
                    <div class="team-skill-list">
                        <span><i class="bi bi-check2" aria-hidden="true"></i>{{ __('Team Skill Emergency') }}</span>
                        <span><i class="bi bi-check2" aria-hidden="true"></i>{{ __('Team Skill Communication') }}</span>
                        <span><i class="bi bi-check2" aria-hidden="true"></i>{{ __('Team Skill Reconstruction') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-cta">
        <div class="container">
            <div>
                <span>{{ __('Team CTA Kicker') }}</span>
                <h2>{{ __('Team CTA Title') }}</h2>
            </div>
            <a class="company-button company-button-primary" href="{{ route('contact', ['lang' => app()->getLocale()]) }}">{{ __('Contact Us') }}<i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
        </div>
    </section>
</div>
@endsection
