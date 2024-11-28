@extends('layouts.app')

@section('header')
    <title>Edit LocalService</title>

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

                        <form action="{{ route('localservice.update', ['localservice' => $localService->id] ) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <h1>Edit LocalService</h1>
                            <hr>

                            <div class="form-group">
                                <label for="city">City*</label>
                                <input type="text" class="form-control" name="city" id="city"
                                    value="{{ $localService->city }}" oninput="updateCity()" aria-describedby="helpId"
                                    placeholder="city">
                            </div>

                            <div class="form-group">
                                <label for="title_en">Title En*</label>
                                <input type="text" class="form-control" name="title_en" id="title_en"
                                    value="{{ $localService->title_en }}" oninput="updateSlug()" aria-describedby="helpId"
                                    placeholder="title_en">
                            </div>

                            <div class="form-group">
                                <label for="title_zh">Title ZH*</label>
                                <input type="text" class="form-control" name="title_zh" id="title_zh"
                                    value="{{ $localService->title_zh }}" >
                            </div>


                            <div class="form-group">
                                <label for="street_address">street_address*</label>
                                <input type="text" class="form-control" name="street_address" id="street_address"
                                    value="{{ $localService->street_address }}" >
                            </div>

                            <div class="form-group">
                                <label for="address_locality">address_locality*</label>
                                <input type="text" class="form-control" name="address_locality" id="address_locality"
                                    value="{{ $localService->address_locality }}" >
                            </div>

                            <div class="form-group">
                                <label for="address_region">address_region*</label>
                                <input type="text" class="form-control" name="address_region" id="address_region"
                                    value="{{ $localService->address_region }}" >
                            </div>

                            <div class="form-group">
                                <label for="postal_code">postal_code*</label>
                                <input type="text" class="form-control" name="postal_code" id="postal_code"
                                    value="{{ $localService->postal_code }}" >
                            </div>

                            <div class="form-group">
                                <label for="area_served">area_served*</label>
                                <input type="text" class="form-control" name="area_served" id="area_served"
                                    value="{{ $localService->area_served }}" >
                            </div>


                            <div class="form-group">
                                <label for="latitude">latitude*</label>
                                <input type="text" class="form-control" name="latitude" id="latitude"
                                    value="{{ $localService->latitude }}" >
                            </div>



                            <div class="form-group">
                                <label for="longitude">longitude*</label>
                                <input type="text" class="form-control" name="longitude" id="longitude"
                                    value="{{ $localService->longitude }}" >
                            </div>



                            <div class="form-group">
                                <label for="slug">Slug*</label>
                                <input type="text" class="form-control" name="slug" id="slug"
                                    value="{{ $localService->slug }}" aria-describedby="helpId" placeholder="slug">
                                <small id="helpId" class="form-text text-muted">slug is for URL (SEO)</small>
                            </div>

                            <div class="form-group">
                                <label for="subtitle_en">Subtitle*</label>
                                <input type="text" class="form-control" name="subtitle_en" id="subtitle_en"
                                    value="{{ $localService->subtitle_en }}" aria-describedby="emailHelp" oninput="updateSlug()"
                                    placeholder="Enter subtitle en">
                            </div>

                            <div class="form-group">
                                <label for="subtitle_zh">Subtitle ZH*</label>
                                <input type="text" class="form-control" name="subtitle_zh" id="subtitle_zh"
                                    value="{{ $localService->subtitle_zh }}">
                            </div>


                            <div class="form-group">
                                <label for="image">Main Image 800*350</label>
                                <input type="file" class="form-control" name="image" id="image"
                                    placeholder="Upload Image 800*350" aria-describedby="fileHelpId">
                                @if ($localService->image)
                                    <img src="{{ $localService->image }}" style="width: 300px" />
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="desc_en">Content en</label>
                                <textarea id="trumbowyg-demo" name="desc_en">{{ $localService->desc_en }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="desc_zh">Content zh</label>
                                <textarea id="trumbowyg-demo2" name="desc_zh">{{ $localService->desc_zh }}</textarea>
                            </div>


                            <div class="form-group">
                                <label for="is_active">is active</label>
                                <select class="form-control" name="is_active" id="is_active">
                                    <option value="1" {{ $localService->is_active == 1 ? 'selected' : '' }}>Published</option>
                                    <option value="0" {{ $localService->is_active == 0 ? 'selected' : '' }}>delete</option>
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
            $('#trumbowyg-demo2').trumbowyg();
        });

        function updateSlug() {
            const titleInput = document.getElementById('title_en');
            const slugInput = document.getElementById('slug');
            let slug = titleInput.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            slugInput.value = slug;
        }

        function updateCity() {
            const titleInput = document.getElementById('city');
            const slugInput = document.getElementById('city');
            let slug = titleInput.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
            slugInput.value = slug;
        }
    </script>
@endsection
