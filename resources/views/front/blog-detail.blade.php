@extends('front.master')
@section('title', 'Blog Detail')
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
                    <li class="breadcrumb-item"><a href="blog.html">Blogs</a></li>
                    <li class="breadcrumb-item">
                        <a href="blog.html">Pharmacy & Healthcare</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        COVID-19 most frequently asked questions
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="blog-detail-section">
        <div class="container">
            <div class="blog-detail-section-top">
                <div class="blog-detail-author">John Smith</div>
                <div class="blog-detail-date">December 5,21</div>
            </div>
            <div class="blog-detail-name">
                COVID-19 most frequently asked questions
            </div>
            <div class="blog-detail-image">
                <img
                    src="https://enovathemes.com/propharm/wp-content/uploads/post8-1240x580.jpg"
                    alt="blog detail image"
                />
                <div class="blog-detail-type">COVID-19 most</div>
            </div>

            <div class="blog-detail-info">
                <div class="blog-detail-sub-title">
                    Scientists finding treatment or vaccine for coronavirus infection.
                </div>
                <div class="blog-detail-text">
                    Leverage agile frameworks to provide a robust synopsis for high
                    level overviews. Iterative approaches to corporate strategy foster
                    collaborative thinking to further the overall value proposition.
                    Organically grow the holistic world view of disruptive innovation
                    via workplace diversity and empowerment. Bring to the table
                    win-win survival strategies to ensure proactive domination.
                    <br/>
                    At the end of the day, going forward, a new normal that has
                    evolved from generation X is on the runway heading towards a
                    streamlined cloud solution. User generated content in real-time
                    will have multiple touchpoints for offshoring. Capitalize on low
                    hanging fruit to identify a ballpark value added activity to beta
                    test. Override the digital divide with additional clickthroughs
                    from DevOps. Nanotechnology immersion along the information
                    highway will close the loop on focusing solely on the bottom line.
                </div>
            </div>
            <div class="blog-detail-image">
                <img
                    src="https://enovathemes.com/propharm/wp-content/uploads/post8-1240x580.jpg"
                    alt="blog detail image"
                />
            </div>
            <div class="blog-detail-info">
                <div class="blog-detail-sub-title">
                    Scientists finding treatment or vaccine for coronavirus infection.
                </div>
                <div class="blog-detail-text">
                    Leverage agile frameworks to provide a robust synopsis for high
                    level overviews. Iterative approaches to corporate strategy foster
                    collaborative thinking to further the overall value proposition.
                    Organically grow the holistic world view of disruptive innovation
                    via workplace diversity and empowerment. Bring to the table
                    win-win survival strategies to ensure proactive domination.
                    <br/>
                    At the end of the day, going forward, a new normal that has
                    evolved from generation X is on the runway heading towards a
                    streamlined cloud solution. User generated content in real-time
                    will have multiple touchpoints for offshoring. Capitalize on low
                    hanging fruit to identify a ballpark value added activity to beta
                    test. Override the digital divide with additional clickthroughs
                    from DevOps. Nanotechnology immersion along the information
                    highway will close the loop on focusing solely on the bottom line.
                </div>
                <div class="blog-detail-footer">
                    <div class="tags">
                        Tags:
                        <ul class="tag-list">
                            <li><a href="">Covid 19</a></li>
                            <li><a href="">Propharm</a></li>
                        </ul>
                    </div>
                    <ul class="blog-social-list">
                        <li>
                            <a href="">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="related-posts blogs-section">
        <div class="container">
            <div class="related-post-title">related posts</div>
            <div id="related-posts" class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
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
                            <div class="blog-item-content">
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
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
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
                            <div class="blog-item-content">
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
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
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
                            <div class="blog-item-content">
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
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
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
                            <div class="blog-item-content">
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
                            </div>
                        </a>
                    </div>
                </div>
                <div class="arrows">
                    <div class="arrow-left">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 240.823 240.823"
                        >
                            <path
                                d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"
                            ></path>
                        </svg>
                    </div>
                    <div class="arrow-right">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 240.823 240.823"
                        >
                            <path
                                d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
