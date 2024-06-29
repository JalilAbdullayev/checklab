@extends('front.master')
@section('title', 'Product Detail')
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
                    <li class="breadcrumb-item active" aria-current="page">
                        Product detail
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="product-detail">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 mb-3">
                    <div class="product-image">

                        <img
                            src="./assets/images/product20-300x300.jpg"
                            alt="Zoom Image"
                            width="400"
                        />

                    </div>
                </div>
                <div class="col-lg-5 mb-3">
                    <div class="product-name">
                        Lorem ipsum dolor sit amet consectetur.
                    </div>
                    <ul class="features">
                        <li>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                style="fill: #ffffff"
                            >
                                <path
                                    d="M450.585 68.552L198.52 320.617 61.415 183.513 0 244.928l198.52 198.52L512 129.968z"
                                />
                            </svg>
                            Digital display
                        </li>
                        <li>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                style="fill: #ffffff"
                            >
                                <path
                                    d="M450.585 68.552L198.52 320.617 61.415 183.513 0 244.928l198.52 198.52L512 129.968z"
                                />
                            </svg>
                            Memory for 1 user
                        </li>
                        <li>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                style="fill: #ffffff"
                            >
                                <path
                                    d="M450.585 68.552L198.52 320.617 61.415 183.513 0 244.928l198.52 198.52L512 129.968z"
                                />
                            </svg>
                            Memory for 1 user
                        </li>
                    </ul>
                    <div class="price">
                        <div class="old-price">50 AZN</div>
                        <div class="new-price">40 AZN</div>
                    </div>
                    <div class="details">
                        <div class="d-flex gap-3">
                            <div class="counter">
                                <button class="dec">-</button>
                                <input type="number" value="1">
                                <button class="inc">+</button>
                            </div>
                            <button class="add-to-cart">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
                                    <path
                                        d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
                                </svg>
                                Add to cart
                            </button>
                        </div>
                        <button class="buy-now">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
                                <path
                                    d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
                            </svg>
                            Buy now
                        </button>
                    </div>
                    <div class="details-2">
                        <ul>
                            <li>
                                <h4>SKU:</h4>
                                <span>23232</span>
                            </li>
                            <li>
                                <h4>
                                    Categories:
                                </h4>
                                <a href="">
                                    Supplements
                                </a>,
                                <a href="">Vitamins</a>
                            </li>
                            <li>
                                <h4>Tag:</h4>
                                <a href="">Vitamins</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="social-icons mb-2">
                        <li>
                            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="product-rewievs">
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
                            Description


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
                            Additional information
                        </button>

                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div
                        class="tab-pane fade active show"
                        id="nav-home"
                        role="tabpanel"
                        aria-labelledby="nav-home-tab"
                    >
                        <div class="desc-detail">
                            <div class="desc-detail-title">
                                About this medication
                            </div>
                            <div class="desc-sub-title">
                                How should you use this medication?
                            </div>
                            <div class="desc-info">
                                Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                Iterative approaches to corporate strategy foster collaborative thinking to further the
                                overall value proposition. Organically grow the holistic world view of disruptive
                                innovation via workplace diversity and empowerment. Bring to the table win-win survival
                                strategies to ensure proactive domination. At the end of the day, going forward, a new
                                normal that has evolved from generation X is on the runway heading towards a streamlined
                                cloud solution. User generated content in real-time will have multiple touchpoints for
                                offshoring.
                            </div>
                            <ul class="features">
                                <li>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        style="fill: #ffffff"
                                    >
                                        <path
                                            d="M450.585 68.552L198.52 320.617 61.415 183.513 0 244.928l198.52 198.52L512 129.968z"
                                        />
                                    </svg>
                                    Digital display
                                </li>
                                <li>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        style="fill: #ffffff"
                                    >
                                        <path
                                            d="M450.585 68.552L198.52 320.617 61.415 183.513 0 244.928l198.52 198.52L512 129.968z"
                                        />
                                    </svg>
                                    Memory for 1 user
                                </li>
                                <li>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                        style="fill: #ffffff"
                                    >
                                        <path
                                            d="M450.585 68.552L198.52 320.617 61.415 183.513 0 244.928l198.52 198.52L512 129.968z"
                                        />
                                    </svg>
                                    Memory for 1 user
                                </li>
                            </ul>
                            <div class="desc-sub-title">
                                How should you use this medication?
                            </div>
                            <div class="desc-info">
                                Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                Iterative approaches to corporate strategy foster collaborative thinking to further the
                                overall value proposition. Organically grow the holistic world view of disruptive
                                innovation via workplace diversity and empowerment. Bring to the table win-win survival
                                strategies to ensure proactive domination. At the end of the day, going forward, a new
                                normal that has evolved from generation X is on the runway heading towards a streamlined
                                cloud solution. User generated content in real-time will have multiple touchpoints for
                                offshoring.
                            </div>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="nav-profile"
                        role="tabpanel"
                        aria-labelledby="nav-profile-tab"
                    >
                        <div class="info-table">
                            <table class="table">
                                <tr>
                                    <th>Brand</th>
                                    <td>Belt</td>
                                </tr>
                                <tr>
                                    <th>Condition
                                    </th>
                                    <td> Anxiety, Diabetes, High Cholesterol</td>
                                </tr>
                                <tr>
                                    <th>Form</th>
                                    <td>Belt</td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>Blue, Green, Orange</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <section class="related-product">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="related-product-title">
                    Related products
                </div>

                <div class="slider-arrows">
                    <div class="arrow-left">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                        </svg>
                    </div>
                    <div class="arrow-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="swiper related-products">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-card">
                            <a href="product-detail.html">
                                <div class="product-image">
                                    <img src="./assets/images/product20-300x300.jpg" alt=""/>
                                </div>
                            </a>

                            <div class="product-cat">
                                <a href="">Vitamins</a>
                                <a href="">Herbs</a>
                            </div>
                            <a href="product-detail.html" class="product-name">
                                Vitamin C 500mg Sugarless Tab X
                            </a>
                            <div class="price">
                                <div class="old-price">$15.00</div>
                                <span>-</span>
                                <div class="new-price">$ 10.00</div>
                            </div>
                            <button class="add-basket">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
                                    <path
                                        d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
                                </svg>
                                Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <a href="product-detail.html">
                                <div class="product-image">
                                    <img src="./assets/images/product20-300x300.jpg" alt=""/>
                                </div>
                            </a>

                            <div class="product-cat">
                                <a href="">Vitamins</a>
                                <a href="">Herbs</a>
                            </div>
                            <a href="product-detail.html" class="product-name">
                                Vitamin C 500mg Sugarless Tab X
                            </a>
                            <div class="price">
                                <div class="old-price">$15.00</div>
                                <span>-</span>
                                <div class="new-price">$ 10.00</div>
                            </div>
                            <button class="add-basket">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
                                    <path
                                        d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
                                </svg>
                                Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <a href="product-detail.html">
                                <div class="product-image">
                                    <img src="./assets/images/product20-300x300.jpg" alt=""/>
                                </div>
                            </a>

                            <div class="product-cat">
                                <a href="">Vitamins</a>
                                <a href="">Herbs</a>
                            </div>
                            <a href="product-detail.html" class="product-name">
                                Vitamin C 500mg Sugarless Tab X
                            </a>
                            <div class="price">
                                <div class="old-price">$15.00</div>
                                <span>-</span>
                                <div class="new-price">$ 10.00</div>
                            </div>
                            <button class="add-basket">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
                                    <path
                                        d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
                                </svg>
                                Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <a href="product-detail.html">
                                <div class="product-image">
                                    <img src="./assets/images/product20-300x300.jpg" alt=""/>
                                </div>
                            </a>

                            <div class="product-cat">
                                <a href="">Vitamins</a>
                                <a href="">Herbs</a>
                            </div>
                            <a href="product-detail.html" class="product-name">
                                Vitamin C 500mg Sugarless Tab X
                            </a>
                            <div class="price">
                                <div class="old-price">$15.00</div>
                                <span>-</span>
                                <div class="new-price">$ 10.00</div>
                            </div>
                            <button class="add-basket">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
                                    <path
                                        d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
                                </svg>
                                Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <a href="product-detail.html">
                                <div class="product-image">
                                    <img src="./assets/images/product20-300x300.jpg" alt=""/>
                                </div>
                            </a>

                            <div class="product-cat">
                                <a href="">Vitamins</a>
                                <a href="">Herbs</a>
                            </div>
                            <a href="product-detail.html" class="product-name">
                                Vitamin C 500mg Sugarless Tab X
                            </a>
                            <div class="price">
                                <div class="old-price">$15.00</div>
                                <span>-</span>
                                <div class="new-price">$ 10.00</div>
                            </div>
                            <button class="add-basket">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
                                    <path
                                        d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
                                </svg>
                                Add
                                to cart
                            </button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-card">
                            <a href="product-detail.html">
                                <div class="product-image">
                                    <img src="./assets/images/product20-300x300.jpg" alt=""/>
                                </div>
                            </a>

                            <div class="product-cat">
                                <a href="">Vitamins</a>
                                <a href="">Herbs</a>
                            </div>
                            <a href="product-detail.html" class="product-name">
                                Vitamin C 500mg Sugarless Tab X
                            </a>
                            <div class="price">
                                <div class="old-price">$15.00</div>
                                <span>-</span>
                                <div class="new-price">$ 10.00</div>
                            </div>
                            <button class="add-basket">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
                                    <path
                                        d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
                                </svg>
                                Add
                                to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
