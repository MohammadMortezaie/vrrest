@extends('layouts.app')

@section('header')
    <title>New Post</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css"
        integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .form-group {
            margin: 10px 0px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class=" my-3 bg-white">
                    <div class="article">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('career.update', ['career' => $career->id] ) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <h1>Edit Career</h1>
                            <hr>

                            <div class="form-group">
                                <label for="title">Title*</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ $career->title }}" oninput="updateSlug()" aria-describedby="helpId"
                                    placeholder="title">
                            </div>

                            <div class="form-group">
                                <label for="slug">Slug*</label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                    value="{{ $career->slug }}" aria-describedby="helpId" placeholder="slug">
                                <small id="helpId" class="form-text text-muted">slug is for URL (SEO)</small>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea id="trumbowyg-demo" name="content">{{ $career->content }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="is_active">Status</label>
                                <select class="form-control" name="is_active" id="is_active">
                                    <option value="1" {{ $career->is_active == 1 ? 'selected' : '' }}>Published</option>
                                    <option value="0" {{ $career->is_active == 0 ? 'selected' : '' }}>Draft</option>
                                </select>
                            </div>

                            <button type="submit" class="btn bg-vr">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js"
        integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('#trumbowyg-demo').trumbowyg();
        });

        function updateSlug() {
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');
            let slug = titleInput.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            slugInput.value = slug;
        }
    </script>
@endsection
