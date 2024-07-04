@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', 'Ana Səhifə')
@section('content')
    <section class="banner">
        <div class="container">
            <div class="banner-slider swiper">
                <div class="swiper-wrapper">
                    @foreach($products as $product)
                        <div class="swiper-slide">
                            <div class="slider-content">
                                <div class="slider-left">
                                    <div class="slider-sub-title">{{ $product->brand }}</div>
                                    <div class="slider-title">{{ $product->title }}</div>
                                    <a href="{{ route('product', $product->slug) }}" class="slider-btn">
                                        <span> Buy it now </span>
                                    </a>
                                </div>
                                <div class="slider-right">
                                    <div class="slider-img">
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}"/>
                                    </div>
                                </div>
                            </div>
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
    </section>
    <div class="container">
        <div class="categories-slider">
            <div class="cat-swiper swiper">
                <div class="swiper-wrapper">
                    @foreach($categories as $category)
                        <div class="swiper-slide">
                            <a href="" class="slider-item">
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
                                        <div class="discount">Get in now {{ $allProducts[0]->discount }}% off</div>
                                        <div class="name">
                                            {{ $allProducts[0]->title }}
                                        </div>
                                        <a href="{{ route('product', $allProducts[0]->slug) }}">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="banner-column-item banner-item bg-blue">
                                    <div class="banner_text">
                                        <div class="discount">get in now {{ $allProducts[1]->discount }}% off</div>
                                        <div class="name">{{ $allProducts[1]->title }}</div>
                                        <a href="{{ route('product', $allProducts[1]->slug) }}">buy now</a>
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
                                            <div class="discount">get in now {{ $allProducts[2]->discount }}% off</div>
                                            <div class="name">{{ $allProducts[2]->title }}</div>
                                            <a href="{{ route('product', $allProducts[2]->slug) }}">buy now</a>
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
                                            <div class="discount">get in now {{ $allProducts[2]->discount }}% off</div>
                                            <div class="name">{{ $allProducts[2]->title }}</div>
                                            <a href="{{ route('product', $allProducts[2]->slug) }}">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="banner-column-item banner-item bg_light">
                                        <div class="banner_text">
                                            <div class="discount">get in now {{ $allProducts[3]->discount }}% off</div>
                                            <div class="name">{{ $allProducts[3]->title }}</div>
                                            <a href="{{ route('product', $allProducts[3]->slug) }}">buy now</a>
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
                                <div class="discount">get in now {{ $allProducts[4]->discount }}% off</div>
                                <div class="name">{{ $allProducts[4]->title }}</div>
                                <a href="{{ route('product', $allProducts[4]->slug) }}">buy now</a>
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
            <div class="section-title">popular categories</div>
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    @foreach($categories->take(6) as $category)
                        <button class="nav-link @if($loop->first) active @endif" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#{{ $category->slug }}" type="button" role="tab"
                                aria-controls="nav-home"
                                aria-selected="true">
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
                            @foreach($category->products as $product)
                                <div class="product-card">
                                    <a href="{{ route('product', $product->slug) }}">
                                        <div class="product-image">
                                            <img src="{{ Storage::url($product->image) }}" alt=""/>
                                        </div>
                                    </a>
                                    <div class="product-cat">
                                        @foreach($product->categories as $category) @endforeach
                                        <a href="{{ route('product', $product->slug) }}">
                                            {{ $category->title }}
                                        </a>
                                    </div>
                                    <a href="{{ route('product', $product->slug) }}" class="product-name">
                                        {{ $product->title }}
                                    </a>
                                    <div class="price">
                                        @if($product->discount)
                                            <div class="old-price">{{ $product->price }} ₼</div>
                                        @endif
                                        <span>-</span>
                                        <div class="new-price">
                                            @if($product->discount)
                                                {{ $product->price - ($product->price * $product->discount / 100) }} ₼
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
