@php use App\Models\Cart;use App\Models\Message;use App\Models\Order;use App\Models\Product;use App\Models\Subscriber;use Illuminate\Support\Facades\Auth; @endphp
@extends('admin.layouts.master')
@section('title', 'Home')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">
                @yield('title')
            </h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item active">
                        Home
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- Info box -->
    <div class="row g-0">
        <div class="@if(Auth::user()->role < 2) col-lg-3 @else col-lg-6 @endif col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icons-Shopping-Cart"></i></h3>
                                    <p class="text-muted text-uppercase">
                                        Sifarişlər
                                    </p>
                                </div>
                                <div class="ms-auto">
                                    <h2 class="counter text-primary">
                                        @if(Auth::user()->role < 2)
                                            {{ Order::count() }}
                                        @else
                                            {{ Order::whereUserId(Auth::user()->id)->count() }}
                                        @endif
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="@if(Auth::user()->role < 2) col-lg-3 @else col-lg-6 @endif col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icon-bag"></i></h3>
                                    <p class="text-muted text-uppercase">
                                        @if(Auth::user()->role < 2) Məhsullar @else Səbət @endif
                                    </p>
                                </div>
                                <div class="ms-auto">
                                    <h2 class="counter text-cyan">
                                        @if(Auth::user()->role < 2)
                                            {{ Product::count() }}
                                        @else
                                            {{ Cart::whereUserId(Auth::user()->id)->firstOrFail()->cart_products()->count() }}
                                        @endif
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::user()->role < 2)
            <div class="col-lg-3 col-md-6">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3><i class="icon-envelope"></i></h3>
                                        <p class="text-muted text-uppercase">
                                            Mesajlar
                                        </p>
                                    </div>
                                    <div class="ms-auto">
                                        <h2 class="counter text-purple">
                                            {{ Message::count() }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h3><i class="icon-user"></i></h3>
                                        <p class="text-muted text-uppercase">
                                            Abunəçilər
                                        </p>
                                    </div>
                                    <div class="ms-auto">
                                        <h2 class="counter text-success">
                                            {{ Subscriber::count() }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <!-- End Info box -->
    <!-- End Page Content -->
@endsection
