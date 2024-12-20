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

        .blog-item-type span {
            padding: 0 .25rem;
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
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                            Ana Səhifə
                        </a>
                    </li>
                    <li class="breadcrumb-item @if(Route::is('blog.index')) active @endif"
                        @if(Route::is('blog.index')) aria-current="page" @endif>
                        {{ $title }}
                    </li>
                    @if(Route::is('blog.index'))
                    @elseif(Route::is('product.tag'))
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $tag->title }}
                        </li>
                    @elseif(Route::is('product.category'))
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $category->title }}
                        </li>
                    @elseif(Route::is('product.age'))
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $age->title }}
                        </li>
                    @elseif(Route::is('search'))
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $search }}
                        </li>
                    @endif
                </ol>
            </nav>
        </div>
    </div>
    <div class="blogs-section">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="@if(Route::is('blog.index')) {{ route('blog.detail', $blog->slug) }} @else
                        javascript:void(0) @endif" class="blog-item">
                            <div class="blog-item-image">
                                @if($blog->image)
                                    <img src="{{ asset(Storage::url($blog->image)) }}"
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
                                    @foreach($blog->categories as $category)
                                        <span id="{{ $category->slug }}">
                                            {{ $category->title }}
                                        </span>
                                    @endforeach
                                @else
                                    {{ $blog->category->title }}
                                @endif
                            </span>
                            <div class="blog-item-title" id="{{ $blog->slug }}">
                                {{ $blog->title }}
                            </div>
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
@if(!Route::is('blog.index'))
    @section('js')
        <script>
            $('.blog-item-title').click(function() {
                let slug = $(this).attr('id');
                window.location.href = '{{ route('product.index', ':slug') }}'.replace(':slug', slug);
            })
            $('.blog-item-type span').click(function() {
                let slug = $(this).attr('id');
                window.location.href = '{{ route('product.category', ':slug') }}'.replace(':slug', slug);
            })
        </script>
    @endsection
@endif
