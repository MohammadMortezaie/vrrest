@extends('layouts.app')

@section('header')
{!! seo($SEOData) !!}
<link rel="stylesheet" href="{{ asset('css/blog-editorial.css') }}">
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: '{{ app()->getLocale() === 'zh' ? 'zh-CN' : 'en' }}'}, 'google_translate_element');
    }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async></script>
@endsection

@section('content')
@php
    $category = app()->getLocale() === 'zh'
        ? ($blog->category?->name_zh ?? __('Restoration'))
        : ($blog->category?->name_en ?? __('Restoration'));
    $plainText = trim(strip_tags($blog->content));
    $wordCount = str_word_count($plainText);
    $readingUnits = $wordCount > 0 ? $wordCount : max(1, mb_strlen($plainText) / 3);
    $readingTime = max(1, (int) ceil($readingUnits / 220));
    $keywords = collect(explode(',', (string) $blog->keywords))->map(fn ($keyword) => trim($keyword))->filter();
    $recaptchaSiteKey = config('services.recaptcha.site_key');
@endphp

<div class="article-page">
    <header class="article-hero">
        <div class="container">
            <nav class="article-breadcrumb" aria-label="{{ __('Blog Breadcrumb Label') }}">
                <a href="{{ route('blog', ['lang' => app()->getLocale()]) }}">{{ __('Blog') }}</a>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>{{ $category }}</span>
            </nav>
            <div class="article-hero-grid">
                <div class="article-hero-copy">
                    <span class="article-category">{{ $category }}</span>
                    <h1>{{ $blog->title }}</h1>
                    @if ($blog->subtitle)<p>{{ $blog->subtitle }}</p>@endif
                    <div class="article-byline">
                        <span class="article-author-mark">SG</span>
                        <span><strong>Sasan Ghanbari</strong><small>{{ __('Blog Author Role') }}</small></span>
                        <span class="article-byline-divider" aria-hidden="true"></span>
                        <span><strong><time datetime="{{ $blog->updated_at->toIso8601String() }}">{{ $blog->updated_at->translatedFormat('M j, Y') }}</time></strong><small>{{ __('Blog Updated Label') }}</small></span>
                        <span><strong>{{ $readingTime }} {{ __('Blog Minutes') }}</strong><small>{{ __('Blog Read Time Label') }}</small></span>
                    </div>
                </div>
                <div class="article-hero-media">
                    @if ($blog->image)
                        <img class="article-hero-image" src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" fetchpriority="high">
                    @else
                        <img class="article-hero-image" src="{{ asset('img/hero-bg3.jpeg') }}" alt="{{ $blog->title }}" fetchpriority="high">
                    @endif
                </div>
            </div>
        </div>
    </header>

    <section class="article-layout" id="article-content">
        <div class="container">
            <div class="article-layout-grid">
                <article class="article-main">
                    <div class="article-mobile-meta"><span>{{ $category }}</span><span>{{ $readingTime }} {{ __('Blog Minutes Read') }}</span></div>
                    <div class="journal-body">
                        {!! $blog->content !!}
                    </div>

                    @if ($keywords->isNotEmpty())
                        <div class="article-keywords" aria-label="{{ __('Keywords') }}">
                            @foreach ($keywords as $keyword)<span>{{ $keyword }}</span>@endforeach
                        </div>
                    @endif

                    <div class="article-author-card">
                        <span class="article-author-mark">SG</span>
                        <div><small>{{ __('Blog Written By') }}</small><h2>Sasan Ghanbari</h2><p>{{ __('Blog Author Bio') }}</p></div>
                    </div>

                    <div class="article-share">
                        <strong>{{ __('Blog Share Title') }}</strong>
                        <div>
                            <button type="button" onclick="shareOnFacebook()" aria-label="{{ __('Share on Facebook') }}"><i class="bi bi-facebook" aria-hidden="true"></i></button>
                            <button type="button" onclick="shareOnWhatsApp()" aria-label="{{ __('Share on WhatsApp') }}"><i class="bi bi-whatsapp" aria-hidden="true"></i></button>
                            <button type="button" onclick="shareOnTwitter()" aria-label="{{ __('Share on Twitter') }}"><i class="bi bi-twitter-x" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    <section class="article-comment" aria-labelledby="reply-title">
                        <div class="article-comment-head"><span>{{ __('Blog Join Conversation') }}</span><h2 id="reply-title">{{ __('Blog Leave Reply') }}</h2><p>{{ __('Blog Comment Note') }}</p></div>
                        @if (session('success'))<div class="alert alert-success" role="status">{{ session('success') }}</div>@endif
                        @if (session('comment_error'))<div class="alert alert-danger" role="alert">{{ session('comment_error') }}</div>@endif
                        @if ($errors->any())<div class="alert alert-danger" role="alert">{{ __('Blog Comment Error') }}</div>@endif
                        <form method="POST" action="{{ route('blog.newcomment', ['blog' => $blog->id]) }}" class="js-blog-comment-form">
                            @csrf
                            <input type="hidden" name="page_url" value="{{ url()->current() }}">
                            <input type="hidden" name="recaptcha_action" value="blog_comment">
                            <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off" aria-hidden="true">
                            @if ($recaptchaSiteKey)
                                <input type="hidden" name="g-recaptcha-response" class="js-blog-recaptcha-token">
                            @endif
                            <div class="article-comment-grid">
                                <label><span>{{ __('Contact Form Name') }}</span><input name="name" placeholder="{{ __('Contact Form Name Placeholder') }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required></label>
                                <label><span>{{ __('Contact Form Email') }}</span><input name="email" placeholder="{{ __('Contact Form Email Placeholder') }}" class="form-control @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" required></label>
                                <label class="article-comment-message"><span>{{ __('Blog Comment Label') }}</span><textarea name="comment" placeholder="{{ __('Blog Comment Placeholder') }}" rows="5" class="form-control @error('comment') is-invalid @enderror" required>{{ old('comment') }}</textarea></label>
                            </div>
                            <button class="article-submit" type="submit">{{ __('Submit') }}<i class="bi bi-arrow-up-right" aria-hidden="true"></i></button>
                            <p class="article-recaptcha-note"><i class="bi bi-shield-check" aria-hidden="true"></i>{{ __('Blog Recaptcha Notice') }}</p>
                        </form>
                    </section>
                </article>

                <aside class="article-aside" aria-label="{{ __('Blog Article Resources') }}">
                    <div class="article-aside-inner">
                        <section class="article-aside-card article-help-card">
                            <span>{{ __('WD Emergency') }}</span>
                            <h2>{{ __('Blog Aside Help Title') }}</h2>
                            <p>{{ __('Blog Aside Help Text') }}</p>
                            <a href="tel:+16048003900"><i class="bi bi-telephone-fill" aria-hidden="true"></i>{{ __('HP Call') }}</a>
                        </section>

                        @if ($latestPost->isNotEmpty())
                            <section class="article-aside-card">
                                <div class="article-aside-title"><span>{{ __('Blog Continue Reading') }}</span><h2>{{ __('Latest Post') }}</h2></div>
                                <div class="article-latest-list">
                                    @foreach ($latestPost as $ltPost)
                                        <a href="{{ route('blog.post', ['lang' => app()->getLocale(), 'blog' => $ltPost->id, 'slug' => $ltPost->slug]) }}">
                                            <span>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                            <div><strong>{{ $ltPost->title }}</strong><small>{{ $ltPost->updated_at->translatedFormat('M j, Y') }}</small></div>
                                            <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </section>
                        @endif

                        <section class="article-aside-card article-language-card">
                            <div class="article-aside-title"><span>{{ __('Blog Language Kicker') }}</span><h2>{{ __('Change Language') }}</h2></div>
                            <div id="google_translate_element"></div>
                        </section>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="article-back">
        <div class="container"><a href="{{ route('blog', ['lang' => app()->getLocale()]) }}"><i class="bi bi-arrow-left" aria-hidden="true"></i>{{ __('Blog Back To Journal') }}</a></div>
    </section>
</div>
@endsection

@section('scripts')
    @if ($recaptchaSiteKey)
        <script src="https://www.google.com/recaptcha/api.js?render={{ $recaptchaSiteKey }}"></script>
        <script>
            document.addEventListener('submit', function (event) {
                const form = event.target.closest('.js-blog-comment-form');
                if (!form || form.dataset.recaptchaReady === 'true') return;

                const tokenInput = form.querySelector('.js-blog-recaptcha-token');
                if (!tokenInput || typeof grecaptcha === 'undefined') return;

                event.preventDefault();
                grecaptcha.ready(function () {
                    grecaptcha.execute('{{ $recaptchaSiteKey }}', { action: 'blog_comment' }).then(function (token) {
                        tokenInput.value = token;
                        form.dataset.recaptchaReady = 'true';
                        form.submit();
                    });
                });
            }, true);
        </script>
    @endif
@endsection
