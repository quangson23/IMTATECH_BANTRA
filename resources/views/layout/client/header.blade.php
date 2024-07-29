<div class="page-wrapper">

    <div class="preloader"></div>

    <header class="main-header header-style-one">

        <div class="header-top">
            <div class="top-left">

                <ul class="list-style-one">
                    <li></li>
                    <li></li>
                    <li><i class="fa fa-map-marker-alt"></i> Ngõ 3 Phố Phú Kiều, Phường Phúc Diễn, Quận Bắc Từ Liêm, Hà Nội</li>
                    <li><i class="fa fa-clock"></i>Mở cửa: 8 sáng - 5 chiều</li>
                    <li><i class="fa fa-phone-volume"></i> <a href="tel:+92(8800)87890">0981679804</a></li>
                </ul>
            </div>
            <div class="top-right">
                <ul class="social-icon-one">
                    <li>
                        <a href="#"><span class="fab fa-facebook-square"></span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="header-lower">

            <div class="main-box">
                <div class="logo-box">
                    <a href="/">
                        <img src="images/druma.png" alt="Meato" title="Meato" style="width: 130px; height: auto;">
                    </a>
                </div>

                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation">


                            </li>
                            <li class="dropdown">
                                <a href="#">Tài khoản</a>
                                <ul>
                                    <li><a href="page-about.html">About</a></li>
                                    <li class="dropdown">
                                        <a href="#">Services</a>
                                        <ul>
                                            <li><a href="page-services.html">Services List</a></li>
                                            <li><a href="page-service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Team</a>
                                        <ul>
                                            <li><a href="page-team.html">Team List</a></li>
                                            <li><a href="page-team-details.html">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="page-testimonial.html">Testimonial</a></li>
                                    <li><a href="page-faq.html">FAQ</a></li>
                                    <li><a href="page-404.html">Page 404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="/shop">Cửa hàng</a>
                                <ul>
                                    <li><a href="shop-products.html">Products</a></li>
                                    <li><a href="shop-products-sidebar.html">Products with Sidebar</a></li>
                                    <li><a href="shop-product-details.html">Product Details</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="/shop">Danh mục</a>

                                <ul>
                                @foreach ($categories as $index => $item)

                                    <li><a href="shop-products.html">{{ $item->categories_name }}</a></li>


                                @endforeach
                            </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#">Tin tức</a>
                                <ul>
                                    <li><a href="news-grid.html">News Grid</a></li>
                                    <li><a href="news-details.html">News Details</a></li>
                                </ul>
                            </li>
                            <li><a href="/contac">Liên hệ</a></li>
                            <li><a href="page-contact.html">Về Sclothes</a></li>



                        </ul>
                    </nav>

                    <div class="outer-box">
                        <button class="ui-btn ui-btn search-btn">
                            <span class="icon lnr lnr-icon-search"></span>
                        </button>
                        <a href="/cart" class="ui-btn"><i class="lnr-icon-shopping-cart"></i></a>
                        <a href="{{asset('admin')}}" class="ui-btn"><i class="lnr-icon-user"></i></a>
                        <a href="page-contact.html" class="theme-btn btn-style-one alternate"><span
                                class="btn-title">Liên hệ ngay</span></a>

                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mobile-menu">
            <div class="menu-backdrop"></div>

            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo">
                        <a href="index-2.html"><img src="images/logo-2.png" alt title="Meato" /></a>
                    </div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>
                <ul class="navigation clearfix">

                </ul>
                <ul class="contact-list-one">
                    <li>

                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Call Now</span>
                            <a href="tel:+92880098670">+92 (8800) - 98670</a>
                        </div>
                    </li>
                    <li>

                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title">Send Email</span>
                            <a
                                href="https://html.kodesolution.com/cdn-cgi/l/email-protection#85ede0e9f5c5e6eae8f5e4ebfcabe6eae8"><span
                                    class="__cf_email__"
                                    data-cfemail="8de5e8e1fdcdeee2e0fdece3f4a3eee2e0">[email&#160;protected]</span></a>
                        </div>
                    </li>
                    <li>

                        <div class="contact-info-box">
                            <span class="icon lnr-icon-clock"></span>
                            <span class="title">Send Email</span>
                            Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                        </div>
                    </li>
                </ul>
                <ul class="social-links">
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="search-popup">
            <span class="search-back-drop"></span>
            <button class="close-search"><span class="fa fa-times"></span></button>
            <div class="search-inner">
                <form method="post" action="https://html.kodesolution.com/2024/meato-html/index.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value placeholder="Search..." required />
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>


        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container">

                    <a href="/">
                        <img src="images/druma.png" alt="Meato" title="Meato" style="width: 130px; height: auto;">
                    </a>

                    <div class="nav-outer">

                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">

                                </ul>
                            </div>
                        </nav>


                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div>

    </header>
