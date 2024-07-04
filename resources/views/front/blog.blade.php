@php use Carbon\Carbon;use Illuminate\Support\Facades\Route; @endphp
@extends('front.master')
@php
    if(Route::is('blog.index')) {
    $title = 'Bloq';
    } else {
    $title = 'Məhsullar';
    }
@endphp
@section('title')
    {{ $title }}
@endsection
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
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">
                            Ana Səhifə
                        </a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $title }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="blogs-section">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="@if(Route::is('search') || Route::is('product.category') || Route::is('product.tag')
                         || Route::is('product.age'))
						{{ route('product.index', $blog->slug) }}
						@else {{ route('blog.detail', $blog->slug) }} @endif"
                           class="blog-item">
                            <div class="blog-item-image">
                                @if($blog->image)
                                    <img src="{{ Storage::url($blog->image) }}"
                                         alt="{{ $blog->title }}"/>
                                @endif
                            </div>
                            <div class="blog-item-date">
                                @if(Route::is('search') || Route::is('product.category') || Route::is('product.tag')
                                || Route::is('product.age'))
                                    @if($blog->discount)
                                        <span style="text-decoration: line-through">
                                            {{ $blog->price }} ₼
                                        </span>
                                        {{ $blog->discount }} ₼
                                    @else
                                        {{ $blog->price }} ₼
                                    @endif
                                @else
                                    {{ Carbon::parse($blog->updated_at)->locale('az')->translatedFormat('j F') }}
                                @endif
                            </div>
                            <span class="blog-item-type">
                                @if(Route::is('search') || Route::is('product.category') || Route::is('product.tag')
                                || Route::is('product.age'))
                                    {{ $blog->categories->pluck('title')->join(', ') }}
                                @else
                                    {{ $blog->category->title }}
                                @endif
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
                    {{ $blogs->links() }}
                </nav>
            </div>
        </div>
    </div>
@endsection
