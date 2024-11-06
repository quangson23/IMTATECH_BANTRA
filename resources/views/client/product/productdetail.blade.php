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
                                <input type="number" id="quantityInput" value="1" name="quantity" min="1"
                                    max="{{ $product->quantity }}">
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
                                    @foreach ($product->review as $comment)
                                        <div class="col-lg-6 col-md-6 col-sm-12 comment-column" style="margin-bottom: 24px">
                                            <div class="single-comment-box">
                                                <div class="inner-box">
                                                    <figure class="comment-thumb"><img
                                                            src="images/resource/testi-thumb-1.jpg" alt></figure>
                                                    <div class="inner">
                                                        <ul class="rating clearfix">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <li>
                                                                    <i
                                                                        class="fas fa-star{{ $i <= $comment->star ? '' : '-o' }}"></i>
                                                                </li>
                                                            @endfor
                                                        </ul>
                                                        <h5>{{ $comment->user->name }},
                                                            <span>{{ $comment->created_at->format('d/m/Y H:i') }}</span>
                                                        </h5>
                                                        <p>{{ $comment->content }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="comment-box">
                            <h3>Add Your Comments</h3>
                            <form id="commentForm" action="{{ route('store', ['id' => $product->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <div class="mb-3">
                                    <textarea name="content" class="form-control" rows="7" placeholder="Enter Comment"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="review-box clearfix">
                                        <p>Your Review</p>
                                        <ul class="rating clearfix" id="starRating">
                                            <li data-value="1"><i class="far fa-star"></i></li>
                                            <li data-value="2"><i class="far fa-star"></i></li>
                                            <li data-value="3"><i class="far fa-star"></i></li>
                                            <li data-value="4"><i class="far fa-star"></i></li>
                                            <li data-value="5"><i class="far fa-star"></i></li>
                                        </ul>
                                        <input type="hidden" name="star" id="rating" value="0">
                                        <span style="margin-left: 10px" class="error-star text-danger"></span>
                                    </div>



                                </div>
                                <button type="submit" class="theme-btn btn-style-one"
                                    data-loading-text="Please wait...">
                                    <span class="btn-title">Submit Comment</span>
                                </button>
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

                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">

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

    <style>

    </style>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const starRating = document.getElementById('starRating');
            const ratingInput = document.getElementById('rating');

            // Lắng nghe sự kiện click trên các ngôi sao
            starRating.addEventListener('click', function(event) {
                if (event.target.tagName === 'I' || event.target.tagName === 'LI') {
                    const starValue = event.target.closest('li').dataset.value;
                    ratingInput.value = starValue;

                    // Đặt màu sao đã chọn
                    Array.from(starRating.children).forEach(star => {
                        const value = star.dataset.value;
                        star.innerHTML =
                            `<i class="${value <= starValue ? 'fas' : 'far'} fa-star"></i>`;
                    });
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('commentForm');
            const starRating = document.querySelectorAll('#starRating li');
            const hiddenStarInput = document.getElementById('rating');
            const errorMessage = document.querySelector('.error-star');

            // Xử lý khi người dùng chọn sao
            starRating.forEach((star) => {
                star.addEventListener('click', function() {
                    hiddenStarInput.value = this.getAttribute('data-value');
                    starRating.forEach((s) => s.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Submit form
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Kiểm tra xem người dùng đã chọn sao chưa
                if (hiddenStarInput.value === "0") {
                    errorMessage.textContent = "Vui lòng chọn sao cho bình luận.";
                } else {
                    errorMessage.textContent = ""; // Xóa thông báo lỗi

                    // Gửi form qua AJAX hoặc thông qua submit bình thường
                    form.submit();
                }
            });
        });
    </script>
@endsection
