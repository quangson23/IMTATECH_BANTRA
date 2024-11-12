@extends('layout.client.master')
@section('main-content')
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    @foreach ($banners as $banner)
                        <li data-index="rs-1" data-transition="zoomout">

                            <img src="{{ Storage::url($banner->image) }}" alt class="rev-slidebg" />
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme ipad-hidden rs-parallaxlevel-1"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="shape" data-height="auto"
                                data-whitespace="nowrap" data-width="none" data-hoffset="['110','110','110','110']"
                                data-voffset="['110','90','90','90']" data-x="['right','right','right','right']"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-frames="[{&quot;from&quot;:&quot;x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">


                                <!-- <i class="float-icon"><img src="./images/image.png" alt=""></i> -->

                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1 ipad-hidden"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="shape" data-height="none"
                                data-whitespace="nowrap" data-width="none" data-hoffset="['0','0','0','0']"
                                data-voffset="['110','90','90','90']" data-x="['right','right','right','right']"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-frames="[{&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:3000,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">

                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['750','750','750','650']"
                                data-whitespace="normal" data-hoffset="['0','0','0','0']"
                                data-voffset="['-195','-160','-160','-140']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <span class="title">Nhanh chóng & tận tâm</span>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['750','750','750','650']"
                                data-whitespace="normal" data-hoffset="['0','0','0','0']"
                                data-voffset="['-70','-40','-40','-30']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <h2>Đặt hàng online <br />Giao hàng miễn phí</h2>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[15,15,15,15]"
                                data-paddingright="[15,15,15,15]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                                data-type="text" data-height="none" data-width="['700','750','700','450']"
                                data-whitespace="normal" data-hoffset="['0','0','0','0']"
                                data-voffset="['100','120','120','120']" data-x="['left','left','left','left']"
                                data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                                data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                                <a href="{{ $banner->image_url }}" class="theme-btn btn-style-one hvr-light"><span
                                        class="btn-title">Tìm
                                        hiểu thêm</span></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>


    {{-- ............. --}}




    {{-- .............. --}}


    <br>
    <br>
    <section class="about-section pt-0">
        <div class="anim-icons">
            <div class="float-image wow fadeInRight">
                <img src="images/resource/tra.png" alt="" style="width: 570px;" />
            </div>

            <span class="icon icon-dots-1 bounce-x"></span>
            <span class="icon icon-dotted-map zoom-one"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Giới thiệu</span>
                            <h2>Trà ngon - Tận hưởng từng khoảnh khắc</h2>
                            <div class="text"> "Chào mừng bạn đến với SabujCha, nơi mang đến những tách trà tinh tế, đậm
                                đà hương vị thiên nhiên. Chúng tôi tự hào cung cấp đa dạng các loại trà chất lượng cao, từ
                                trà xanh thanh mát, trà đen truyền thống đến các dòng trà thảo mộc thơm ngon, tốt cho sức
                                khỏe. Với cam kết về nguồn gốc tự nhiên và quy trình sản xuất an toàn, [Tên shop] không chỉ
                                mang lại hương vị tuyệt vời mà còn giúp bạn thư giãn và chăm sóc sức khỏe mỗi ngày. Trải
                                nghiệm ngay hôm nay để tận hưởng từng khoảnh khắc trà!</div>
                        </div>
                        <div class="content-box">
                            <div class="about-block">
                                <i class="icon ">
                                    <i class="fa fa-clock"></i>
                                </i>
                                {{-- sdfggggggggggggggggggggg --}}
                                <h4 class="title">Hỗ trợ khách hàng</h4>
                                <p class="text">SabujCha luôn nhiệt tình tư vấn 24/7 để khách hàng có thể lựa chọn được
                                    những món đồ phù hợp nhất.</p>
                            </div>
                            <div class="about-block">
                                <i class="icon ">
                                    <i class="fa fa-box"></i>
                                </i>
                                <h4 class="title">Chính sách đổi trả</h4>
                                <p class="text">Cửa hàng luôn có trách nhiệm với từng sản phẩm của mình. Hỗ trợ đổi trả
                                    miễn phí với các sản phẩm lỗi.</p>
                            </div>
                        </div>
                        <div class="btm-box">
                            <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Tìm hiểu
                                    thêm</span></a>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image-1"><img src="images/resource/anh1.jpg" alt /></figure>
                        <figure class="image-2"><img src="images/resource/anh3.jpeg" alt /></figure>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="services-section">
        <div class="bg-image" style="background-image: url(images/background/1.jpg)"></div>
        <div class="anim-icons">
            <span class="icon icon-wave-line"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Những sản phẩm mới nhất của chúng tôi</span>
                <h2>Sản phẩm mới</h2>
            </div>
            <div class="row">

                @foreach ($products->take(8) as $index => $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-block all ">
                            <div class="inner-box no-border">
                                <div class="image">
                                    <a href="{{ route('products.detail', ['id' => $item->id]) }}">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->product_name }}"
                                            style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
                                    </a>
                                </div>
                                <div class="content ">
                                    <h4><a
                                            href="{{ route('products.detail', ['id' => $item->id]) }}">{{ $item->product_name }}</a>
                                    </h4>
                                    <span class="price">{{ number_format($item->regular_price, 0, ',', '.') }}₫</span>
                                </div>
                                <a href="{{ route('products.detail', ['id' => $item->id]) }}"
                                    class="theme-btn btn-style-one mb-2 small">
                                    <span class="btn-title">Mua ngay</span>
                                </a>
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
    </section>








    <section class="tracking-section pull-down">
        <div class="auto-container">
            <div class="outer-box">
                <div class="arrow-box wow fadeInRight">
                    <img src="images/icons/arrow-2.png" alt class="icon" />
                    <span class="title">Kết quả có <br />trong vài giây</span>
                </div>
                <div class="tracking-form">
                    <h4 class="title">Thoi dõi đơn<br />của bạn</h4>

                    <form method="post" action="https://html.kodesolution.com/2024/meato-html/job-list-v10.html">
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <span class="icon lnr-icon-user"></span>
                                <input type="text" name="field_name" placeholder="Nhập mã đơn hàng" />
                            </div>

                            <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                <span class="icon lnr-icon-envelope1"></span>
                                <input type="text" name="field_name" placeholder="Nhập email" />
                            </div>

                            <div class="form-group col-lg-4 col-md-12 col-sm-12 text-end">
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Kiểm
                                        tra</span></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <section class="call-to-action" style="background-image: url(images/background/bg9.webp)">
        <div class="auto-container">
            <div class="outer-box">
                <a href="https://youtu.be/prIcP_Jrx7o" class="play-now lightbox-image"><i
                        class="icon fa fa-play"></i><span class="ripple"></span></a>
                <div class="sec-title light mb-0">
                    <div class="sub-title">Liên hệ với chúng tôi bất cứ lúc nào</div>
                    <h1>Sản phẩm độc đáo <br />của chúng tôi</h1>
                    <a href="https://youtu.be/prIcP_Jrx7o" class="theme-btn btn-style-one hvr-light"><span
                            class="btn-title">Xem
                            video</span></a>
                </div>
            </div>
        </div>
    </section>




    <section class="work-section">
        <div class="anim-icons">
            <span class="icon icon-dotted-map-2 zoom-one"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Cách chúng tôi làm việc</span>
                <h2>3 nguyên tắc của chúng tôi</h2>
            </div>
            <div class="row">

                <div class="work-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="count">01</span>
                            <i class="icon "><i class="fa fa-heart"></i></i>
                        </div>
                        <h4 class="title">Luôn mang lại <br />những dịch vụ tốt nhất</h4>
                    </div>
                </div>

                <div class="work-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="count">02</span>
                            <i class="icon">
                                <i class="fa fa-box"></i>
                            </i>
                        </div>
                        <h4 class="title">Sản phẩm chính hãng<br />chất lượng đảm bảo</h4>
                    </div>
                </div>

                <div class="work-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="count">03</span>
                            <i class="icon">
                                <i class="fa fa-phone-volume"></i>
                            </i>
                        </div>
                        <h4 class="title">Hỗ trợ tư vấn <br />& đổi trả</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fun-fact-section p-0">
        <div class="auto-container">
            <div class="outer-box">
                <div class="bg-image" style="background-image: url(images/background/3.jpg)"></div>
                <div class="row">

                    <div class="content-column col-lg-7 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <span class="sub-title" style="color: black">SabujCha</span>
                                <h2 style="color: black">Nghệ thuật trà, hòa quyện cảm xúc!</h2>
                                <div class="text" style="color: black"> SabujCha luôn cam kết mang đến trải nghiệm mua
                                    sắm tuyệt vời nhất cho
                                    khách hàng. Chúng tôi không ngừng nỗ lực để cung cấp dịch vụ chất lượng và giao hàng
                                    đúng hẹn, giúp khách hàng yên tâm tận hưởng sản phẩm mình yêu thích. Sự hài lòng của quý
                                    khách luôn là ưu tiên hàng đầu của chúng tôi. .</div>
                            </div>
                            <div class="fact-counter">
                                <div class="row">

                                    <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner">
                                            <div class="count-box"><span class="count-text" data-speed="3000"
                                                    data-stop="869">0</span></div>
                                            <h4 class="counter-title">Số đơn hàng <br />thành công</h4>
                                            <i class="icon flaticon-butcher-1"></i>
                                        </div>
                                    </div>

                                    <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner">
                                            <div class="count-box"><span class="count-text" data-speed="3000"
                                                    data-stop="683">0</span></div>
                                            <h4 class="counter-title">Phản hồi <br />tích cực</h4>
                                            <i class="icon"> <i class="fa fa-smile"></i></i>
                                        </div>
                                    </div>

                                    <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner">
                                            <div class="count-box"><span class="count-text" data-speed="3000"
                                                    data-stop="975">0</span></div>
                                            <h4 class="counter-title">Đơn hàng<br />được giao đúng hạn</h4>
                                            <i class="icon"> <i class="fa fa-clock"></i></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <figure class="image"><img src="images/resource/am.png" alt
                                    style="width: 810px; height: auto; margin-top:125px;" /></figure>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-section pb-0">
        <div class="large-container">
            <div class="sec-title text-center">
                <span class="sub-title"></span>
                <h2>Sản phẩm được ưa chuộng</h2>
            </div>

            <div class="project-carousel owl-carousel owl-theme">

                <div class="project-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="images/set1.jpg" class="lightbox-image"><img src="images/set2.jpg" alt /></a>
                            </figure>
                            <a href="page-project-details.html" class="icon"><i class="fa fa-plus"></i></a>
                        </div>

                    </div>
                </div>

                <div class="project-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="images/resource/project-2.jpg" class="lightbox-image"><img src="images/set3.jpg"
                                        alt /></a>
                            </figure>
                            <a href="page-project-details.html" class="icon"><i class="fa fa-plus"></i></a>
                        </div>

                    </div>
                </div>

                <div class="project-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="images/resource/project-3.jpg" class="lightbox-image"><img src="images/set4.jpg"
                                        alt /></a>
                            </figure>
                            <a href="page-project-details.html" class="icon"><i class="fa fa-plus"></i></a>
                        </div>

                    </div>
                </div>

                <div class="project-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="images/resource/project-4.jpg" class="lightbox-image"><img src="images/set2.jpg"
                                        alt /></a>
                            </figure>
                            <a href="page-project-details.html" class="icon"><i class="fa fa-plus"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="why-choose-us pull-up pb-0">
        <div class="bg-image" style="background-image: url(images/background/4.jpg)"></div>
        <div class="anim-icons">
            <div class="float-image"><img src="images/background/ngoc.png" alt /></div>
        </div>
        <div class="auto-container">
            <div class="row">

                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="sub-title">Bộ sưu tập mới</span>
                            <h2>Nhận thông báo của chúng tôi về những sản phẩm mới nhất</h2>
                        </div>

                        <div class="feature-block-two">
                            <div class="inner-box">
                                <i class="icon">
                                    <i class="fa fa-clock"></i>
                                </i>
                                <h4 class="title">Sắp ra mắt</h4>
                                <p class="text">Cơ hội cho Trà Shan Tuyết phủ sóng thị trường Châu Âu</p>
                            </div>
                        </div>

                        <div class="feature-block-two">
                            <div class="inner-box">
                                <i class="icon">
                                    <i class="fa fa-clock"></i>
                                </i>
                                <h4 class="title">Sắp ra mắt</h4>
                                <p class="text">Amata – Tinh chất Trà Shan Tuyết cổ thụ</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <div class="contact-form wow fadeInLeft">

                            <form method="post" action="https://html.kodesolution.com/2024/meato-html/get"
                                id="contact-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Họ và tên:</label>
                                        <input type="text" name="full_name" placeholder required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Email:</label>
                                        <input type="text" name="Email" placeholder required />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Số điện thoại:</label>
                                        <input type="text" name="Phone" placeholder required />
                                    </div>



                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-two hvr-light" type="submit"
                                            name="submit-form"><span class="btn-title">Gửi
                                            </span></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Sản phẩm mới</span>
                            <h2>"Amata – Tinh chất Trà Shan Tuyết cổ thụ"</h2>
                            <h4>Thú thưởng trà xưa và nay của người Việt
                            </h4>
                            <div class="text">Amata là dòng trà đặc biệt, mang đến sự mát lành và ngọt ngào với tác dụng
                                chữa lành và thải độc cơ thể. Được khai thác từ những vùng nguyên liệu đậm đà, dồi dào nội
                                chất, Amata chứa đựng những tinh túy quý giá của trà Shan tuyết cổ thụ – loại cây linh khí
                                của đất trời. Qua quá trình chiết xuất cẩn trọng và tỉ mỉ, mỗi giọt trà đều lưu giữ trọn vẹn
                                hương vị đặc trưng và tinh túy nhất. Khi nhấp một ngụm Amata, bạn sẽ như cảm nhận được hương
                                đồng gió nội hòa quyện cùng mùi vị núi rừng, đưa tâm hồn trở về với thiên nhiên hoang sơ,
                                hùng vĩ.</div>
                        </div>
                        <div class="row">

                            <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">

                                <figure class="image"><img src="images/background/ao1.jpg" alt=""
                                        style="width: 250px; height: auto; border-radius: 10px;" /></figure>

                            </div>

                            <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                                <figure class="image"><img src="images/background/ao2.jpg" alt=""
                                        style="width: 250px; height: auto; border-radius: 10px;" /></figure>

                            </div>

                            <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                                <figure class="image"><img src="images/background/ao1.jpg" alt=""
                                        style="width: 250px; height: auto; border-radius: 10px;" /></figure>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image-1 wow fadeInUp"><img src="images/background/da1.jpg" alt />
                        </figure>
                        <figure class="image-2 wow fadeInRight">
                            <img src="images/background/da2.jpg" alt style="width: 200px; height: auto;" />
                            <div class="icon-box"><i class="fa fa-heart"></i></div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-section pt-0">
        <div class="anim-icons">
            <span class="icon icon-bg-dots"></span>
            <span class="icon icon-plane-2 bounce-y"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Phản hồi của khách hàng</span>
                <h2>Một số phản hồi <br />của khách hàng</h2>
            </div>
            <div class="outer-box">

                <div class="testimonial-carousel owl-carousel owl-theme">

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star-half-alt"></i></div>
                                <div class="text">“Khám phá cửa hàng thời trang này là một trải nghiệm tuyệt vời. Tôi đã
                                    tìm thấy những mẫu váy và áo sơ mi vô cùng ấn tượng. Đội ngũ nhân viên thân thiện và am
                                    hiểu sẵn sàng tư vấn, giúp tôi chọn lựa những trang phục phù hợp với phong cách riêng
                                    của mình.</div>
                            </div>
                            <div class="thumb"><img src="images/resource/testi-thumb-1.jpg" alt /></div>
                            <span class="designation">Co Founder</span>
                            <h4 class="name">Jhon D. William</h4>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star-half-alt"></i></div>
                                <div class="text">“Cửa hàng thời trang này không chỉ cung cấp những bộ trang phục đẹp mắt
                                    mà còn mang đến cho khách hàng trải nghiệm mua sắm đáng nhớ. Tôi thực sự thích cách họ
                                    kết hợp giữa phong cách truyền thống và xu hướng hiện đại. Tuyệt vời!.</div>
                            </div>
                            <div class="thumb"><img src="images/resource/testi-thumb-2.jpg" alt /></div>
                            <span class="designation">Co Founder</span>
                            <h4 class="name">Aleesha Brown</h4>
                        </div>
                    </div>

                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="content-box">
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star-half-alt"></i></div>
                                <div class="text">“Thời trang phong cách nhật bản tại cửa hàng thật sự tuyệt vời! Tôi rất
                                    hài lòng với chất lượng của sản phẩm và sự phục vụ tận tình từ nhân viên. Đây là điểm
                                    đến lý tưởng cho những ai yêu thích phong cách Nhật Bản.".</div>
                            </div>
                            <div class="thumb"><img src="images/resource/testi-thumb-3.jpg" alt /></div>
                            <span class="designation">Co Founder</span>
                            <h4 class="name">Mike Hardon</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="offer-section">
        <div class="auto-container">
            <div class="row">


            </div>
        </div>
    </section>


    <section class="news-section">

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Tin tức</span>
                <h2>
                    Tin tức
                    mới nhất
                </h2>
            </div>
            <div class="row">

                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ url('/blog-detail') }}"><img src="images/tt1.png" alt /></a>
                            </figure>
                            <span class="date"><b>28</b> SEP</span>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="fa fa-user"></i> by Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <span>Trà như Bách Thái Nhân Sinh
                                Trà như thơ: có uyển chuyển hàm xúc, có phóng khoáng ngang tàng; trà cũng như thư pháp:..
                            </span>
                            <a href="{{ url('/blog-detail') }}" class="read-more">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ url('/blog-detail') }}"><img src="images/tt2.jpg" alt /></a>
                            </figure>
                            <span class="date"><b>28</b> SEP</span>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="fa fa-user"></i> by Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <span class="title"><a href="{{ url('/blog-detail') }}">Mùa xuân – mùa khởi đầu của vạn vật,
                                    của đất trời, cây cối sau quãng thời gian dài “ngủ đông” được đánh thức bằng không khí
                                    se se lạnh bao phủ đất trời và sự ẩm ướt của riêng mùa xuân.
                                </a></span>
                            <a href="{{ url('/blog-detail') }}" class="read-more">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ url('/blog-detail') }}"><img src="images/tt4.jpg" alt /></a>
                            </figure>
                            <span class="date"><b>28</b> SEP</span>
                        </div>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="fa fa-user"></i> by Admin</li>
                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                            </ul>
                            <span class="title"><a href="{{ url('/blog-detail') }}">Bạch Trà – loại trà sống ở trên núi
                                    cao, tránh xa hồng trần thì vị càng ngọt, hương thơm như hương rừng, sạch trong như nước
                                    suối đầu non.</a>
                            </span>
                            <a href="{{ url('/blog-detail') }}" class="read-more">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="clients-section">
        <div class="anim-icon">
            <span class="icon dotted-line-1"></span>
            <span class="icon dotted-line-2"></span>
        </div>

        </div>
    </section>
@endsection
