@extends('admin.layouts.layout')
@section('content')
<div class="app-content main-content">
    <div class="side-app">
        <div class="container-fluid main-container">

            <!--Page header-->
            <div class="page-header">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog Details</div>

                <div class="card-body">
                    <!-- Display the user ID and user name -->
                    <p>User ID: {{ $blog->user_id }}</p>
                    <p>User Name: {{ $blog->user_name }}</p>

                    <!-- Display the blog title -->
                    <h1 class="card-title">{{ $blog->title }}</h1>

                    <!-- Display the blog thumbnail image -->
                    <img src="{{ asset($blog->image) }}" alt="image" class="card-img-top">

                    <!-- Display the blog description -->
                    <p class="card-text">{{ $blog->description }}</p>

                    <!-- Meta Information -->
                    <div class="card-text">
                        <meta name="description" content="{{ $blog->meta_description }}">
                        <meta name="title" content="{{ $blog->meta_title }}">
                        <meta name="keywords" content="{{ $blog->meta_keywords }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
</div>

@endsection