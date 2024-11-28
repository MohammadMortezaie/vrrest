@extends('layouts.app')

@section('header')
    <title>Cities that we Covers</title>
@endsection


@section('content')
    <div class="blog-single gray-bg">
        <div class="container">
            <div class="row align-items-start article">
                <h1 class="pb-3"> {{ __('Restoration Local Services') }}</h1>
                @foreach ($localService as $item)

                @if (app()->getLocale() == 'en')
                    <div class="col-md-6 m-15px-tb">
                        <div class="card mb-3">
                            <a class="text-decoration-none text-dark"
                                href="{{ route('localservicesDetail', ['lang' => app()->getLocale(), 'city' => $item->city, 'slug' => $item->slug]) }}">
                                @if ($item->image)
                                    <img src="{{ asset($item->image) }}" class="card-img-top w-100" style="max-height: 400px"
                                        alt="{{ $item->title_en }}">
                                @endif
                                <div class="card-body">
                                    <h2 class="card-title h4">{{ $item->title_en }}</h2>
                                    <h3 class="card-subtitle mb-2 text-muted h6">{{ $item->city }}</h3>
                                    <p class="card-text">{{ $item->subtitle_en }}</p>

                                    <div class="send">
                                        <button class="px-btn theme"><span>{{ __('Read More') }}</span> <i
                                                class="arrow"></i></button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="col-md-6 m-15px-tb">
                        <div class="card mb-3">
                            <a class="text-decoration-none text-dark"
                            href="{{ route('localservicesDetail', ['lang' => app()->getLocale(), 'city' => $item->city, 'slug' => $item->slug]) }}">
                                @if ($item->image)
                                    <img src="{{ asset($item->image) }}" class="card-img-top w-100" style="max-height: 400px"
                                        alt="{{ $item->title_zh }}">
                                @endif
                                <div class="card-body">
                                    <h2 class="card-title h4">{{ $item->title_zh }}</h2>
                                    <h3 class="card-subtitle mb-2 text-muted h6">{{ $item->city }}</h3>
                                    <p class="card-text">{{ $item->subtitle_zh }}</p>

                                    <div class="send">
                                        <button class="px-btn theme"><span>{{ __('Read More') }}</span> <i
                                                class="arrow"></i></button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                @endforeach

                <div class="d-flex justify-content-center">
                    {{ $localService->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>

    </div>
@endsection
