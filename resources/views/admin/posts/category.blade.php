@extends('layouts.app')

@section('header')
    <title>Category</title>

    <style>
        .form-group {
            margin: 10px 0px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="article mt-4 col-md-12">

                <div id="app">
                    <blog-category />
                </div>

            </div>

        </div>
    @endsection

    @section('scripts')
    @endsection
