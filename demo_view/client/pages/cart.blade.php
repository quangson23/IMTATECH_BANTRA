@extends('layout.client.master')
@section('main-content')
    <style>
        .transparent-input {
            background-color: transparent;
            border: none;
            /* Optional: Add border styling */
            padding: 5px;
            /* Optional: Adjust padding if needed */
        }
    </style>
    <section class="page-title" style="background-image: url(images/bannerpage.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Cart</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </section>


    <section>
        <div class="container pb-100">
            <div class="section-content">

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('cart.update') }}" method="POST">
                            @csrf



                            <div class="table-responsive">
                                <table class="table table-striped table-bordered tbl-shopping-cart">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Photo</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $key => $item)
                                            <tr class="cart_item">
                                                <td class="product-remove"><a href="#">×</a></td>
                                                <td class="product-thumbnail">
                                                    <a href="{{ Storage::url($item['image']) }}"><img alt="product"
                                                            src="{{ Storage::url($item['image']) }}">
                                                        <input type="hidden" name="cart[{{ $key }}][image]"
                                                            value="{{ $item['image'] }}">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a
                                                        href="{{ route('products.detail', $key) }}">{{ $item['product_name'] }}</a>
                                                    <input type="hidden" name="cart[{{ $key }}][product_name]"
                                                        value="{{ $item['product_name'] }}">

                                                </td>
                                                <td class="product-price"><span
                                                        class="amount">{{ number_format($item['price'], 0, ',', '.') }}đ</span>
                                                    <input type="hidden" name="cart[{{ $key }}][price]"
                                                        value="{{ $item['price'] }}">
                                                </td>


                                                <td class="product-quantity">
                                                    <div class="product-details__quantity">
                                                        <div class="quantity-box">
                                                            <button type="button" class="sub"><i
                                                                    class="fa fa-minus"></i></button>
                                                            <input type="text" class="quantityInput"
                                                                data-price="{{ $item['price'] }}"
                                                                value="{{ $item['quantity'] }}"
                                                                name="cart[{{ $key }}][quantity]">
                                                            <button type="button" class="add"><i
                                                                    class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </td>




                                                <td class="product-subtotal"><span
                                                        class="subtotal">{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}đ</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>

                            </div>
                            <div class="cart-update">
                                <button type="submit" class="btn btn-danger">Update Cart</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 mt-30">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Calculate Shipping</h4>
                                <form class="form" action="#">
                                    <div class="mb-10">
                                        <select class="form-control">
                                            <option>Select Country</option>
                                            <option>Australia</option>
                                            <option>UK</option>
                                            <option>USA</option>
                                        </select>
                                    </div>
                                    <div class="mb-10">
                                        <input type="text" class="form-control" placeholder="State/country" value>
                                    </div>
                                    <div class="mb-10">
                                        <input type="text" class="form-control" placeholder="Postcod/zip" value>
                                    </div>
                                    <div class="mb-30">
                                        <button type="button" class="theme-btn btn-style-one"><span
                                                class="btn-title">Update Totals</span></button>
                                    </div>

                                </form>
                            </div>

                            <div class="col-md-2">


                            </div>
                            <div class="col-md-5">
                                <h4>Cart Totals</h4>
                                <table class="table table-bordered cart-total">
                                    <tbody>
                                        <tr>
                                            <td>Tổng cộng giỏ hàng</td>
                                            <td id="cart-subtotal">{{ number_format($subTotal, 0, ',', '.') }}đ</td>
                                        </tr>
                                        <tr>
                                            <td>Phí vận chuyển</td>
                                            <td id="cart-shipping" data-shipping="{{ $shipping }}">
                                                {{ number_format($shipping, 0, ',', '.') }}đ</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng đơn hàng</td>
                                            <td id="cart-total">{{ number_format($total, 0, ',', '.') }}đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a class="theme-btn btn-style-one" href="{{ route('ordersc.create') }}"><span
                                        class="btn-title">Tiến hành mua</span> </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function updateCartTotals() {
                let subTotal = 0;
                $('.product-subtotal .subtotal').each(function() {
                    subTotal += parseInt($(this).text().replace(/[^\d]/g, ''));
                });

                // Update the shipping cost dynamically if needed
                let shipping = parseInt($('#cart-shipping').data('shipping')) || 0;
                let total = subTotal + shipping;

                $('#cart-subtotal').text(formatCurrency(subTotal));
                $('#cart-shipping').text(formatCurrency(shipping));
                $('#cart-total').text(formatCurrency(total));
            }

            function formatCurrency(amount) {
                return amount.toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });
            }

            // Handle quantity changes
            $('.add, .sub').on('click', function() {
                var $quantityInput = $(this).siblings('.quantityInput');
                var quantity = parseInt($quantityInput.val());
                var price = parseInt($quantityInput.data('price'));
                var $subtotalCell = $(this).closest('tr').find('.product-subtotal .subtotal');

                if ($(this).hasClass('add')) {
                    quantity++;
                } else if ($(this).hasClass('sub') && quantity > 1) {
                    quantity--;
                }
                $quantityInput.val(quantity);

                // Calculate new subtotal
                var newSubtotal = quantity * price;
                $subtotalCell.text(formatCurrency(newSubtotal));

                // Update cart totals
                updateCartTotals();

                // Send AJAX request to update the quantity in the cart
                var cartItemId = $(this).closest('tr').data(
                    'id'); // Assuming each row has a data-id attribute
                $.ajax({
                    url: '/cart/update',
                    method: 'POST',
                    data: {
                        id: cartItemId,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                    },
                    success: function(response) {
                        // Optionally, handle success response if needed
                    },
                    error: function(xhr) {
                        // Optionally, handle error response if needed
                        console.error('An error occurred:', xhr.responseText);
                    }
                });
            });

            // Handle item removal
            $('.product-remove a').on('click', function(event) {
                event.preventDefault();
                var $row = $(this).closest('tr');
                var price = parseInt($row.find('.product-subtotal .subtotal').text().replace(/[^\d]/g, ''));

                // Remove the row
                $row.remove();

                // Update cart totals
                updateCartTotals();

                // Optionally, send AJAX request to remove item from the cart
                var cartItemId = $row.data('id'); // Assuming each row has a data-id attribute
                $.ajax({
                    url: '/cart/remove',
                    method: 'POST',
                    data: {
                        id: cartItemId,
                        _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                    },
                    success: function(response) {
                        // Optionally, handle success response if needed
                    },
                    error: function(xhr) {
                        // Optionally, handle error response if needed
                        console.error('An error occurred:', xhr.responseText);
                    }
                });
            });

            // Initial call to update totals on page load
            updateCartTotals();
        });
    </script>
@endsection
