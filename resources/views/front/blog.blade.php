@extends('front.master')
@section('title', 'Bloq')
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
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="blogs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="blog-detail.html" class="blog-item">
                        <div class="blog-item-image">
                            <img
                                src="https://enovathemes.com/propharm/wp-content/uploads/post8-600x400.jpg"
                                alt="blog image"
                            />
                        </div>
                        <div class="blog-item-date">
                            <span>4</span>
                            <span>dekabr</span>
                        </div>
                        <span class="blog-item-type">community impact</span>
                        <div class="blog-item-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            veniam quis autem illum pariatur adipisci tenetur nulla quas aliquam aliquid rerum provident
                            vitae ipsam delectus repudiandae quidem, necessitatibus maiores ipsum dicta libero
                            molestias! Quos laboriosam asperiores perferendis facere. Eius, fuga.
                        </div>
                        <button class="blog-item-button">
                            Read more
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 240.823 240.823"
                            >
                                <path
                                    d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"
                                ></path>
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="blog-detail.html" class="blog-item">
                        <div class="blog-item-image">
                            <img
                                src="https://enovathemes.com/propharm/wp-content/uploads/post8-600x400.jpg"
                                alt="blog image"
                            />
                        </div>
                        <div class="blog-item-date">
                            <span>4</span>
                            <span>dekabr</span>
                        </div>
                        <span class="blog-item-type">community impact</span>
                        <div class="blog-item-title">Lorem ipsum dolor sit.</div>
                        <button class="blog-item-button">
                            Read more
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 240.823 240.823"
                            >
                                <path
                                    d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"
                                ></path>
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="blog-detail.html" class="blog-item">
                        <div class="blog-item-image">
                            <img
                                src="https://enovathemes.com/propharm/wp-content/uploads/post8-600x400.jpg"
                                alt="blog image"
                            />
                        </div>
                        <div class="blog-item-date">
                            <span>4</span>
                            <span>dekabr</span>
                        </div>
                        <span class="blog-item-type">community impact</span>
                        <div class="blog-item-title">Lorem ipsum dolor sit.</div>
                        <button class="blog-item-button">
                            Read more
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 240.823 240.823"
                            >
                                <path
                                    d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"
                                ></path>
                            </svg>
                        </button>
                    </a>
                </div>
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
