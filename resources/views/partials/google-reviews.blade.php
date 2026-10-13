@php
    $reviewKeys = $reviewKeys ?? array_keys(config('google_reviews.reviews', []));
    $allGoogleReviews = config('google_reviews.reviews', []);
    $googleReviews = array_values(array_filter(
        array_map(static fn ($key) => $allGoogleReviews[$key] ?? null, $reviewKeys)
    ));
    $googleReviewsProfileUrl = config('google_reviews.profile_url');
    $googleReviewsCount = config('google_reviews.review_count');
    $reviewSectionTitle = $reviewSectionTitle ?? __('Google Reviews Default Title');
    $reviewSectionLead = $reviewSectionLead ?? __('Google Reviews Default Lead');
    $reviewSectionClass = $reviewSectionClass ?? 'bg-white';
    $reviewSectionId = $reviewSectionId ?? 'google-reviews';
    $reviewColumnClass = match (count($googleReviews)) {
        2 => 'col-12 col-lg-6',
        4 => 'col-12 col-md-6 col-xl-3',
        default => 'col-12 col-md-6 col-xl-4',
    };
    $categoryLabels = [
        'water' => __('Google Reviews Category Water'),
        'mold' => __('Google Reviews Category Mold'),
        'restoration' => __('Google Reviews Category Restoration'),
    ];
@endphp

@once
    <style>
        .vr-google-review-card {
            position: relative;
            height: 31rem;
            overflow: hidden;
            padding: 1.5rem;
            border: 1px solid rgba(33, 37, 41, 0.1);
            border-radius: 1.25rem;
            background: #fff;
            box-shadow: 0 14px 34px rgba(33, 37, 41, 0.08);
        }

        .vr-google-review-avatar {
            width: 3rem;
            height: 3rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 3rem;
            border-radius: 50%;
            background: #212529;
            color: #ffc107;
            font-size: 0.85rem;
            font-weight: 800;
            letter-spacing: 0.04em;
        }

        .vr-google-review-stars {
            color: #f9b500;
            letter-spacing: 0.08em;
            line-height: 1;
        }

        .vr-google-review-quote {
            min-height: 0;
            flex: 1 1 auto;
            overflow-y: auto;
            overscroll-behavior: contain;
            scrollbar-gutter: stable;
            padding: 0.9rem 1rem;
            border-left: 3px solid #f9b500;
            border-radius: 0.65rem;
            background: #f8f9fa;
            color: #343a40;
            white-space: pre-line;
            -webkit-overflow-scrolling: touch;
            scrollbar-color: #d1a014 #eceff1;
            scrollbar-width: thin;
        }

        .vr-google-review-quote::-webkit-scrollbar {
            width: 0.45rem;
        }

        .vr-google-review-quote::-webkit-scrollbar-track {
            background: #eceff1;
            border-radius: 999px;
        }

        .vr-google-review-quote::-webkit-scrollbar-thumb {
            border-radius: 999px;
            background: #d1a014;
        }

        .vr-google-review-card .badge {
            max-width: 7.5rem;
            white-space: normal;
            line-height: 1.25;
        }

        .vr-google-review-link {
            color: #212529;
            font-weight: 700;
            text-underline-offset: 0.2em;
        }

        .vr-google-review-link:hover,
        .vr-google-review-link:focus {
            color: #8b6500;
        }

        @media (max-width: 575.98px) {
            .vr-google-review-card {
                height: 29rem;
                padding: 1.25rem;
            }
        }
    </style>
@endonce

@if (count($googleReviews))
    <section id="{{ $reviewSectionId }}" class="vr-google-reviews py-4 py-md-5 {{ $reviewSectionClass }}">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-12 col-lg-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                        <img src="{{ asset('img/google-logo.svg') }}" alt="" width="20" height="20" aria-hidden="true">
                        {{ __('Google Reviews Eyebrow') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $reviewSectionTitle }}</h2>
                    <p class="lead text-muted mb-0">{{ $reviewSectionLead }}</p>
                </div>
                <div class="col-12 col-lg-4 text-lg-end">
                    <div class="vr-google-review-stars fs-4 mb-2" role="img" aria-label="{{ __('Google Reviews Five Star Label') }}">★★★★★</div>
                    <p class="small text-muted mb-3">{{ __('Google Reviews Count Text', ['count' => $googleReviewsCount]) }}</p>
                    <a href="{{ $googleReviewsProfileUrl }}" target="_blank" rel="noopener noreferrer nofollow"
                        class="btn btn-dark fw-bold px-4 py-2">
                        {{ __('Google Reviews All CTA') }}
                    </a>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($googleReviews as $review)
                    <div class="{{ $reviewColumnClass }}">
                        <article class="vr-google-review-card d-flex flex-column">
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <div class="vr-google-review-avatar" aria-hidden="true">{{ $review['initials'] }}</div>
                                <div class="flex-grow-1">
                                    <h3 class="h6 fw-bold mb-1">{{ $review['name'] }}</h3>
                                    <div class="small text-muted">{{ $review['meta'] }}</div>
                                </div>
                                <span class="badge bg-light text-dark border">{{ $categoryLabels[$review['category']] ?? __('Google Reviews Category Restoration') }}</span>
                            </div>
                            <div class="vr-google-review-stars mb-3" role="img" aria-label="{{ __('Google Reviews Five Star Label') }}">★★★★★</div>
                            <blockquote class="vr-google-review-quote mb-4" tabindex="0">{{ $review['text'] }}</blockquote>
                            <div class="mt-auto d-flex flex-wrap justify-content-between align-items-center gap-2">
                                <span class="small text-muted">{{ __('Google Reviews Original Language') }}</span>
                                <a href="{{ $review['url'] }}" target="_blank" rel="noopener noreferrer nofollow"
                                    class="vr-google-review-link small">
                                    {{ __('Google Reviews Source CTA') }} ↗
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
