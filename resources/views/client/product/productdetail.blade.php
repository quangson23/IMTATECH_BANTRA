@extends('layout.client.master')
@section('main-content')
    <section class="page-title" style="background-image: url('{{ asset('images/bannerpage.jpg') }}');">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Product Deatils</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="bxslider">
                        <div class="slider-content">
                            <figure class="image-box"><a href="{{ Storage::url($product->image) }}" class="lightbox-image"
                                    data-fancybox="gallery"><img src="{{ Storage::url($product->image) }}" alt></a></figure>

                        </div>


                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div>
                        <h5>Mã sản phẩm: {{ $product->sku }} </h5>
                    </div>
                    <div class="product-details__top">
                        <h3 class="product-details__title">{{ $product->product_name }} </h3>
                    </div>
                    <div class="d-flex">
                        <h4 class="text-decoration-line-through text-muted">
                            {{ number_format($product->regular_price, 0, ',', '.') }}₫
                        </h4>

                        <h4> - </h4>
                        <h4 class="discounted-price text-danger">
                            {{ number_format($product->discount_price, 0, ',', '.') }}₫</h4>
                    </div>

                    <div class="product-details__reveiw">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>Lượt xem: {{ $product->view }}</span>

                    </div>
                    <div class="product-details__content">
                        <p class="product-details__content-text1">{{ $product->short_description }}</p>
                        <p class="product-details__content-text2"><strong>Kho: </strong> {{ $product->quantity }} <br>
                            Available in store</p>
                    </div>
                    {{-- <div class="product-details__quantity">
                        <h3 class="product-details__quantity-title">Số lượng</h3>
                        <div class="quantity-box">
                            <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                            <input type="number" id="1" value="" />
                            <button type="button" class="add"><i class="fa fa-plus"></i></button>
                        </div>
                    </div> --}}
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <div class="product-details__quantity">
                            <h3 class="product-details__quantity-title">Số lượng</h3>
                            <div class="pro-qty">
                                <input type="number" id="quantityInput" value="1" name="quantity" min="1" max="{{$product->quantity}}">
                            </div>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                        </div>

                        <div class="product-details__buttons">
                            <button type="submit" class="theme-btn btn-style-one">Thêm vào giỏ hàng</button>
                        </div>
                    </form>






                    <div class="product-details__social">
                        <div class="title">
                            <h3>Share with friends</h3>
                        </div>
                        <ul class="social-icon-one">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-description">
        <div class="container pt-0 pb-90">
            <div class="product-discription">
                <div class="tabs-box">
                    <div class="tab-btn-box text-center">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
                            <li class="tab-btn" data-tab="#tab-2">Reviews</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="text">
                                <h3 class="product-description__title">Mô tả</h3>
                                <p class="product-description__text1">{!! $product->product_description !!}
                                </p>
                                <div class="product-description__list">
                                    <ul class="list-unstyled">
                                        <li>
                                            <p><span class="fa fa-arrow-right"></span> Nam at elit nec neque suscipit
                                                gravida.</p>
                                        </li>
                                        <li>
                                            <p><span class="fa fa-arrow-right"></span> Aenean egestas orci eu maximus
                                                tincidunt.</p>
                                        </li>
                                        <li>
                                            <p><span class="fa fa-arrow-right"></span> Curabitur vel turpis id tellus
                                                cursus laoreet.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <p class="product-description__tex2">All the Lorem Ipsum generators on the Internet tend to
                                    repeat
                                    predefined chunks as necessary, making this the first true generator on the Internet. It
                                    uses a
                                    dictionary of over 200 Latin words, combined with a handful of model sentence
                                    structures, to
                                    generate Lorem Ipsum which looks reasonable.
                                </p>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="customer-comment">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                        <div class="single-comment-box">
                                            <div class="inner-box">
                                                <figure class="comment-thumb"><img src="images/resource/testi-thumb-1.jpg"
                                                        alt></figure>
                                                <div class="inner">
                                                    <ul class="rating clearfix">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <h5>Jon D. William, <span>20 Sep, 2022 . 4:00 pm</span></h5>
                                                    <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des
                                                        mauris commodo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                        <div class="single-comment-box">
                                            <div class="inner-box">
                                                <figure class="comment-thumb"><img src="images/resource/testi-thumb-2.jpg"
                                                        alt></figure>
                                                <div class="inner">
                                                    <ul class="rating clearfix">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <h5>Aleesha Brown, <span>22 Sep, 2022 . 8:00 pm</span></h5>
                                                    <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des
                                                        mauris commodo.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <h3>Add Your Comments</h3>
                                <form id="contact_form" name="contact_form" class
                                    action="https://html.kodesolution.com/2024/meato-html/includes/sendmail.php"
                                    method="post">
                                    <div class="mb-3">
                                        <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input name="form_name" class="form-control" type="text"
                                                    placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input name="form_email" class="form-control required email"
                                                    type="email" placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                        <div class="review-box clearfix">
                                            <p>Your Review</p>
                                            <ul class="rating clearfix">
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                        <div class="form-group clearfix">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">Save my name, email, and website in this
                                                        browser for the next time I comment.</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input name="form_botcheck" class="form-control" type="hidden" value />
                                        <button type="submit" class="theme-btn btn-style-one"
                                            data-loading-text="Please wait..."><span class="btn-title">Submit
                                                Comment</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related-product">
        <div class="container pt-0 pb-90">
            <h3>Sản phẩm bạn có thể quan tâm</h3>
            <div class="row clearfix">
                <div class="col">

                    <div class="mixitup-gallery">
                        <div class="filter-list row">

                            @foreach ($products->take(8) as $index => $item)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-block all ">
                                        <div class="inner-box no-border">
                                            <div class="image">
                                                <a href="/productdetail">
                                                    <img src="{{ asset('storage/' . $item->image) }}"
                                                        alt="{{ $item->product_name }}"
                                                        style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
                                                </a>
                                            </div>
                                            <div class="content ">
                                                <h4><a href="/productdetail">{{ $item->product_name }}</a></h4>
                                                <span
                                                    class="price">{{ number_format($item->regular_price, 0, ',', '.') }}₫</span>
                                            </div>


<form action="{{route('cart.add')}}" method="POST">
@csrf
<input type="hidden" name="quantity" value="1">
<input type="hidden" name="product_id" value="{{$item->id}}">

<button class="theme-btn btn-style-one mb-2 small">Mua ngay</button>
    {{-- <span class="btn-title">Mua ngay</span> --}}

</form>







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
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('.pro-qty').prepend('<span class="dec qtybtn">-</span>');
        $('.pro-qty').append('<span class="inc qtybtn">+</span>');

        $('.qtybtn').on('click', function() {
            var $button = $(this);
            var $input = $button.parent().find('input');
            var oldValue = parseFloat($input.val());

            var newVal = $button.hasClass('inc') ? oldValue + 1 : (oldValue > 1 ? oldValue - 1 : 1);
            $input.val(newVal);
        });

        $('#quantityInput').on('change', function() {
            var value = parseInt($(this).val(), 10);

            if (isNaN(value) || value < 1) {
                alert('Số lượng phải lớn hơn 1');
                $(this).val(1);
            }
        });
    </script>
@endsection
