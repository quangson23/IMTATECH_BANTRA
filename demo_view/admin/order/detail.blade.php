{{-- extends: Chỉ định layout được sử dụng --}}
@extends('layout.admin.master')

{{-- section: định nghĩa nội dung của section --}}



@section('main-content')
    {{-- <div class="main-content">



        <section class="section">
            <div class="card">
                <h4 class="card-header">Thông tin chi tiết đơn hàng </h4>
                <hr class="header-line">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th class="bg-white ">
                                <h6 class="bg-white text-dark">Mã đơn hàng: <span
                                        class="text-danger">{{ $order->code_oder }}</span></h6>
                            </th>
                        </thead>
                        <thead>
                            <th>Thông tin tài khoản đặt hàng</th>
                            <th>Thông tin người nhận hàng</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        <li>Tên tài khoản: <b>{{ $order->user->name }}</b></li>
                                        <li>Email: <b>{{ $order->user->email }}</b></li>
                                        <li>Số điện thoại: <b>{{ $order->user->phone }}</b></li>
                                        <li>Địa chỉ: <b>{{ $order->user->address }}</b></li>
                                        <li>Tài khoản: <b>{{ $order->user->role }}</b></li>
                                    </ul>

                                </td>
                                <td>
                                    <li>Tên người nhận: <strong>{{ $order->recipient_name }}</strong></li>
                                    <li>Email người nhận: <strong>{{ $order->recipient_email }}</strong></li>
                                    <li>Số điện thoại: <strong>{{ $order->recipient_phone }}</strong></li>
                                    <li>Địa chỉ: <strong>{{ $order->recipient_address }}</strong></li>
                                    <li>Ghi chú: <strong>{{ $order->note }}</strong></li>
                                    <li>Trạng thái đơn hàng: <strong>{{ $orderStatus[$order->order_status] }}</strong>
                                    </li>
                                    <li>Trạng thái thanh toán:
                                        <strong>{{ $paymentStatus[$order->payment_status] }}</strong>
                                    </li>
                                    <li>Tổng tiền hàng:
                                        <strong>{{ number_format($order['item_price'], 0, ',', '.') }}đ</strong>
                                    </li>
                                    <li>Phí giao hàng:
                                        <strong>{{ number_format($order['shipping_cost'], 0, ',', '.') }}đ</strong>
                                    </li>
                                    <li>Tổng đơn hàng:
                                        <strong
                                            class="text-danger">{{ number_format($order['total_amount'], 0, ',', '.') }}đ</strong>
                                    </li>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </section>


        <section class="section">
            <div class="card">
                <h4 class="card-header">Sản phẩm của đơn hàng</h4>
                <hr class="header-line">
                <div class="card-body">
                    <table class="table table-bordered text-center" id="orders-table">
                        <thead class="thead-light">

                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderDetials as $item)
                                @php
                                    $product = $item->product;
                                @endphp

                                <tr>

                                    <td>

                                        <img src="{{ Storage::url($product->image) }}" width="75px">
                                    </td>

                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ number_format($item->unit_price, 0, ',', '.') }}đ</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ number_format($item->total_amount, 0, ',', '.') }}đ</td>
                                </tr>
                            @endforeach
                        </tbody>z
                    </table>
                </div>
            </div>
    </div>
    </table>
    </div>
    </div>
    </section>
    </div> --}}



    <div class="main-content">

        <section class="section">
            <div class="card">
                <a href="{{ route('orders.print', ['id' => $order->id]) }}" class="btn btn-primary">In Hóa Đơn</a>
            </div>
        </section>

        <section class="section">
            <div class="card">
                <h4 class="card-header">Thông tin chi tiết đơn hàng</h4>
                <hr class="header-line">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="bg-white">
                                    <h6 class="bg-white text-dark">Mã đơn hàng: <span class="text-danger">{{ $order->code_oder }}</span></h6>
                                </th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Thông tin tài khoản đặt hàng</th>
                                <th>Thông tin người nhận hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        <li>Tên tài khoản: <b>{{ $order->user->name }}</b></li>
                                        <li>Email: <b>{{ $order->user->email }}</b></li>
                                        <li>Số điện thoại: <b>{{ $order->user->phone }}</b></li>
                                        <li>Địa chỉ: <b>{{ $order->user->address }}</b></li>
                                        <li>Tài khoản: <b>{{ $order->user->role }}</b></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        <li>Tên người nhận: <strong>{{ $order->recipient_name }}</strong></li>
                                        <li>Email người nhận: <strong>{{ $order->recipient_email }}</strong></li>
                                        <li>Số điện thoại: <strong>{{ $order->recipient_phone }}</strong></li>
                                        <li>Địa chỉ: <strong>{{ $order->recipient_address }}</strong></li>
                                        <li>Ghi chú: <strong>{{ $order->note }}</strong></li>
                                        {{-- <li>Trạng thái đơn hàng: <strong>{{ $orderStatus[$order->order_status] }}</strong></li>
                                        <li>Trạng thái thanh toán: <strong>{{ $paymentStatus[$order->payment_status] }}</strong></li> --}}
                                        <li>Tổng tiền hàng: <strong>{{ number_format($order->item_price, 0, ',', '.') }}đ</strong></li>
                                        <li>Phí giao hàng: <strong>{{ number_format($order->shipping_cost, 0, ',', '.') }}đ</strong></li>
                                        <li>Tổng đơn hàng: <strong class="text-danger">{{ number_format($order->total_amount, 0, ',', '.') }}đ</strong></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="card">
                <h4 class="card-header">Sản phẩm của đơn hàng</h4>
                <hr class="header-line">
                <div class="card-body">
                    <table class="table table-bordered text-center" id="orders-table">
                        <thead class="thead-light">
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderDetials as $item)
                                @php
                                    $product = $item->product;
                                @endphp
                                <tr>
                                    <td>
                                        <img src="{{ Storage::url($product->image) }}" width="75px">
                                    </td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ number_format($item->unit_price, 0, ',', '.') }}đ</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ number_format($item->total_amount, 0, ',', '.') }}đ</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
