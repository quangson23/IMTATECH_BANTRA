@extends('layout.client.master')
@section('main-content')

<section class="page-title" style="background-image: url(images/bannerpage.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Cửa hàng</h1>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">Trang chủ</a></li>
                <li>Sản phẩm</li>
            </ul>
        </div>
    </div>
</section>

<section class="featured-products">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="shop-sidebar">
                    <div class="sidebar-search">
                        <form action="https://html.kodesolution.com/2024/meato-html/shop-products.html" method="post" class="search-form">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search..." required>
                                <button><i class="lnr lnr-icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget category-widget">
                        <div class="widget-title">
                            <h5 class="widget-title">Danh mục</h5>
                        </div>
                        <div class="widget-content">
                            {{-- @foreach ($categories as $index => $item)
                                <ul class="category-list clearfix">
                                    <li><a href="shop-product-details.html">{{ $item->categories_name }}</a></li>
                                </ul>
                            @endforeach --}}
                            @foreach ($categories as $index => $item)
                                <ul class="category-list clearfix">
                                    <li>
                                        <a href="{{ url('shop?category_id=' . $item->id) }}">{{ $item->categories_name }}</a>
                                    </li>
                                </ul>
                            @endforeach

                        </div>
                    </div>
                    <div class="sidebar-widget price-filters">
                        <div class="widget-title">
                            <h5 class="widget-title">Lọc theo giá</h5>
                        </div>
                        <div class="range-slider clearfix">
                            <div class="price-range-slider"></div>
                            <div class="clearfix">
                                <p>Giá:</p>
                                <div class="title"></div>
                                <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                <input type="submit" value="Filter">
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget post-widget">
                        <div class="widget-title">
                            <h5 class="widget-title">Popular Products</h5>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-details.html"><img src="images/resource/products/thumb-1.jpg" alt></a></figure>
                                <a href="shop-product-details.html">TV box</a>
                                <span class="price">$45.00</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-details.html"><img src="images/resource/products/thumb-2.jpg" alt></a></figure>
                                <a href="shop-product-details.html">Delivery box</a>
                                <span class="price">$34.00</span>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="shop-details.html"><img src="images/resource/products/thumb-3.jpg" alt></a></figure>
                                <a href="shop-product-details.html">Set paper box</a>
                                <span class="price">$29.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 content-side mt-md-60">
                <div class="mixitup-gallery">
                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All</li>
                            <li class="filter" data-role="button" data-filter=".trends">Trends</li>
                            <li class="filter" data-role="button" data-filter=".business">Business</li>
                            <li class="filter" data-role="button" data-filter=".cargo">Cargo</li>
                            <li class="filter" data-role="button" data-filter=".delivery">Delivery</li>
                            <li class="filter" data-role="button" data-filter=".transport">Transport</li>
                        </ul>
                    </div>
                    <div class="filter-list row">
                      
                        @foreach ($products as $index => $item)
                            @if($category_id)
                                @if($item->category_id == $category_id)
                                    <div class="product-block all mix transport cargo col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="image">
                                                <a href="{{ route('products.detail', ['id' => $item->id]) }}">
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->product_name }}" style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="{{ route('products.detail', ['id' => $item->id]) }}">{{ $item->product_name }}</a></h4>
                                                <span class="price">{{ number_format($item->regular_price, 0, ',', '.') }}₫</span>
                                            </div>
                                            <a href="{{ route('products.detail', ['id' => $item->id]) }}" class="theme-btn btn-style-one mb-2 small">
                                                <span class="btn-title">Mua ngay</span>
                                            </a>
                                            <div class="icon-box">
                                                <a href="shop-product-details.html" class="ui-btn like-btn">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <a href="shop-cart.html" class="ui-btn add-to-cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="product-block all mix transport cargo col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="{{ route('products.detail', ['id' => $item->id]) }}">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->product_name }}" style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h4><a href="{{ route('products.detail', ['id' => $item->id]) }}">{{ $item->product_name }}</a></h4>
                                            <span class="price">{{ number_format($item->regular_price, 0, ',', '.') }}₫</span>
                                        </div>
                                        <a href="{{ route('products.detail', ['id' => $item->id]) }}" class="theme-btn btn-style-one mb-2 small">
                                            <span class="btn-title">Mua ngay</span>
                                        </a>
                                        <div class="icon-box">
                                            <a href="shop-product-details.html" class="ui-btn like-btn">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="shop-cart.html" class="ui-btn add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
