@extends('layouts.app')

@section('header')
    <title>{{$blog->title}}</title>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        (function() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
            document.head.appendChild(script);
        })();
        </script>
         <style>
            /* Hide the Google Translate logo */
            .goog-te-gadget-icon {
                display: none !important;
            }

        </style>
@endsection


@section('content')

<div id="google_translate_element"></div>
    <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-8 m-15px-tb">
                    <article class="article">
                        <div class="article-img">
                            <img src="https://www.bootdey.com/image/800x350/87CEFA/000000" title="" alt="">
                        </div>
                        <div class="article-title">
                            <h6><a href="#">{{$blog->category->name_en}}</a></h6>
                            <h1 class="h2 fw-bold">{{$blog->title}}</h1>
                            <span>Updated at: {{$blog->updated_at}}</span>
                            <hr>
                        </div>
                        <div class="article-content">

                            {!! $blog->content !!}
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




                    </article>
                    <div class="contact-form article-comment">
                        <h4>Leave a Reply</h4>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form id="contact-form" method="POST" class="mb-3"
                            action="{{ route('blog.newcomment', ['blog' => $blog->id]) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="name" id="name" placeholder="Name *" class="form-control"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="email" id="email" placeholder="Email *" class="form-control"
                                            type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button class="px-btn theme"><span>{{ __('Submit') }}</span> <i
                                                class="arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>


                        @foreach ($blog->comments as $cm)

                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 my-3">
                            <div class="font-weight-bold mb-1">{{$cm->name}}</div>
                            {{$cm->comment}}
                        </div>

                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 m-15px-tb blog-aside">

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
                                        <h5><a href="{{ route('blog.post', ['lang' => app()->getLocale(), 'blog' => $ltPost->id,'slug'=> $ltPost->slug]) }}">{{$ltPost->title}}</a></h5>
                                    </div>
                                    <div class="lpa-meta">
                                        <a class="date" href="{{ route('blog.post', ['lang' => app()->getLocale(), 'blog' => $ltPost->id,'slug'=> $ltPost->slug]) }}">
                                           {{$ltPost->updated_at}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <!-- End Latest Post -->
                    <!-- widget Tags -->
                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h3>{{ __('Latest Tags') }}</h3>
                        </div>
                        <div class="widget-body">
                            <div class="nav tag-cloud">
                                <a href="#">Design</a>
                                <a href="#">Development</a>
                                <a href="#">Travel</a>
                                <a href="#">Web Design</a>
                                <a href="#">Marketing</a>
                                <a href="#">Research</a>
                                <a href="#">Managment</a>
                            </div>
                        </div>
                    </div>
                    <!-- End widget Tags -->
                </div>
            </div>
        </div>
    </div>
@endsection
