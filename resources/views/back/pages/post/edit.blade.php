@extends('back.layouts.master')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="page-title-heading">
                            <div>Edit post Service
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="page-links-heading">
                            Edit post  / <a href="{{ route('post.index') }}">posts</a> /
                            <a href="{{ route('dashboard.index') }}">Home</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="app-main__inner">

        <div class="main-card mb-3 card ">
            <div class="card-body">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-diamond">
                        </i>
                    </div>

                </div>
                <form class="needs-validation " novalidate action="{{ route('post.update',$post->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" value="{{ $post->title }}" name="title" placeholder="title" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Choose  Categories</label>
                            <select class="form-control" name="category_id" placeholder="English Description"
                                required>
                                <option value="" selected disabled>Choose Category ..</option>
                                @foreach ($categories as $category)
                                    <option @if ($category->id == $post->category_id) {{'selected'}}
                                        
                                    @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                       
                       
                        <div class="col-md-12 mb-3">
                            <label>Details</label>
                            <textarea class="form-control" name="details" value="" placeholder="details"
                                required>{{ $post->details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        
                       
                        <div class="col-md-12 mb-3">
                            <label>Date</label>
                            <input type="date"  value="{{ $post->date }}" class="form-control" name="date"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-12 text-center">
                            <img src="{{ asset('assets/uploads/post/'.$post->image) }}" alt="" style=" width: 120px; height: 90px;
                            object-fit: contain;" alt="">
                            <label>Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" 
                                        class="form-control" accept="image/*" required>
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>
                        </div>

                        @if ($errors->has('files'))
                            @foreach ($errors->get('files') as $error)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $error }}</strong>
                                </span>
                            @endforeach
                        @endif

                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>

                <script>
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            var forms = document.getElementsByClassName('needs-validation');
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </div>

    </div>
@endsection
