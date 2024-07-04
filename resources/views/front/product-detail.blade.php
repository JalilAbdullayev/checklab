@php use Illuminate\Support\Facades\Storage;use Illuminate\Support\Str; @endphp
@extends('front.master')
@section('title', $product->title)
@section('css')
	<style>
        .product-image img {
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
					<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						{{ $product->title }}
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
						<img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" width="400"/>
					</div>
				</div>
				<div class="col-lg-5 mb-3">
					<div class="product-name">
						{{ $product->title }}
					</div>
					<div class="features">
						{{ $product->description }}
					</div>
					<div class="price">
						@if($product->discount)
							<div class="old-price">{{ $product->price }} ₼</div>
						@endif
						<div class="new-price">@if($product->discount)
								{{ $priceWithDiscount }}
							@else
								{{ $product->price }}
							@endif ₼
						</div>
					</div>
					<div class="details">
						<form action="{{ route('cart.store', $product->id) }}" method="POST">
							@csrf
							<div class="d-flex gap-3">
								<div class="counter">
									<button type="button" class="dec">-</button>
									<input type="number" value="1" min="0" max="{{ $product->quantity }}"
										   name="quantity" maxlength="{{ Str::length($product->quantity)}}"/>
									<button type="button" class="inc">+</button>
								</div>
								<button type="submit" class="add-to-cart">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
										<path
												d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
									</svg>
									Add to cart
								</button>
							</div>
						</form>
						@if(session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}
							</div>
						@endif
					</div>
					<div class="details-2">
						<ul>
							<li>
								<h4>
									Kateqoriyalar:
								</h4>
								@foreach($product->categories as $category)
									<a href="{{ route('product.category', $category->slug) }}">
										{{ $category->title }}
									</a>
								@endforeach
							</li>
							<li>
								<h4>Teqlər:</h4>
								@foreach($product->tags as $tag)
									<a href="{{ route('product.tag', $tag->slug) }}">
										{{ $tag->title }}
									</a>
								@endforeach
							</li>
							<li>
								<h4>Yaş qrupları:</h4>
								@foreach($product->ages as $age)
									<a href="{{ route('product.age', $age->slug) }}">
										{{ $age->title }}
									</a>
								@endforeach
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="product-rewievs">
				<nav>
					<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
						<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
								data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
								aria-selected="true">
							Haqqında
						</button>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<div class="desc-detail">
							{!! $product->text !!}
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
					@foreach($otherProducts as $product)
						<div class="swiper-slide">
							<div class="product-card">
								<a href="{{ route('product.index', $product->slug) }}">
									<div class="product-image">
										<img src="{{ Storage::url($product->image) }}" alt=""/>
									</div>
								</a>
								<div class="product-cat">
									@foreach($product->categories as $category)
										<a href="">
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
									@endif
									<span>-</span>
									<div class="new-price">@if($product->discount)
											{{ $product->price - ($product->price * $product->discount / 100) }}
										@else
											{{ $product->price }}
										@endif
										₼
									</div>
								</div>
								<button class="add-basket">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.426 13.695">
										<path
												d="M17.388 3.087 15.361 9.47a1.074 1.074 0 0 1-1.023.758H6.516a1.117 1.117 0 0 1-1.042-.7L2.481 1.515H.758A.758.758 0 0 1 .758 0h2.254a.776.776 0 0 1 .72.511l3.087 8.2h7.2l1.61-5.114H6.705a.758.758 0 1 1 0-1.515h9.963a.753.753 0 0 1 .606.322.735.735 0 0 1 .114.683ZM6.895 11.232a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Zm6.8 0a1.229 1.229 0 1 0 .871.36 1.249 1.249 0 0 0-.871-.36Z"/>
									</svg>
									Add to cart
								</button>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection
@section('js')
	<script>
        const input = $('input[type="number"]');
        $('.inc').click(function() {
            input.val(parseInt(input.val()) + 1);
            $('.dec').attr('disabled', false).css('cursor', 'pointer');
            if(input.val() == {{ $product->whereId($id)->first()->quantity }}) {
                $('.inc').attr('disabled', true).css('cursor', 'not-allowed');
            } else {
                $('.inc').attr('disabled', false);
            }
        })
        $('.dec').click(function() {
            if(input.val() > 1) {
                input.val(parseInt(input.val()) - 1);
                $('.inc').attr('disabled', false).css('cursor', 'pointer');
            } else {
                $('.dec').attr('disabled', true).css('cursor', 'not-allowed');
            }
        })
        if(input.val() <= 1) {
            $('.dec').attr('disabled', true).css('cursor', 'not-allowed');
        } else {
            $('.dec').attr('disabled', false).css('cursor', 'pointer');
        }
    </script>
@endsection
