<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="{{ $settings->author }}"/>
    <meta name="description" content="{{ $settings->description }}"/>
    <meta name="keywords" content="{{ $settings->keywords }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title') | {{ $settings->title }}
    </title>
    <link rel="shortcut icon" href="{{ asset("storage/" . $settings->favicon) }}"/>
    <link rel="stylesheet" href="{{ asset("front/swiper/swiper.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("front/bootstrap/css/bootstrap.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("front/css/reset.css") }}"/>
    <link rel="stylesheet" href="{{ asset("front/css/global.css") }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset("front/css/main.css") }}"/>
    <link rel="stylesheet" href="{{ asset("front/css/mobile.css") }}"/>
    @yield('css')
</head>
<body>
<div class="search-box">
    <button class="search-box-toggle">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="close"
            viewBox="0 0 47.971 47.971"
        >
            <path
                d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
          c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
          C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
          s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"
            ></path>
        </svg>
    </button>
    <form action="" class="search-form">
        <select name="" id="">
            <option value="category">category</option>
            <option value="category1">category1</option>
            <option value="category2">category2</option>
        </select>
        <input type="text" placeholder="Nə axtarırsınız?"/>
        <button class="search-btn">Search</button>
    </form>
</div>

<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-info">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                        quaerat dolores repellat.
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="language-switcher">
                        <div class="language-toggle">
                            <span class="current-language">En</span>
                            <img
                                class="arrow-language"
                                src="front/images/icons/arrow-down.svg"
                                alt="arrow"
                            />
                        </div>
                        <div class="language-box">
                            <ul class="language-switcher-content">
                                <li>
                                    <a href="">
                                        <img src="front/images/icons/az.png" alt="az flag"/>
                                        <span>Azerbaijan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="front/images/icons/en.svg" alt="en flag"/>
                                        <span>English</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-middle-content">
                <div class="header-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('storage/' . $settings->logo) }}" alt="{{ $settings->title }}"/>
                    </a>
                </div>
                <div class="header-product-search">
                    <div class="product-search">
                        <form action="">
                            <select name="category" class="category">
                                <option clas="default">Kataloq</option>
                                <option>Hədiyyə check up kartları</option>
                                <option>Bestseller</option>
                                <option>Genetik panellər</option>
                            </select>
                            <div class="search-wrapper">
                                <input type="text" placeholder="Axtardığınız sözü yazın"/>
                                <img
                                    class="loader"
                                    src="front/images/icons/loader.svg"
                                    alt="loader"
                                />
                                <button type="submit" class="input-after-btn">
                                    <img
                                        src="front/images/icons/search.svg"
                                        alt="search"
                                    />
                                </button>
                                <div class="search-results">
                                    <ul class="product-list">
                                        <li>
                                            <a href="">Bestseller</a>
                                        </li>
                                    </ul>
                                    <span>No results</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="call">
                    <img src="front/images/icons/phone.svg" alt="phone"/>
                    <a class="tel" href="tel:{{ $contact->phone }}">
                        {{ $contact->phone }}
                    </a>
                </div>
                <div class="mobile-column">
                    <button class="search-mobile-toggle">
                        <svg viewBox="0 0 6.35 6.35" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.894.511a2.384 2.384 0 0 0-2.38 2.38 2.386 2.386 0 0 0 2.38 2.384c.56 0 1.076-.197 1.484-.523l.991.991a.265.265 0 0 0 .375-.374l-.991-.992a2.37 2.37 0 0 0 .523-1.485C5.276 1.58 4.206.51 2.894.51zm0 .53c1.026 0 1.852.825 1.852 1.85S3.92 4.746 2.894 4.746s-1.851-.827-1.851-1.853.825-1.852 1.851-1.852z"
                            ></path>
                        </svg>
                    </button>
                    <button class="mobile-toggle">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-2">
                    <div class="category">
                        <div class="category-toggle">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 14.678 13.21"
                            >
                                <path
                                    d="M13.944 1.468H.734A.734.734 0 1 1 .734 0h13.21a.734.734 0 0 1 0 1.468ZM9.064 4.66a.736.736 0 0 0-.734-.734H.73a.734.734 0 0 0 0 1.468h7.6a.736.736 0 0 0 .734-.734ZM11.3 8.568a.736.736 0 0 0-.734-.734H.734a.734.734 0 1 0 0 1.468h9.834a.736.736 0 0 0 .732-.734Zm2.715 3.908a.736.736 0 0 0-.734-.734H.789a.734.734 0 1 0 0 1.468h12.494a.736.736 0 0 0 .734-.734Z"
                                ></path>
                            </svg>
                            All categories
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Ana səhifə</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">Haqqımızda</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Bloq</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Əlaqə</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="actions">
                        <a href="wishlist.html" class="wishlist-btn">
                            <img
                                src="front/images/icons/wishlist.svg"
                                alt="wishlist"
                            />
                        </a>
                        <a href="c" class="basket-btn">
                            <img src="front/images//icons/cart.svg" alt="cart"/>
                            <span class="count">1</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mega-menu">
                <div class="mega-menu-category">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2">
                            <ul class="main-category">
                                <li>
                                    <a href="">Allergiya Paketləri</a>
                                </li>
                                <li>
                                    <a href="">Genetik paketlər</a>
                                </li>
                                <li>
                                    <a href="">Kişilər üçün</a>
                                </li>
                                <li>
                                    <a href="">Qadınlar üçün</a>
                                </li>
                                <li>
                                    <a href="">Uşaqlar üçün</a>
                                </li>
                                <li>
                                    <a href="">Ümumi check up</a>
                                </li>
                                <li>
                                    <a href="">Hədiyyə kartları</a>
                                </li>
                                <li>
                                    <a href="">Bestseller</a>
                                </li>
                                <li>
                                    <a href="">Genetik panellər</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2">
                            <div class="mega-menu-alt-category">
                                <a href="" class="category-name"> Allergiya paketləri </a>
                                <ul>
                                    <li>
                                        <a href="">lorem 1</a>
                                    </li>
                                    <li>
                                        <a href="">lorem 1</a>
                                    </li>
                                    <li>
                                        <a href="">lorem 1</a>
                                    </li>
                                    <li>
                                        <a href="">lorem 1</a>
                                    </li>
                                </ul>
                                <a href="" class="read-more">view all</a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8">
                            <div class="mega-menu-slider">
                                <div class="slider-title">recent medicine</div>
                                <div class="mega-slider">
                                    <div id="mega-slider" class="swiper product-row">
                                        <div class="slider-arrows">
                                            <div class="arrow-left">
                                                <img
                                                    src="front/images/icons/ch-left.svg"
                                                    alt="arrow-left"
                                                />
                                            </div>
                                            <div class="arrow-right">
                                                <img
                                                    src="front/images/icons/ch-right.svg"
                                                    alt="arrow-right"
                                                />
                                            </div>
                                        </div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-card">
                                                    <a href="product-detail.html">
                                                        <div class="product-image">
                                                            <img
                                                                src="front/images/product20-300x300.jpg"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </a>

                                                    <div class="product-cat">
                                                        <a href="">Vitamins</a>
                                                        <a href="">Herbs</a>
                                                    </div>
                                                    <a
                                                        href="product-detail.html"
                                                        class="product-name"
                                                    >
                                                        Vitamin C 500mg Sugarless Tab X
                                                    </a>
                                                    <div class="price">
                                                        <div class="old-price">$15.00</div>
                                                        <span>-</span>
                                                        <div class="new-price">$ 10.00</div>
                                                    </div>
                                                    <button class="add-basket">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 17.426 13.695"
                                                        >
                                                            <path
                                                                d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"
                                                            />
                                                        </svg>
                                                        Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card">
                                                    <a href="product-detail.html">
                                                        <div class="product-image">
                                                            <img
                                                                src="front/images/product20-300x300.jpg"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </a>

                                                    <div class="product-cat">
                                                        <a href="">Vitamins</a>
                                                        <a href="">Herbs</a>
                                                    </div>
                                                    <a
                                                        href="product-detail.html"
                                                        class="product-name"
                                                    >
                                                        Vitamin C 500mg Sugarless Tab X
                                                    </a>
                                                    <div class="price">
                                                        <div class="old-price">$15.00</div>
                                                        <span>-</span>
                                                        <div class="new-price">$ 10.00</div>
                                                    </div>
                                                    <button class="add-basket">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 17.426 13.695"
                                                        >
                                                            <path
                                                                d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"
                                                            />
                                                        </svg>
                                                        Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card">
                                                    <a href="product-detail.html">
                                                        <div class="product-image">
                                                            <img
                                                                src="front/images/product20-300x300.jpg"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </a>

                                                    <div class="product-cat">
                                                        <a href="">Vitamins</a>
                                                        <a href="">Herbs</a>
                                                    </div>
                                                    <a
                                                        href="product-detail.html"
                                                        class="product-name"
                                                    >
                                                        Vitamin C 500mg Sugarless Tab X
                                                    </a>
                                                    <div class="price">
                                                        <div class="old-price">$15.00</div>
                                                        <span>-</span>
                                                        <div class="new-price">$ 10.00</div>
                                                    </div>
                                                    <button class="add-basket">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 17.426 13.695"
                                                        >
                                                            <path
                                                                d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"
                                                            />
                                                        </svg>
                                                        Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card">
                                                    <a href="product-detail.html">
                                                        <div class="product-image">
                                                            <img
                                                                src="front/images/product20-300x300.jpg"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </a>

                                                    <div class="product-cat">
                                                        <a href="">Vitamins</a>
                                                        <a href="">Herbs</a>
                                                    </div>
                                                    <a
                                                        href="product-detail.html"
                                                        class="product-name"
                                                    >
                                                        Vitamin C 500mg Sugarless Tab X
                                                    </a>
                                                    <div class="price">
                                                        <div class="old-price">$15.00</div>
                                                        <span>-</span>
                                                        <div class="new-price">$ 10.00</div>
                                                    </div>
                                                    <button class="add-basket">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 17.426 13.695"
                                                        >
                                                            <path
                                                                d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"
                                                            />
                                                        </svg>
                                                        Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-card">
                                                    <a href="product-detail.html">
                                                        <div class="product-image">
                                                            <img
                                                                src="front/images/product20-300x300.jpg"
                                                                alt=""
                                                            />
                                                        </div>
                                                    </a>

                                                    <div class="product-cat">
                                                        <a href="">Vitamins</a>
                                                        <a href="">Herbs</a>
                                                    </div>
                                                    <a
                                                        href="product-detail.html"
                                                        class="product-name"
                                                    >
                                                        Vitamin C 500mg Sugarless Tab X
                                                    </a>
                                                    <div class="price">
                                                        <div class="old-price">$15.00</div>
                                                        <span>-</span>
                                                        <div class="new-price">$ 10.00</div>
                                                    </div>
                                                    <button class="add-basket">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 17.426 13.695"
                                                        >
                                                            <path
                                                                d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"
                                                            />
                                                        </svg>
                                                        Add to cart
                                                    </button>
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
        </div>
    </div>
</header>
<div class="mobile-overlay"></div>
<div class="mobile-header">
    <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button
                class="nav-link active"
                id="nav-home-tab"
                data-bs-toggle="tab"
                data-bs-target="#nav-home"
                type="button"
                role="tab"
                aria-controls="nav-home"
                aria-selected="true"
            >
                Menu
            </button>
            <button
                class="nav-link"
                id="nav-profile-tab"
                data-bs-toggle="tab"
                data-bs-target="#nav-profile"
                type="button"
                role="tab"
                aria-controls="nav-profile"
                aria-selected="false"
            >
                Shop
            </button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div
            class="tab-pane fade active show"
            id="nav-menu"
            role="tabpanel"
            aria-labelledby="nav-menu-tab"
        >
            <ul class="list">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="">Blog</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
                <li>
                    <a href="">About us</a>
                </li>
            </ul>
        </div>
        <div
            class="tab-pane fade"
            id="nav-shop"
            role="tabpanel"
            aria-labelledby="nav-shop-tab"
        >
            <ul class="list">
                <li><a href="">Allergiya Paketləri </a></li>
                <li><a href=""> Genetik paketlər </a></li>
                <li><a href=""> Kişilər üçün </a></li>
                <li><a href=""> Qadınlar üçün </a></li>
                <li><a href=""> Ümumi check up</a></li>
                <li><a href=""> Hədiyyə kartları</a></li>
            </ul>
        </div>
    </div>
    <div class="call-btn">
        <a href="tel:43434"
        ><img src="front/images/icons/phone.svg" alt="phone"
            />43434</a>
    </div>
    <div class="language-switcher">
        <div class="language-toggle">
          <span class="current-language">En <svg xmlns="http://www.w3.org/2000/svg" fill="#fff"
                                                 viewBox="0 0 451.847 451.847"><path d="M225.923 354.706c-8.098 0-16.195-3.092-22.369-9.263L9.27
            151.157c-12.359-12.359-12.359-32.397 0-44.751 12.354-12.354 32.388-12.354 44.748 0l171.905 171.915 171.906-171.909c12.359-12.354 32.391-12.354 44.744 0 12.365 12.354 12.365 32.392 0 44.751L248.292 345.449c-6.177 6.172-14.274 9.257-22.369 9.257z"></path></svg></span>
            <img class="arrow-language" src="front/images/icons/arrow-down.svg" alt="arrow">
        </div>
        <div class="language-box box">
            <ul class="language-switcher-content">
                <li>
                    <a href="">
                        <img src="front/images/icons/az.png" alt="az flag">
                        <span>Azerbaijan</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="front/images/icons/en.svg" alt="en flag">
                        <span>English</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<main>
    @yield('content')
</main>
<footer class="footer">
    <div class="subscribe">
        <div class="container">
            <div class="subscribe-content">
                <div class="subscribe-title">Join our newsletter</div>
                <div class="subscribe-desc">
                    Join over half a million vitamin lovers and get our latest deals,
                    articles, and resources!
                </div>
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <div class="form-content">
                        <input type="email" name="subscriber" placeholder="E-mail adres"/>
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#ffffff">
                                <path
                                    d="M507.606 4.394A15.002 15.002 0 0 0 492.689.633L33.808 138.298C13.586 144.364 0 162.624 0 183.743c0 20.826 13.985 39.367 34.011 45.089L227.8 284.2l55.368 193.789C288.89 498.014 307.431 512 328.265 512c21.111 0 39.371-13.586 45.438-33.808L511.367 19.31a14.996 14.996 0 0 0-3.761-14.916zM30 183.736c0-7.761 4.994-14.473 12.428-16.703L444.324 46.464 235.568 255.22 42.252 199.987C35.039 197.925 30 191.246 30 183.736zm314.968 285.836c-2.23 7.434-8.942 12.428-16.711 12.428-7.503 0-14.182-5.038-16.243-12.252l-55.233-193.316L465.537 67.676z"/>
                            </svg>
                            <i class="fa-regular fa-envelope"></i> Subscribe
                        </button>
                    </div>
                    @error('subscriber')
                    <div class="alert alert-danger w-25 mt-3 mx-auto">{{ $message }}</div>
                    @enderror
                </form>
            </div>
        </div>
    </div>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 co-md-4 mb-3">
                    <div class="footer-column">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('storage/' . $settings->logo) }}" alt="{{ $settings->title }}"/>
                            </a>
                        </div>
                        <div class="address">
                            {{ $contact->address }}
                        </div>
                        <a href="" class="map-link">Show on map</a>
                        <ul class="footer-social">
                            <li>
                                <a href="{{ $contact->facebook }}">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $contact->instagram }}">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $contact->whatsapp }}">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 co-md-4 mb-3">
                    <div class="footer-column">
                        <div class="footer-column-title">Need help</div>
                        <a href="tel:{{ $contact->phone }}" class="phone-num">
                            {{ $contact->phone }}
                        </a>
                        <ul class="work-hours">
                            {!! $contact->work_hours !!}
                        </ul>
                        <a href="mailto:{{ $contact->email }}" class="gmail">
                            <i class="fa-regular fa-envelope"></i>{{ $contact->email }}
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 co-md-4 mb-3">
                    <div class="footer-column">
                        <div class="footer-column-title">Information</div>
                        <nav>
                            <ul class="nav-list">
                                <li>
                                    <a href="{{ route('about') }}">Haqqımızda</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">Bloq </a>
                                </li>
                                <li>
                                    <a href="">Kampaniyalar</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Əlaqə</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
            <div class="copyright">
                Copyright {{ date('Y') == 2024 ? 2024 : '2024 -' . date('Y') }} {{ $settings->title }}. All Rights
                Reserved
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset("front/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("front/bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("front/swiper/swiper-bundle.min.js") }}"></script>
<script src="{{ asset("front/js/slider.js") }}"></script>
<script src="{{ asset("front/js/main.js") }}"></script>
@yield('js')
</body>
</html>
