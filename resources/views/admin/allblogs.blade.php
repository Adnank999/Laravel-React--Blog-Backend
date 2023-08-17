@extends('admin.layouts.layout')

@section('content')
<div class="app-content main-content">



    <!--Page header-->
    <div class="page-header">
        <div class="container-fluid">foreac


            <div class="card">
                <div class="card-header">Blog Details</div>


                
                <div class="row">
                    @foreach($allblogs as $blog),
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset($blog->image) }}" class="card-img-top" alt="Blog image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text">{{ $blog->description }}</p>
                                <p class="card-text">User ID: {{ $blog->user_id }}</p>
                                <p class="card-text">User Name: {{ $blog->user_name }}</p>
                                <p class="card-text">Meta Description: {{ $blog->meta_description }}</p>
                                <p class="card-text">Meta Title: {{ $blog->meta_title }}</p>
                                <p class="card-text">Meta Keywords: {{ $blog->meta_keywords }}</p>
                                <a href="{{ route('blogs.show', ['id' => $blog->id]) }}" class="btn btn-primary">Read More</a>
                                <a href="{{ route('blogs.delete', ['id' => $blog->id]) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                

            </div>


        </div>


    </div>


</div>

@endsection