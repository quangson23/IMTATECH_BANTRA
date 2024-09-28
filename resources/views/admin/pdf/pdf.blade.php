<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thông Tin Đơn Hàng</title>
    <style>
        body {
            font-family: DejaVu Sans, Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .section {
            margin-bottom: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            background-color: #fff;
        }
        .card h4 {
            margin-top: 0;
            font-size: 18px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        td {
            vertical-align: top;
        }
        .text-danger {
            color: #d9534f;
        }
        .card-body ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .card-body ul li {
            margin-bottom: 8px;
        }
        .card-body ul li b, .card-body ul li strong {
            font-weight: bold;
        }
        .card-body ul li .text-danger {
            color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thông Tin Chi Tiết Đơn Hàng</h1>
        </div>
        <section class="section">
            <div class="card">
                <h4>Mã đơn hàng: <span class="text-danger">{{ $order->code_oder }}</span></h4>
                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        <li>Tên người nhận: <strong>{{ $order->recipient_name }}</strong></li>
                                        <li>Email người nhận: <strong>{{ $order->recipient_email }}</strong></li>
                                        <li>Số điện thoại: <strong>{{ $order->recipient_phone }}</strong></li>
                                        <li>Địa chỉ: <strong>{{ $order->recipient_address }}</strong></li>
                                        <li>Ghi chú: <strong>{{ $order->note }}</strong></li>
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
                <h4>Sản phẩm của đơn hàng</h4>
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
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
</body>
</html>
