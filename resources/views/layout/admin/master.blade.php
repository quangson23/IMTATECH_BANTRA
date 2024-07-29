<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @include('admin.layouts.head') --}}

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/img/favicon.ico') }}' />


</head>

<body>
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar"
                   class="nav-link nav-link-lg
                            collapse-btn">
                    <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>
                <form class="form-inline mr-auto">
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                               data-width="200">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                     class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                <span class="badge headerBadge1">
                        6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    Messages
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                    <a href="#" class="dropdown-item"> <span
                            class="dropdown-item-avatar
                                    text-white"> <img
                                alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                            </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                    Deo</span>
                                <span class="time messege-text">Please check your mail !!</span>
                                <span class="time">2 Min Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                            </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                    Smith</span> <span class="time messege-text">Request for leave
                                    application</span>
                                <span class="time">5 Min Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                            </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                    Ryan</span> <span class="time messege-text">Your payment invoice is
                                    generated.</span> <span class="time">12 Min Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                            </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                    Smith</span> <span class="time messege-text">hii John, I have upload
                                    doc
                                    related to task.</span> <span class="time">30
                                    Min Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                            </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                    Joshi</span> <span class="time messege-text">Please do as specify.
                                    Let me
                                    know if you have any query.</span> <span class="time">1
                                    Days Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                            </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                    Smith</span> <span class="time messege-text">Client Requirements</span>
                                <span class="time">2 Days Ago</span>
                            </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                     class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                <div class="dropdown-header">
                    Notifications
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread"> <span
                            class="dropdown-item-icon bg-primary text-white"> <i
                                class="fas
                                        fa-code"></i>
                            </span> <span class="dropdown-item-desc"> Template update is
                                available now! <span class="time">2 Min
                                    Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span
                            class="dropdown-item-icon bg-info text-white"> <i
                                class="far
                                        fa-user"></i>
                            </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                    Sugiharto</b> are now friends <span class="time">10 Hours
                                    Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span
                            class="dropdown-item-icon bg-success text-white"> <i
                                class="fas
                                        fa-check"></i>
                            </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                    Hours
                                    Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span
                            class="dropdown-item-icon bg-danger text-white"> <i
                                class="fas fa-exclamation-triangle"></i>
                            </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                clean it! <span class="time">17 Hours Ago</span>
                            </span>
                    </a> <a href="#" class="dropdown-item"> <span
                            class="dropdown-item-icon bg-info text-white"> <i
                                class="fas
                                        fa-bell"></i>
                            </span> <span class="dropdown-item-desc"> Welcome to Otika
                                template! <span class="time">Yesterday</span>
                            </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                                                                                 src="{{asset('assets/img/user.png')}}" class="user-img-radious-style"> <span
                    class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">Hello Sarah Smith</div>
                <a href="profile.html" class="dropdown-item has-icon"> <i
                        class="far
                                fa-user"></i> Profile
                </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                    Activities
                </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="dropdown-item has-icon text-danger">
                        <button type="submit" style="border: none;background-color: white;color: red "><i
                                class="fas fa-sign-out-alt"></i>Logout</button>
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" />
                <span class="logo-name">Otika</span>
            </a>
        </div>


        {{-- ........Bắt đầu rightmenu....... --}}




        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="admin" class="nav-link"><i data-feather="monitor"></i><span>Thống kê</span></a>
            </li>


            {{-- <li class="dropdown">
                <a href="{{ route('category.index') }}" class=""><i data-feather="grid"></i><span>Danh
                        mục</span></a>
            </li> --}}


            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Danh
                            mục</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category.index') }}">Danh sách danh mục</a></li>
                    <li><a class="nav-link" href="{{ route('category.create') }}">Thêm danh mục</a></li>
                </ul>
            </li>

            {{--
            <li class="dropdown">
                <a href="{{ route('product.index') }}" class="nav-link"><i data-feather="briefcase"></i><span>Sản phẩm</span></a>
            </li> --}}



            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Sản phẩm</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('product.index') }}">Danh sách sản phẩm</a></li>
                    <li><a class="nav-link" href="{{ route('product.create') }}">Thêm sản phẩm</a></li>
                </ul>
            </li>




            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="image"></i><span>Banner</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('banner.index') }}">Danh sách banner</a></li>
                    <li><a class="nav-link" href="{{ route('banner.create') }}">Thêm banner</a></li>
                </ul>
            </li>



            {{-- <li class="dropdown">
                <a href="{{ route('banner.index') }}" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="image"></i><span>Banner</span></a>
            </li> --}}

            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user"></i><span>Người dùng</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}">Danh sách người dùng</a></li>
                    <li><a class="nav-link" href="{{ route('staff.index') }}">Danh sách nhân viên</a></li>
                </ul>
            </li>



            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="tag"></i><span>Khuyến mại</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="   {{ route('promotion.index') }}">Quản lí khuyến mại</a></li>
                    <li><a class="nav-link" href=" {{ route('coupon.index') }} ">Mã giảm giá</a></li>

                </ul>
            </li>



            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="shopping-bag"></i><span>Đơn hàng</span></a>
            </li>


            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="feather"></i><span>Đánh giá</span></a>
            </li>



            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="tag"></i><span>Bài đăng</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Chuyên mục</a></li>
                    <li><a class="nav-link" href=" # ">Danh sách bài đăng</a></li>

                </ul>
            </li>




            <li class="dropdown">
                <a href="/" class=""><i class="fa fa-door-open"></i><span>Về Website</span></a>
            </li>

















        </ul>
    </aside>
</div>





{{-- @include('admin.layouts.header') --}}


@yield('main-content')
@yield('js')

{{-- @include('admin.layouts.footer') --}}
<footer class="main-footer">
    <div class="footer-left">
        <a href="templateshub.net">Templateshub</a></a>
    </div>
    <div class="footer-right">
    </div>
</footer>
</div>
</div>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/page/index.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
