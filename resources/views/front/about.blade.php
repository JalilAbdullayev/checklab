@extends('front.master')
@section('title', 'Haqqımızda')
@section('css')
	<style>
        .blog-detail-image img {
            object-fit: contain !important;
        }
	</style>
@endsection
@section('content')
	<div class="breadcrumb">
		<div class="container">
			<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg + xml,
                %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;);">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}">Ana Səhifə</a></li>
					<li class="breadcrumb-item">Haqqımızda</li>

				</ol>
			</nav>
		</div>
	</div>
	<div class="blog-detail-section">
		<div class="container">
			<div class="blog-detail-name">
				{{ $about->title }}
			</div>
			<div class="blog-detail-image">
				<img src="{{ asset('storage/' . $about->image) }}" alt="blog detail image"/>
			</div>
			<div class="blog-detail-info">
				<div class="blog-detail-text">
					{!! $about->about !!}
				</div>
				<div class="blog-detail-footer">
					<ul class="blog-social-list">
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
        </div>
    </div>
@endsection
