@php use Illuminate\Support\Facades\Storage; @endphp
@extends('front.master')
@section('title', 'Səbət')
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
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="cart-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="table-container">
                        <table class="cart-table">
                            <thead>
                            <tr>
                                <th class="pr-remove">
                                    <span class="screen-reader-text">remove</span>
                                </th>
                                <th class="pr-thumbnail">
                                    <span class="screen-reader-text">thumbnail</span>
                                </th>
                                <th class="pr-name">
                                    <span>product</span>
                                </th>
                                <th class="pr-price">
                                    <span>price</span>
                                </th>
                                <th class="pr-quantity">
                                    <span>quantity</span>
                                </th>
                                <th class="pr-subtotal">
                                    <span>subtotal</span>
                                </th>
                                <th>
                                    <span class="screen-reader-text">update</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                @foreach($item->products as $product)
                                    <tr>
                                        <td>
                                            <a href="{{ route('cart.delete', $product->id) }}" class="pr_remove"> x</a>
                                        </td>
                                        <td>
                                            <div class="pr-img">
                                                <a href="{{ route('product.index', $product->slug) }}">
                                                    <img src="{{ asset(Storage::url($product->image)) }}"
                                                         alt="{{ $product->title }}"/>
                                                </a>
                                            </div>
                                        </td>
                                        <td><a href="{{ route('product.index', $product->slug) }}" class="pr_name">
                                                {{ $product->title }}
                                            </a></td>
                                        <td class="pr_price">
                                            @if($product->discount)
                                                {{ $product->discount }}
                                            @else
                                                {{ $product->price }}
                                            @endif ₼
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.update', $product->id) }}" method="POST"
                                                  id="update-{{ $product->id }}">
                                                @csrf
                                                <input type="number" name="quantity" min="1"
                                                       max="{{ $product->quantity }}" value="@php
                                $cartProduct = $item->cart_products->where('product_id', $product->id)->first();
                                echo $cartProduct ? $cartProduct->quantity : 0;
                            @endphp" class="pr_quantity"/>
                                            </form>
                                            @if(session('error'))
                                                <div class="alert alert-danger mt-3">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="pr_price">@if($product->discount)
                                                {{ $cartProduct->quantity * $product->discount }}
                                            @else
                                                {{ $cartProduct->quantity * $product->price }}
                                            @endif ₼
                                        </td>
                                        <td>
                                            <div class="cart-footer mt-0">
                                                <button class="update-btn"
                                                        onclick="$('#update-{{ $product->id }}').submit()">
                                                    Update
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-footer">
                        <div class="add-cupon">
                            <form action="">
                                <input type="text" placeholder="cupon code"/>
                                <button>apply coupon</button>
                            </form>
                        </div>
                        <a href="{{ route('cart.empty') }}" class="update-btn bg-danger"> Empty cart</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cart-totals">
                        <div class="cart-totals-title">cart totals</div>
                        <div class="cart-totals-content">
                            <table cellspacing="0" class="shop_table shop_table_responsive">
                                <tbody>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total">
                                        <strong><span class="amount"><span class="symbol">$</span>
                                            {{ $total }}</span></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <form action="{{ route('cart.submit') }}" method="POST">
                                @csrf
                                <button type="submit" class="checkout-btn">Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
