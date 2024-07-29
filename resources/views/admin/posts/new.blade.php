@extends('layouts.app')

@section('header')
    <title>Edit Post</title>

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

                        <h1>New Blog</h1>
                        <hr>
                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="language">Language*</label>
                                <select class="form-control" name="language" id="language">
                                    <option value="1" {{ old('language') == 1 ? 'selected' : '' }}>English</option>
                                    <option value="2" {{ old('language') == 2 ? 'selected' : '' }}>Chinese</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title*</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
                                    oninput="updateSlug()" aria-describedby="helpId" placeholder="title">
                            </div>

                            <div class="form-group">
                                <label for="slug">Slug*</label>
                                <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}"
                                    aria-describedby="helpId" placeholder="slug">
                                <small id="helpId" class="form-text text-muted">slug is for URL (SEO)</small>
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Subtitle*</label>
                                <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{ old('subtitle') }}"
                                    aria-describedby="emailHelp" oninput="updateSlug()" placeholder="Enter subtitle">
                            </div>

                            <div class="form-group">
                                <label for="keywords">Keywords*</label>
                                <input type="text" class="form-control" name="keywords" id="keywords"
                                    placeholder="Keywords (SEO) divid by ,">
                            </div>

                            <div class="form-group">
                                <label for="post_category_id">Category*</label>
                                <select class="form-control" name="post_category_id" id="post_category_id">
                                    @foreach ($postCat as $cat)
                                        <option value="{{ $cat->id }}" {{ old('post_category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name_en }} - {{ $cat->name_zh }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="image">Main Image 800*350</label>
                                <input type="file" class="form-control" name="image" id="image"
                                    placeholder="Upload Image 800*350" aria-describedby="fileHelpId">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea id="trumbowyg-demo" name="content">{{ old('content') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Published</option>
                                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Draft</option>
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
