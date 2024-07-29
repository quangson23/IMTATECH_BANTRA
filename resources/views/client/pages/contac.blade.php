@extends('layout.client.master')
@section('main-content')
<section class="page-title" style="background-image: url(images/bannerpage.jpg)">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Liên hệ</h1>
            <ul class="page-breadcrumb">
                <li><a href="index-2.html">Trang chủ</a></li>
                <li><a href="#">Pages</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>


<section class="contact-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="contact-details__right">
                    <div class="sec-title">
                        <span class="sub-title">Need any help?</span>
                        <h2>Get in touch with us</h2>
                        <div class="text">Lorem ipsum is simply free text available dolor sit amet, consectetur notted
                            adipisicing elit sed do eiusmod tempor incididunt simply free ut labore et dolore magna
                            aliqua.</div>
                    </div>
                    <ul class="list-unstyled contact-details__info">
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-phone-plus"></span>
                            </div>
                            <div class="text">
                                <h6>Have any question?</h6>
                                <a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-envelope1"></span>
                            </div>
                            <div class="text">
                                <h6>Write email</h6>
                                <a
                                    href="https://html.kodesolution.com/cdn-cgi/l/email-protection#dab4bfbfbeb2bfb6aa9ab9b5b7aabbb4a3f4b9b5b7"><span
                                        class="__cf_email__"
                                        data-cfemail="7a141f1f1e121f160a3a1915170a1b140354191517">[email&#160;protected]</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text">
                                <h6>Visit anytime</h6>
                                <span>66 broklyn golden street. New York</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="sec-title">
                    <span class="sub-title">Gửi mail cho chúng tôi</span>
                    <h2>Feel free to write</h2>
                </div>

                <form id="contact_form" name="contact_form" class
                    action="https://html.kodesolution.com/2024/meato-html/includes/sendmail.php" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label>Name <small>*</small></label>
                                <input name="form_name" class="form-control" type="text" placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label>Email <small>*</small></label>
                                <input name="form_email" class="form-control required email" type="email"
                                    placeholder="Enter Email" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label>Subject <small>*</small></label>
                                <input name="form_subject" class="form-control required" type="text"
                                    placeholder="Enter Subject" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label>Phone</label>
                                <input name="form_phone" class="form-control" type="text"
                                    placeholder="Enter Phone" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Message</label>
                        <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-3">
                        <input name="form_botcheck" class="form-control" type="hidden" value />
                        <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span
                                class="btn-title">Send message</span></button>
                        <button type="reset" class="theme-btn btn-style-one"><span
                                class="btn-title">Reset</span></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


<section>
    <div class="container-fluid p-0">
        <div class="row">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd"
                data-tm-width="100%" height="500" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>
@endsection
