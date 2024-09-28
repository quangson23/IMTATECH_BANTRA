@extends('layout.client.master')
@section('main-content')

<section class="page-title" style="background-image: url(images/bannerpage.jpg)">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Chi tiết bài viết</h1>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">Trang chủ</a></li>
                <li><a href="#">Tin tức</a></li>

            </ul>
        </div>
    </div>
</section>


<section class="news-section">
    <div class="auto-container">
        <div class="row">

            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/blog-detail"><img src="{{asset('images/tt1.png')}}"
                                    alt></a></figure>
                        <span class="date"><b>28</b> SEP</span>
                    </div>
                    <div class="lower-content">
                        <ul class="post-info">
                            <li><i class="fa fa-user"></i> by Admin</li>
                            <li><i class="fa fa-comments"></i> 2 Comments</li>
                        </ul>
                        <h4 class="title"><a href="news-details.html">We very careful handling the valuable
                                goods</a></h4>
                        <a href="/blog-detail" class="read-more">Xem thêm <i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/blog-detail"><img src="{{asset('images/tt2.jpg')}}"
                                    alt></a></figure>
                        <span class="date"><b>28</b> SEP</span>
                    </div>
                    <div class="lower-content">
                        <ul class="post-info">
                            <li><i class="fa fa-user"></i> by Admin</li>
                            <li><i class="fa fa-comments"></i> 2 Comments</li>
                        </ul>
                        <h4 class="title"><a href="news-details.html">Cargo flow through better supply in UK</a>
                        </h4>
                        <a href="news-details.html" class="read-more">Xem thêm<i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="/blog-detail"><img src="{{asset('images/tt3.jpg')}}"
                                    alt></a></figure>
                        <span class="date"><b>28</b> SEP</span>
                    </div>
                    <div class="lower-content">
                        <ul class="post-info">
                            <li><i class="fa fa-user"></i> by Admin</li>
                            <li><i class="fa fa-comments"></i> 2 Comments</li>
                        </ul>
                        <h4 class="title"><a href="news-details.html">Why is supply chain visibility so
                                important?</a></h4>
                        <a href="news-details.html" class="read-more">Xem thêm <i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
