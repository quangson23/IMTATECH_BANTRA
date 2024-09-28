@extends('layout.client.master')
@section('main-content')
    <style>
        .border-box {
            border: 1px solid #dee2e6;
            /* Light border color */
            border-radius: 8px;
            /* Rounded corners */
            padding: 20px;
            /* Padding inside the box */
            background-color: #ffffff;
            /* White background */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Optional shadow for a subtle 3D effect */
        }

        .myaccount-content h5 {
            margin-top: 0;
        }

        .myaccount-content .welcome p {
            margin-bottom: 0;
        }

        .logout {
            color: #007bff;
            /* Link color */
            text-decoration: none;
        }

        .logout:hover {
            text-decoration: underline;
            /* Underline on hover */
        }










        .table thead th {
            background-color: #900000;
            color: #ffffff;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .text-warning {
            color: #ffc107;
        }
    </style>


    <section class="page-title" style="background-image: url('{{ asset('images/bannerpage.jpg') }}');">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Chi tiết đơn hàng</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Chi tiết đơn hàng</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="my-account-wrapper section-padding p-10">
        <div class="container">
            <div class="row">


                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="orders-table">
                        <div class="row">
                            <div class="col-12">
                                <div class="myaccount-content border-box">
                                    <h5>Thông tin đơn hàng: <span class="text-danger">{{ $order->code_oder }}</span></h5>
                                    <div class="welcome">
                                        <p>Tên người nhận: <strong>{{ $order->recipient_name }}</strong></p>
                                        <p>Email người nhận: <strong>{{ $order->recipient_email }}</strong></p>
                                        <p>Số điện thoại: <strong>{{ $order->recipient_phone }}</strong></p>
                                        <p>Địa chỉ: <strong>{{ $order->recipient_address }}</strong></p>
                                        <p>Ghi chú: <strong>{{ $order->note }}</strong></p>
                                        <p>Trạng thái đơn hàng: <strong>{{ $orderStatus[$order->order_status] }}</strong>
                                        </p>
                                        <p>Trạng thái thanh toán:
                                            <strong>{{ $paymentStatus[$order->payment_status] }}</strong>
                                        </p>
                                        <p>Tổng tiền hàng:
                                            <strong>{{ number_format($order['item_price'], 0, ',', '.') }}đ</strong>
                                        </p>
                                        <p>Phí giao hàng:
                                            <strong>{{ number_format($order['shipping_cost'], 0, ',', '.') }}đ</strong>
                                        </p>
                                        <p>Tổng đơn hàng:
                                            <strong>{{ number_format($order['total_amount'], 0, ',', '.') }}đ</strong>
                                        </p>

                                    </div>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="myaccount-content border-box">
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

                                                        <img  src="{{ Storage::url($product->image) }}" width="75px">
                                                    </td>

                                                    <td>{{$product->product_name}}</td>
                                                    <td>{{ number_format($item->unit_price, 0, ',', '.') }}đ</td>
                                                    <td>{{$item->quantity}}</td>
                                                    <td>{{ number_format($item->total_amount, 0, ',', '.') }}đ</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
