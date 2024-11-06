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
                    <!-- Display the blog post image -->
                    <div class="blog-details__img">
                        <img src="{{ asset('storage/' . $baiviet->hinh_anh) }}" alt="Blog image"
                             style="width: 100%; height: 300px; object-fit: cover;">
                        <div class="blog-details__date">
                            <span class="day">{{ date('d', strtotime($baiviet->created_at)) }}</span>
                            <span class="month">{{ date('M', strtotime($baiviet->created_at)) }}</span>
                        </div>
                    </div>


                    <!-- Blog content -->
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li>
                                <a href="#"><i class="fas fa-user-circle"></i> {{ $baiviet->user->name }}</a>  <!-- Author name -->
                            </li>
                            {{-- <li>
                                <a href="#"><i class="fas fa-comments"></i> {{ $baiviet->comments->count() }} Comments</a>  <!-- Number of comments -->
                            </li> --}}
                        </ul>

                        <!-- Blog title -->
                        <h3 class="blog-details__title">{{ $baiviet->tieu_de }}</h3>

                        <!-- Blog content -->
                        <p class="blog-details__text-2">{{ $baiviet->noi_dung }}</p> <!-- Assuming 'noi_dung' is the main content field -->


                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="lnr-icon-search"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach($latestPosts as $post)
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('storage/' . $post->hinh_anh) }}" alt="Post Image" style="width: 150px; height: 50px; object-fit: cover;">
                                </div>

                                <div class="sidebar__post-content">
                                    <h3>
                                        <span class="sidebar__post-content-meta">
                                            <i class="fas fa-user-circle"></i> {{ $post->user->name }} <!-- Assuming user relationship is set -->
                                        </span>
                                        <a href="{{ route('blog-detail', $post->id) }}">{{ $post->tieu_de }}</a> <!-- Title link -->
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                    </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
