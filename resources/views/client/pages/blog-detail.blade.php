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
                        <div class="blog-details__img">
                            <img src="{{ asset('images/bannerpage.jpg') }}" alt>

                            <div class="blog-details__date">
                                <span class="day">28</span>
                                <span class="month">Aug</span>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li><a href="news-details.html"><i class="fas fa-user-circle"></i> Admin</a> </li>
                                <li><a href="news-details.html"><i class="fas fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-details__title">We very careful handling the valuable goods</h3>
                            <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
                            </p>
                            <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
                            </p>
                            <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
                            </p>
                        </div>


                        <div class="comment-one">
                            <h3 class="comment-one__title">2 Comments</h3>
                            <div class="comment-one__single">
                                <div class="comment-one__image"> <img src="images/resource/testi-thumb-1.jpg" alt>
                                </div>
                                <div class="comment-one__content">
                                    <h3>Kevin Martin</h3>
                                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                        Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                        sollicitudin at euismod.
                                    </p>
                                    <a href="news-details.html" class="theme-btn btn-style-one comment-one__btn"><span
                                            class="btn-title">Reply</span></a>
                                </div>
                            </div>
                            <div class="comment-one__single">
                                <div class="comment-one__image"> <img src="images/resource/testi-thumb-2.jpg" alt>
                                </div>
                                <div class="comment-one__content">
                                    <h3>Sarah Albert</h3>
                                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                        Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                        sollicitudin at euismod.
                                    </p>
                                    <a href="news-details.html" class="theme-btn btn-style-one comment-one__btn"><span
                                            class="btn-title">Reply</span></a>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                <form id="contact_form" name="contact_form" class
                                    action="https://html.kodesolution.com/2024/meato-html/includes/sendmail.php"
                                    method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input name="form_name" class="form-control" type="text"
                                                    placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input name="form_email" class="form-control required email" type="email"
                                                    placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
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
                                <li>
                                    <div class="sidebar__post-image"><img src="{{ asset('images/tt1.png') }}" alt>
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3> <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i>Admin</span> <a
                                                href="{{ url('/blog-detail') }}">Cargo flow through better supply UK</>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image"> <img src="{{ asset('images/tt2.jpg') }}" alt>
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3> <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i>Admin</span> <a
                                                href="{{ url('/blog-detail') }}">Why is supply chain visibility so?</>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image"> <img src="{{ asset('images/tt3.jpg') }}" alt>
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3> <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i>Admin</span> <a
                                                href="{{ url('/blog-detail') }}">We very careful handling</>
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="#">Logistics<span class="icon-right-arrow"></span></a>
                                </li>
                                <li class="active"><a href="#">Cargo<span class="icon-right-arrow"></span></a></li>
                                <li><a href="#">Delivery<span class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="#">Transport<span class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="#">Warehouses<span class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="#">Delivery<span class="icon-right-arrow"></span></a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
