@extends('layout.client.master')
@section('main-content')
    <style>
        .form-check-input:checked {
            background-color: red;
            border-color: rgb(255, 133, 133);
        }
    </style>
    <section class="page-title" style="background-image: url(images/bannerpage.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Checkout</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-70">
            <div class="section-content">
                <form id="checkout-form" action="{{route('ordersc.store')}}" method="POST">
                    @csrf
                    <div class="row mt-30">
                        <div class="col-md-6">
                            <div class="billing-details">
                                <h3 class="mb-30">Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                        <div class="mb-3">
                                            <label for="recipient_name">Tên người nhận</label>
                                            <input id="recipient_name" name="recipient_name" type="text"
                                                class="form-control" placeholder="Nhập tên người nhận"
                                                value="{{ Auth::user()->name }}">

                                            @error('recipient_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient_email">Email người nhận</label>
                                            <input id="recipient_email" name="recipient_email" type="email"
                                                class="form-control" placeholder="Nhập email người nhận"
                                                value="{{ Auth::user()->email }}">
                                            @error('recipient_email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient_phone">Số điện thoại người nhận</label>
                                            <input id="recipient_phone" name="recipient_phone" type="text"
                                                class="form-control" placeholder="Nhập sdt người nhận"
                                                value="{{ Auth::user()->phone }}">
                                            @error('recipient_phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>



                                        <div class="mb-3">
                                            <label for="recipient_address">Địa chỉ người nhận</label>
                                            <input id="recipient_address" name="recipient_address" type="text"
                                                class="form-control" placeholder="Nhập địa chỉ người nhận"
                                                value="{{ Auth::user()->address }}">
                                            @error('recipient_address')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label for="note" class="form-label">Ghi chú</label>
                                            <textarea id="note" name="note" class="form-control" placeholder="Nhập ghi chú...." rows="4"></textarea>
                                        </div>

                                    </div>




                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Đơn hàng của bạn</h3>

                            <table class="table table-striped table-bordered tbl-shopping-cart">
                                <thead>
                                    <tr>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tổng giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $key => $item)
                                        <tr>
                                            <td class="product-thumbnail"><a href="{{ Storage::url($item['image']) }}"><img
                                                        alt="product" src="{{ Storage::url($item['image']) }}"></a></td>
                                            <td class="product-name"><a
                                                    href="{{ route('products.detail', $key) }}">{{ $item['product_name'] }}</a>
                                                x {{ $item['quantity'] }}</td>
                                            <td><span
                                                    class="amount">{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}đ</span>
                                            </td>
                                        </tr>
                                    @endforeach


                                    <td>Tổng cộng giỏ hàng</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        {{ number_format($subTotal, 0, ',', '.') }}đ
                                        <input type="hidden" name="item_price" value="{{ $subTotal }}">
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>Phí vận chuyển</td>
                                        <td>&nbsp;</td>
                                        <td>{{ number_format($shipping, 0, ',', '.') }}đ
                                            <input type="hidden" name="shipping_cost" value="{{ $shipping }}">
                                        </td>
                                    </tr>
                                    <tr class="bg-dark">
                                        <td class="bg-dark text-white">Tổng đơn hàng</td>
                                        <td>&nbsp;</td>
                                        <td class="bg-dark text-white fw-bold">{{ number_format($total, 0, ',', '.') }}đ
                                            <input type="hidden" name="total_amount" value="{{ $total }}">
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <h3>Phương thức thanh toán</h3>
                            <div class="mb-4 d-flex ">

                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" id="paymentMethod1"
                                        value="credit_card" checked>
                                    <label class="form-check-label" for="paymentMethod1">
                                        Thanh toán khi giao hàng
                                    </label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod2"
                                        value="paypal">
                                    <label class="form-check-label" for="paymentMethod2">
                                        Momo
                                    </label>
                                </div>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod3"
                                        value="bank_transfer">
                                    <label class="form-check-label" for="paymentMethod3">
                                        Thẻ tín dụng
                                    </label>
                                </div>
                            </div>




                            <label for="order_comments" class>Vui lòng thanh toán khi nhận hàng</label><br><br>
                            <button type="submit" class="theme-btn btn-style-one"
                                data-loading-text="Please wait..."><span class="btn-title">Thanh toán</span></button>
                        </div>
                        <div class="col-md-12 mt-30">
                            {{-- <h3>Đơn hàng của bạn</h3>
                            <table class="table table-striped table-bordered tbl-shopping-cart">
                                <thead>
                                    <tr>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tổng giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $key => $item)
                                        <tr>
                                            <td class="product-thumbnail"><a href="{{ Storage::url($item['image']) }}"><img
                                                        alt="product" src="{{ Storage::url($item['image']) }}"></a></td>
                                            <td class="product-name"><a
                                                    href="{{ route('products.detail', $key) }}">{{ $item['product_name'] }}</a>
                                                x {{ $item['quantity'] }}</td>
                                            <td><span class="amount">{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}đ</span></td>
                                        </tr>
                                    @endforeach


                                    <td>Tổng cộng giỏ hàng</td>
                                    <td>&nbsp;</td>
                                    <td>{{ number_format($subTotal, 0, ',', '.') }}đ</td>
                                    </tr>
                                    <tr>
                                        <td>Phí vận chuyển</td>
                                        <td>&nbsp;</td>
                                        <td>{{ number_format($shipping, 0, ',', '.') }}đ</td>
                                    </tr>
                                    <tr>
                                        <td>Tổng đơn hàng</td>
                                        <td>&nbsp;</td>
                                        <td>{{ number_format($total, 0, ',', '.') }}đ</td>
                                    </tr>
                                </tbody>
                            </table> --}}
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
