@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
    <link rel="stylesheet" href="{{ asset('css/blog-editorial.css') }}">
@endsection

@section('content')
@php
    $posts = $blog->getCollection();
    $featuredPost = $posts->first();
    $remainingPosts = $posts->slice(1);
    $categoryName = fn ($post) => app()->getLocale() === 'zh'
        ? ($post->category?->name_zh ?? __('Restoration'))
        : ($post->category?->name_en ?? __('Restoration'));
    $readingTime = function ($post) {
        $plainText = trim(strip_tags($post->content));
        $words = str_word_count($plainText);
        $units = $words > 0 ? $words : max(1, mb_strlen($plainText) / 3);
        return max(1, (int) ceil($units / 220));
    };
@endphp

<div class="journal-page">
    <section class="journal-masthead">
        <div class="container">
            <div class="journal-masthead-top">
                <span class="journal-kicker"><i class="bi bi-journal-richtext" aria-hidden="true"></i>{{ __('Blog Journal Kicker') }}</span>
                <span class="journal-issue">{{ now()->translatedFormat('F Y') }}</span>
            </div>
            <div class="journal-title-grid">
                <h1>{{ __('Blog Journal Title') }}</h1>
                <p>{{ $pageDescription }}</p>
            </div>
            <div class="journal-topics" aria-label="{{ __('Blog Topics Label') }}">
                <span>{{ __('waterDamage') }}</span>
                <span>{{ __('fireDamage') }}</span>
                <span>{{ __('moldRemediation') }}</span>
                <span>{{ __('construction') }}</span>
            </div>
        </div>
    </section>

    @if ($featuredPost)
        @php
            $featuredUrl = route('blog.post', ['lang' => app()->getLocale(), 'blog' => $featuredPost->id, 'slug' => $featuredPost->slug]);
        @endphp
        <section class="journal-feature" aria-labelledby="featured-article-title">
            <div class="container">
                <article class="journal-feature-card">
                    <a class="journal-feature-image" href="{{ $featuredUrl }}" aria-label="{{ $featuredPost->title }}">
                        @if ($featuredPost->image)
                            <img src="{{ asset($featuredPost->image) }}" alt="{{ $featuredPost->title }}" fetchpriority="high">
                        @else
                            <img src="{{ asset('img/hero-bg3.jpeg') }}" alt="{{ $featuredPost->title }}" fetchpriority="high">
                        @endif
                    </a>
                    <div class="journal-feature-copy">
                        <div class="journal-card-meta">
                            <span>{{ __('Blog Featured Label') }}</span>
                            <span>{{ $categoryName($featuredPost) }}</span>
                        </div>
                        <h2 id="featured-article-title"><a href="{{ $featuredUrl }}">{{ $featuredPost->title }}</a></h2>
                        <p>{{ $featuredPost->subtitle }}</p>
                        <div class="journal-card-footer">
                            <span><time datetime="{{ $featuredPost->created_at->toIso8601String() }}">{{ $featuredPost->created_at->translatedFormat('M j, Y') }}</time><i aria-hidden="true"></i>{{ $readingTime($featuredPost) }} {{ __('Blog Minutes Read') }}</span>
                            <a href="{{ $featuredUrl }}">{{ __('Read More') }}<i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    @endif

    @if ($remainingPosts->isNotEmpty())
        <section class="journal-library" aria-labelledby="latest-guides-title">
            <div class="container">
                <div class="journal-section-head">
                    <div><span>{{ __('Blog Library Kicker') }}</span><h2 id="latest-guides-title">{{ __('Blog Latest Guides') }}</h2></div>
                    <p>{{ __('Blog Library Text') }}</p>
                </div>
                <div class="journal-grid">
                    @foreach ($remainingPosts as $item)
                        @php $postUrl = route('blog.post', ['lang' => app()->getLocale(), 'blog' => $item->id, 'slug' => $item->slug]); @endphp
                        <article class="journal-card">
                            <a class="journal-card-image" href="{{ $postUrl }}" aria-label="{{ $item->title }}">
                                @if ($item->image)
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}" loading="lazy">
                                @else
                                    <img src="{{ asset('img/hero-bg3.jpeg') }}" alt="{{ $item->title }}" loading="lazy">
                                @endif
                                <span>{{ $categoryName($item) }}</span>
                            </a>
                            <div class="journal-card-copy">
                                <div class="journal-card-date"><time datetime="{{ $item->created_at->toIso8601String() }}">{{ $item->created_at->translatedFormat('M j, Y') }}</time><span>{{ $readingTime($item) }} {{ __('Blog Minutes Read') }}</span></div>
                                <h3><a href="{{ $postUrl }}">{{ $item->title }}</a></h3>
                                <p>{{ $item->subtitle }}</p>
                                <a class="journal-read-link" href="{{ $postUrl }}"><span>{{ __('Read More') }}</span><i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </article>
                    @endforeach
                </div>

            </div>
        </section>
    @elseif (!$featuredPost)
        <section class="journal-empty"><div class="container"><i class="bi bi-journal" aria-hidden="true"></i><h2>{{ __('Blog Empty Title') }}</h2><p>{{ __('Blog Empty Text') }}</p></div></section>
    @endif

    @if ($featuredPost)
        <nav class="journal-pagination" id="blog-pagination" aria-label="{{ __('Blog Pagination Label') }}">
            <div class="container">
                <a class="{{ $blog->onFirstPage() ? 'is-disabled' : '' }}" href="{{ $blog->onFirstPage() ? '#' : $blog->previousPageUrl() }}" @if($blog->onFirstPage()) aria-disabled="true" tabindex="-1" @endif><i class="bi bi-arrow-left" aria-hidden="true"></i>{{ __('Previous') }}</a>
                <div>
                    @for ($pageNumber = 1; $pageNumber <= max(1, $blog->lastPage()); $pageNumber++)
                        <a class="{{ $pageNumber === $blog->currentPage() ? 'is-active' : '' }}" href="{{ $blog->url($pageNumber) }}" @if($pageNumber === $blog->currentPage()) aria-current="page" @endif>{{ str_pad((string) $pageNumber, 2, '0', STR_PAD_LEFT) }}</a>
                    @endfor
                </div>
                <a class="{{ $blog->hasMorePages() ? '' : 'is-disabled' }}" href="{{ $blog->hasMorePages() ? $blog->nextPageUrl() : '#' }}" @if(!$blog->hasMorePages()) aria-disabled="true" tabindex="-1" @endif>{{ __('Next') }}<i class="bi bi-arrow-right" aria-hidden="true"></i></a>
            </div>
        </nav>
    @endif
</div>
@endsection
