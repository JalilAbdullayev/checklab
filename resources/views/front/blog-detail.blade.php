@php use Carbon\Carbon; @endphp
@extends('front.master')
@section('title', $blog->title)
@section('css')
	<style>
        .blog-detail-image img, .blog-item-image img {
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
					<li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blogs</a></li>
					<li class="breadcrumb-item">
						<a href="{{ route('blog.category', $blog->category->slug) }}">
							{{ $blog->category->title }}
						</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						{{ $blog->title }}
					</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="blog-detail-section">
		<div class="container">
			<div class="blog-detail-section-top">
				<div class="blog-detail-date">
					{{ Carbon::parse($blog->updated_at)->locale('az')->translatedFormat('j F, y') }}
				</div>
			</div>
			<div class="blog-detail-name">
				{{ $blog->title }}
			</div>
			@if($blog->image)
				<div class="blog-detail-image">
					<img src="{{ asset(Storage::url($blog->image)) }}" alt="{{ $blog->title }}"/>
					<a href="{{ route('blog.category', $blog->category->slug) }}">
						<div class="blog-detail-type">
							{{ $blog->category->title }}
						</div>
					</a>
				</div>
			@endif
			<div class="blog-detail-info">
				<div class="blog-detail-text">
					{!! $blog->text !!}
				</div>
				<div class="blog-detail-footer">
					<div class="tags">
						Tags:
						<ul class="tag-list">
							@foreach($blog->tags as $tag)
								<li>
									<a href="{{ route('blog.tag', $tag->slug) }}">
										{{ $tag->title }}
									</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="related-posts blogs-section">
		<div class="container">
			<div class="related-post-title">related posts</div>
			<div id="related-posts" class="swiper">
				<div class="swiper-wrapper">
					@foreach($otherPosts as $post)
						<div class="swiper-slide">
							<a href="{{ route('blog.detail', $post->slug) }}" class="blog-item">
								<div class="blog-item-image">
									@if($post->image)
										<img src="{{ asset(Storage::url($post->image)) }}"
											 alt="{{ $post->title }}"/>
									@endif
								</div>
								<div class="blog-item-date">
									<span>
                                        {{ Carbon::parse($post->updated_at)->locale('az')->translatedFormat('j F') }}
                                    </span>
								</div>
								<div class="blog-item-content">
									<span class="blog-item-type">{{ $post->category->title }}</span>
									<div class="blog-item-title">{{ $post->title }}</div>
									<button class="blog-item-button">
										Read more
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.823 240.823">
											<path
													d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"></path>
										</svg>
									</button>
								</div>
							</a>
						</div>
					@endforeach
                </div>
                <div class="arrows">
                    <div class="arrow-left">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.823 240.823">
                            <path
                                d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"></path>
                        </svg>
                    </div>
                    <div class="arrow-right">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.823 240.823">
                            <path
                                d="M57.633 129.007L165.93 237.268c4.752 4.74 12.451 4.74 17.215 0 4.752-4.74 4.752-12.439 0-17.179l-99.707-99.671 99.695-99.671c4.752-4.74 4.752-12.439 0-17.191-4.752-4.74-12.463-4.74-17.215 0L57.621 111.816c-4.679 4.691-4.679 12.511.012 17.191z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
