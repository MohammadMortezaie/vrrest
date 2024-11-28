@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <style>
        /* Hide the Google Translate logo */
        .goog-te-gadget-icon {
            display: none !important;
        }
    </style>
@endsection


@section('content')
    <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <div class="article">
                        <div class="article-title">
                            <h6><a href="#">{{ $localService->city }}</a></h6>
                            @if (app()->getLocale() == 'en')
                                <h1 class="h2 fw-bold">{{ $localService->title_en }}</h1>
                            @else
                                <h1 class="h2 fw-bold">{{ $localService->title_zh }}</h1>
                            @endif
                            <hr>
                        </div>
                        @if ($localService->image)
                            <div class="article-img">
                                <img src="{{ asset($localService->image) }}" class="card-img-top w-100"
                                    style="max-height: 600px" alt="{{ $localService->title }}">
                            </div>
                        @endif
                        <div class="article-content pt-2">
                            @if (app()->getLocale() == 'en')
                                {!! $localService->desc_en !!}
                            @else
                                {!! $localService->desc_zh !!}
                            @endif
                        </div>

                        <div class="nav tag-cloud">
                            <!-- Facebook Share Button -->
                            <a href="#" class="btn btn-primary me-2 border-3 rounded" onclick="shareOnFacebook()">
                                <i class="bi bi-facebook"></i> {{ __('Share on Facebook') }}
                            </a>
                            <!-- WhatsApp Share Button -->
                            <a href="#" class="btn btn-success me-2 border-3 rounded" onclick="shareOnWhatsApp()">
                                <i class="bi bi-whatsapp"></i> {{ __('Share on WhatsApp') }}
                            </a>
                            <!-- Twitter Share Button -->
                            <a href="#" class="btn btn-info text-white border-3 rounded" onclick="shareOnTwitter()">
                                <i class="bi bi-twitter"></i> {{ __('Share on Twitter') }}
                            </a>

                        </div>




                    </div>
                </div>
                <div class="col-lg-4 m-15px-tb blog-aside">
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>{{ __('Change Language') }}</h3>
                        </div>
                        <div class="widget-body">

                            <div id="google_translate_element"></div>

                        </div>
                    </div>
                    <!-- Latest Post -->
                    <div class="widget widget-latest-post">
                        <div class="widget-title">
                            <h3>{{ __('Latest Post') }}</h3>
                        </div>
                        @foreach ($latestPost as $ltPost)
                            <div class="widget-body">
                                <div class="latest-post-aside media">
                                    <div class="lpa-left media-body">
                                        <div class="lpa-title">
                                            <h5><a
                                                    href="{{ route('localservicesDetail', ['lang' => app()->getLocale(), 'city' => $ltPost->city, 'slug' => $ltPost->slug]) }}">

                                                    @if (app()->getLocale() == 'en')
                                                     {{ $ltPost->title_en }}
                                                    @else
                                                     {{ $ltPost->title_zh }}
                                                    @endif
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="lpa-meta">
                                            <a class="date"
                                                href="{{ route('localservicesDetail', ['lang' => app()->getLocale(), 'city' => $ltPost->city, 'slug' => $ltPost->slug]) }}">
                                                {{ $ltPost->updated_at }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Latest Post -->

                </div>
            </div>
        </div>
    </div>
@endsection
