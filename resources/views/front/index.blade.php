@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', 'Ana Səhifə')
@section('css')
    <style>
        .products:first-child {
            margin-top: 3rem;
        }
    </style>
@endsection
@section('content')
    <section class="products">
        <div class="container">
            <div class="section-title">
                Kateqoriyalar
            </div>
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    @foreach($categories as $category)
                        <button class="nav-link @if($loop->first) active @endif" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#{{ $category->slug }}" type="button" role="tab"
                                aria-controls="nav-home" aria-selected="true">
                            {{ $category->title }}
                        </button>
                    @endforeach
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                @foreach($categories as $category)
                    <div class="tab-pane fade show @if($loop->first) active @endif" id="{{ $category->slug }}"
                         role="tabpanel"
                         aria-labelledby="{{ $category->slug }}-tab">
                        <div class="product-row">
                            @foreach($category->products()->inRandomOrder()->get() as $product)
                                <div class="product-card">
                                    <a href="{{ route('product.index', $product->slug) }}">
                                        <div class="product-image">
                                            <img src="{{ Storage::url($product->image) }}" alt=""/>
                                        </div>
                                    </a>
                                    <div class="product-cat">
                                        @foreach($product->categories as $category)
                                            <a href="{{ route('product.category', $category->slug) }}">
                                                {{ $category->title }}
                                            </a>
                                        @endforeach
                                    </div>
                                    <a href="{{ route('product.index', $product->slug) }}" class="product-name">
                                        {{ $product->title }}
                                    </a>
                                    <div class="price">
                                        @if($product->discount)
                                            <div class="old-price">{{ $product->price }} ₼</div>
                                            <span>-</span>
                                        @endif
                                        <div class="new-price">
                                            @if($product->discount)
                                                {{ $product->discount }} ₼
                                            @else
                                                {{ $product->price }} ₼
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="container">
        <div class="categories-slider">
            <div class="cat-swiper swiper">
                <div class="swiper-wrapper">
                    @foreach($productCategories as $category)
                        <div class="swiper-slide">
                            <a href="{{ route('product.category', $category->slug) }}" class="slider-item">
                                @if($category->icon)
                                    <div class="category-img">
                                        <img src="{{ Storage::url($category->icon) }}" alt="category"/>
                                    </div>
                                @endif
                                <div class="category-name">
                                    {{ $category->title }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-navigations">
                    <div class="arrow-left">
                        <img src="{{ asset("front/images/icons/ch-left.svg") }}" alt="arrow-left"/>
                    </div>
                    <div class="arrow-right">
                        <img src="{{ asset("front/images/icons/ch-right.svg") }}" alt="arrow-right"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="category-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banners-left">
                        <div class="row @if(count($allProducts) == 3) flex-nowrap @endif">
                            <div class="col-lg-8">
                                <div class="banner-row-item bg-gray banner-item">
                                    <div class="banner_img">
                                        <img src="{{ Storage::url($allProducts[0]->image) }}" alt="product"/>
                                    </div>
                                    <div class="banner_text">
                                        <a href="{{ route('product.index', $allProducts[0]->slug) }}">
                                            <div class="name">{{ $allProducts[0]->title }}</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="banner-column-item banner-item bg-blue">
                                    <div class="banner_text">
                                        <a href="{{ route('product.index', $allProducts[1]->slug) }}">
                                            <div class="name">{{ $allProducts[1]->title }}</div>
                                        </a>
                                    </div>
                                    <div class="banner_img">
                                        <img src="{{ Storage::url($allProducts[1]->image) }}" alt="product"/>
                                    </div>
                                </div>
                            </div>
                            @if(count($allProducts) == 3)
                                <div class="col-lg-4">
                                    <div class="banner-column-item banner-item bg-blue">
                                        <div class="banner_text">
                                            <a href="{{ route('product.index', $allProducts[2]->slug) }}">
                                                <div class="name">{{ $allProducts[2]->title }}</div>
                                            </a>
                                        </div>
                                        <div class="banner_img">
                                            <img src="{{ Storage::url($allProducts[2]->image) }}" alt="product"/>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @if(count($allProducts)>3)
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="banner-row-item banner-item bg-green">
                                        <div class="banner_img">
                                            <img src="{{ Storage::url($allProducts[2]->image) }}" alt="product"/>
                                        </div>
                                        <div class="banner_text">
                                            <a href="{{ route('product.index', $allProducts[2]->slug) }}">
                                                <div class="name">{{ $allProducts[2]->title }}</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="banner-column-item banner-item bg_light">
                                        <div class="banner_text">
                                            <a href="{{ route('product.index', $allProducts[3]->slug) }}">
                                                <div class="name">{{ $allProducts[3]->title }}</div>
                                            </a>
                                        </div>
                                        <div class="banner_img">
                                            <img src="{{ Storage::url($allProducts[3]->image) }}" alt="product"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                @if(count($allProducts)>4)
                    <div class="col-lg-4">
                        <div class="banner-column-item banner-item banner-big-item bg-purple">
                            <div class="banner_text">
                                <a href="{{ route('product.index', $allProducts[4]->slug) }}">
                                    <div class="name">{{ $allProducts[4]->title }}</div>
                                </a>
                            </div>
                            <div class="banner_img">
                                <img src="{{ Storage::url($allProducts[4]->image) }}" alt="product"/>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="section-title">
                Yaş qrupları
            </div>
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    @foreach($ages->take(6) as $age)
                        <button class="nav-link @if($loop->first) active @endif" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#i{{ $age->slug }}" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">
                            {{ $age->title }}
                        </button>
                    @endforeach
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                @foreach($ages as $age)
                    <div class="tab-pane fade show @if($loop->first) active @endif" id="i{{ $age->slug }}"
                         role="tabpanel" aria-labelledby="{{ $age->slug }}-tab">
                        <div class="product-row">
                            @foreach($age->products()->inRandomOrder()->get() as $product)
                                <div class="product-card">
                                    <a href="{{ route('product.index', $product->slug) }}">
                                        <div class="product-image">
                                            <img src="{{ Storage::url($product->image) }}" alt=""/>
                                        </div>
                                    </a>
                                    <div class="product-cat">
                                        @foreach($product->categories as $age)
                                            <a href="{{ route('product.category', $age->slug) }}">
                                                {{ $age->title }}
                                            </a>
                                        @endforeach
                                    </div>
                                    <a href="{{ route('product.index', $product->slug) }}" class="product-name">
                                        {{ $product->title }}
                                    </a>
                                    <div class="price">
                                        @if($product->discount)
                                            <div class="old-price">{{ $product->price }} ₼</div>
                                            <span>-</span>
                                        @endif
                                        <div class="new-price">
                                            @if($product->discount)
                                                {{ $product->discount }} ₼
                                            @else
                                                {{ $product->price }} ₼
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
