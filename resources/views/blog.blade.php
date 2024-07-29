@extends('layouts.app')

@section('header')
    <title>Blog</title>
@endsection


@section('content')
    <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start article">

                @foreach ($blog as $item)
                    <div class="col-md-6 m-15px-tb">
                        <div class="card mb-3">
                            <a class="text-decoration-none text-dark"
                                href="{{ route('blog.post', ['lang' => app()->getLocale(), 'blog' => $item->id, 'slug' => $item->slug]) }}">
                                @if ($item->image)
                                    <img src="{{ asset($item->image) }}" class="card-img-top w-100" style="max-height: 400px"
                                        alt="{{ $item->title }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    @if (app()->getLocale() == 'en')
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name_en }}</h6>
                                    @else
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name_zh }}</h6>
                                    @endif
                                    <p class="card-text">{{ $item->subtitle }}</p>

                                    <div class="send">
                                        <button class="px-btn theme"><span>{{ __('Read More') }}</span> <i
                                                class="arrow"></i></button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
