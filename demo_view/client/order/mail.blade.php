@component('mail::message')
    # Xác nhận đơn hàng

    Xin chào {{ $order->recipient_name }},

    Cảm ơn bạn đã tin tưởng và ủng hộ Sclothes. Đây là thông tin đơn hàng của bạn:

    *** Mã đơn hàng: ** {{ $order->code_oder }}

    *** Sản phẩm đã đặt: **
    @foreach ($order->orderDetials as $chiTiet)
        - {{ $chiTiet->product->product_name }} x {{ $chiTiet->quantity }}: {{ number_format($chiTiet->total_amount) }} VNĐ
    @endforeach
    *** Tổng tiền: ** {{ number_format($order->total_amount) }} VNĐ

    Chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận thông tin giao hàng

    Cảm ơn bạn đã mua hàng của chúng tôi!

    Trân trọng.

@endcomponent


{{-- php artisan queue:work --}}
