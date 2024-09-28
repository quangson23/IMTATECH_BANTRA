@extends('layout.client.master')
@section('main-content')
    <section class="page-title" style="background-image: url(images/bannerpage.jpg)">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">News Details</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">

                        <div class="blog-details__content">

                            <h3 class="blog-details__title">Video hướng dẫn pha trà</h3>
                            <div class="video-gallery">
                                <div class="video-item">
                                    <a href="https://www.youtube.com/watch?v=your_video_1" target="_blank">
                                        <img src="https://img.youtube.com/vi/your_video_1/0.jpg"
                                            alt="How to Brew Green Tea">
                                        <h4>How to Brew Green Tea</h4>
                                    </a>
                                </div>
                                <div class="video-item">
                                    <a href="https://www.youtube.com/watch?v=your_video_2" target="_blank">
                                        <img src="https://img.youtube.com/vi/your_video_2/0.jpg" alt="Making Herbal Tea">
                                        <h4>Making Herbal Tea</h4>
                                    </a>
                                </div>
                                <div class="video-item">
                                    <a href="https://www.youtube.com/watch?v=your_video_3" target="_blank">
                                        <img src="https://img.youtube.com/vi/your_video_3/0.jpg" alt="Perfecting Black Tea">
                                        <h4>Perfecting Black Tea</h4>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <style>
                            .video-gallery {
                                display: flex;
                                justify-content: space-between;
                            }

                            .video-item {
                                flex: 1;
                                margin: 0 10px;
                                text-align: center;
                            }

                            img {
                                width: 100%;
                                height: auto;
                                border-radius: 5px;
                            }
                        </style>

                        <div class="blog-details__content">
                            <h3 class="blog-details__title">Articles on Tea Brewing</h3>
                            <div class="article-gallery d-flex">
                                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="/blog-detail"><img src="{{ asset('images/tt1.png') }}" alt></a>
                                            </figure>
                                            <span class="date"><b>28</b> SEP</span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title"><a href="news-details.html">Brew Green Tea</a></h4>
                                            <a href="/blog-detail" class="read-more">Xem thêm <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="/blog-detail"><img src="{{ asset('images/tt2.jpg') }}" alt></a>
                                            </figure>
                                            <span class="date"><b>28</b> SEP</span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title"><a href="news-details.html">Making Herbal Tea</a></h4>
                                            <a href="news-details.html" class="read-more">Xem thêm <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="/blog-detail"><img src="{{ asset('images/tt3.jpg') }}" alt></a>
                                            </figure>
                                            <span class="date"><b>28</b> SEP</span>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title"><a href="news-details.html">Perfect Black Tea</a></h4>
                                            <a href="news-details.html" class="read-more">Xem thêm <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                            .inner-box {
                                padding: 5px;
                                /* Further reduced padding */
                            }

                            .image-box {
                                height: 120px;
                                /* Smaller height */
                                overflow: hidden;
                                /* Hide overflow */
                            }

                            .image-box .image img {
                                width: 100%;
                                height: auto;
                            }

                            .lower-content {
                                font-size: 12px;
                                /* Smaller font size */
                            }

                            .title {
                                font-size: 14px;
                                /* Title size */
                                margin: 5px 0;
                                /* Margin adjustment */
                            }

                            .read-more {
                                font-size: 12px;
                                /* Smaller read more link */
                            }
                        </style>



                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">

                        <div class="sidebar__single sidebar__search">
                            <h3 class="blog-details__title">Đăng ký học viên</h3>

                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Register for a Course</h3>
                            <form action="/submit-registration" method="POST" class="course-registration-form">
                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" id="name" name="name" required placeholder="Họ tên (*)" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" required placeholder="Email (*)" />
                                </div>
                                <div class="form-group">
                                    <label for="course">Khóa học</label>
                                    <select id="course" name="course" required>
                                        <option value="">Chọn khóa học</option>
                                        <option value="tea-brewing">Kiến thức sơ cấp</option>
                                        <option value="herbal-tea">Pha trà</option>
                                        <option value="black-tea">Bảo quản trà</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one p-2" type="submit" class="btn">Gửi thông tin</button>
                                </div>
                            </form>
                        </div>

                        <style>
                            .course-registration-form {
                                display: flex;
                                flex-direction: column;
                            }
                            .form-group {
                                margin-bottom: 15px;
                            }
                            label {
                                margin-bottom: 5px;
                                font-weight: bold;
                            }
                            input, select {
                                padding: 8px;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                width: 100%;
                            }
                            .btn {
                                padding: 10px;
                                background-color: #007bff;
                                color: white;
                                border: none;
                                border-radius: 4px;
                                cursor: pointer;
                            }
                            .btn:hover {
                                background-color: #0056b3;
                            }
                        </style>



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
