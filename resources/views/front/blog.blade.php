@php use Carbon\Carbon; @endphp
@extends('front.master')
@section('title', 'Bloq')
@section('css')
    <style>
        .blog-item-image img {
            object-fit: contain !important;
        }
    </style>
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(
                &#34;data:image/svg + xml,
                %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;
              );">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="blogs-section">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="{{ route('blog.detail', $blog->slug) }}" class="blog-item">
                            <div class="blog-item-image">
                                @if($blog->image)
                                    <img src="{{ Storage::url($blog->image) }}"
                                         alt="{{ $blog->title }}"/>
                                @endif
                            </div>
                            <div class="blog-item-date">
                                {{ Carbon::parse($blog->updated_at)->locale('az')->translatedFormat('j F') }}
                            </div>
                            <span class="blog-item-type">
                                {{ $blog->category->title }}
                            </span>
                            <div class="blog-item-title">
                                {{ $blog->title }}
                            </div>
                            <button class="blog-item-button">
                                Read more
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.823 240.823">
                                    <path
                                        d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"></a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 240.823 240.823"
                                >
                                    <path
                                        d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"
                                    ></path>
                                </svg>
                            </a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
