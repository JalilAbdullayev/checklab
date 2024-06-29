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
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="pr_remove"> x</span>
                                </td>
                                <td>
                                    <div class="pr-img">
                                        <a href="">
                                            <img
                                                src="https://enovathemes.com/propharm/wp-content/uploads/product8-300x300.jpg"
                                                alt="pr img"
                                            /></a>
                                    </div>
                                </td>
                                <td><a href="" class="pr_name">Own Vitamin B1 250mg Tab X 75</a></td>
                                <td class="pr_price">33 azn</td>
                                <td>
                                    <input type="number" value="1" class="pr_quantity">
                                </td>
                                <td class="pr_price">323 m</td>

                            </tr>
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
                        <button class="update-btn"> Update cart</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cart-totals">
                        <div class="cart-totals-title">cart totals</div>
                        <div class="cart-totals-content">
                            <table
                                cellspacing="0"
                                class="shop_table shop_table_responsive"
                            >
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal">
                          <span class="amount">
                            <span class="symbol">$</span>31.00
                          </span>
                                    </td>
                                </tr>

                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total">
                                        <strong
                                        ><span class="amount"
                                            ><span class="symbol">$</span>31.00</span
                                            ></strong
                                        >
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="" class="checkout-btn">Checkout</a>
                            <a href="" class="forward-btn">Continue shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
