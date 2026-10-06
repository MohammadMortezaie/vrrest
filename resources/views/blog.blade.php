@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
@endsection


@section('content')
    <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start article">
                <div class="col-12 pt-5 pb-3 text-center">
                    <h1>{{ $pageTitle }}</h1>
                    <p class="lead mx-auto" style="max-width: 850px">{{ $pageDescription }}</p>
                </div>

                @foreach ($blog as $item)
                    <div class="col-md-6 m-15px-tb">
                        <article class="card mb-3 h-100">
                            <a class="text-decoration-none text-dark"
                                href="{{ route('blog.post', ['lang' => app()->getLocale(), 'blog' => $item->id, 'slug' => $item->slug]) }}">
                                @if ($item->image)
                                    <img src="{{ asset($item->image) }}" class="card-img-top w-100" style="max-height: 400px"
                                        alt="{{ $item->title }}">
                                @endif
                                <div class="card-body">
                                    <h2 class="card-title h5">{{ $item->title }}</h2>
                                    @if (app()->getLocale() == 'en')
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name_en }}</h6>
                                    @else
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name_zh }}</h6>
                                    @endif
                                    <p class="card-text">{{ $item->subtitle }}</p>
                                    <time class="d-block small text-muted mb-3" datetime="{{ $item->created_at->toIso8601String() }}">
                                        {{ $item->created_at->translatedFormat('F j, Y') }}
                                    </time>

                                    <div class="send">
                                        <button class="px-btn theme"><span>{{ __('Read More') }}</span> <i
                                                class="arrow"></i></button>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    {{ $blog->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>

    </div>
@endsection
