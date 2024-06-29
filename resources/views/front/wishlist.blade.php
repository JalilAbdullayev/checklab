@extends('front.master')
@section('title', 'Seçilmişlər')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <nav
                style="
              --bs-breadcrumb-divider: url(
                &#34;data:image/svg + xml,
                %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;
              );
            "
                aria-label="breadcrumb"
            >
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Wishlist</li>

                </ol>
            </nav>
        </div>
    </div>
    <div class="wishlist">
        <div class="container">
            <ul class="wishlist-table">
                <li>
                    <a href="product-detail.html">
                        <div class="product-image-wrapper">
                            <img src="./assets/images/product8-300x300.jpg" alt="product">
                        </div>
                        <div class="product-data">
                            <h3>Product name</h3>
                            <div class="product-price">
                                <span class="sale-price">$44</span>
                                <span class="regular-price">$48</span>
                            </div>
                        </div>
                    </a>
                    <div class="wishlist-remove">
                        <svg xmlns="http://www.w3.org/2000/svg" class="close" viewBox="0 0 47.971 47.971">
                            <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                      c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                      C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                      s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"></path>
                        </svg>
                    </div>
                </li>
                <li>
                    <a href="product-detail.html">
                        <div class="product-image-wrapper">
                            <img src="./assets/images/product8-300x300.jpg" alt="product">
                        </div>
                        <div class="product-data">
                            <h3>Product name</h3>
                            <div class="product-price">
                                <span class="sale-price">$44</span>
                                <span class="regular-price">$48</span>
                            </div>
                        </div>
                    </a>
                    <div class="wishlist-remove">
                        <svg xmlns="http://www.w3.org/2000/svg" class="close" viewBox="0 0 47.971 47.971">
                            <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                      c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                      C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                      s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"></path>
                        </svg>
                    </div>
                </li>

            </ul>
        </div>
    </div>
@endsection
