@extends('layouts.app')

@section('header')
    <title>Home</title>
@endsection

@section('content')
    <div class="container section">
        <div class="row">


            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if (Auth::user()->is_admin)
                <div class="col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Blog Category</h5>
                            <a href="{{ route('postcategory.index') }}" class="btn btn-dark">View</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Blog</h5>
                            <a href="{{ route('post.index') }}" class="btn btn-dark">View</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Comments</h5>
                            <a href="{{ route('comment.index') }}" class="btn btn-dark">View</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mt-3">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Career</h5>
                            <a href="{{ route('career.index') }}" class="btn btn-dark">View</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    </div>
@endsection
