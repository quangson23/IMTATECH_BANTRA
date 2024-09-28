@extends('layout.client.master')
@section('main-content')
    <section class="page-title" style="background-image: url(images/bannerpage.jpg)">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Về chúng tôi</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index-2.html">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>

                </ul>
            </div>
        </div>
    </section>
    <section class="team-section pb-40">
        <div class="auto-container">
            <div class="container d-flex">

                <div class="text" style="width:1200px">
                    <h3>Giới Thiệu Về Chúng Tôi</h3>
                    <p>
                        Tại Shop Trà Đặc Biệt, chúng tôi mang đến cho bạn những loại trà tốt nhất từ khắp nơi trên thế giới. Mỗi loại trà mà chúng tôi cung cấp đều được tuyển chọn kỹ lưỡng từ những vùng trồng trà nổi tiếng như Nhật Bản, Đài Loan, Ấn Độ và Việt Nam. Chúng tôi hiểu rằng trà không chỉ đơn thuần là một thức uống, mà còn là một trải nghiệm văn hóa sâu sắc và giàu ý nghĩa.

                        Với niềm đam mê trà, chúng tôi cẩn thận lựa chọn từng lá trà để đảm bảo chất lượng và hương vị tuyệt hảo. Đội ngũ chuyên gia của chúng tôi không ngừng tìm kiếm và thử nghiệm những loại trà mới lạ, đồng thời tôn trọng những phương pháp chế biến truyền thống để mang lại cho khách hàng những sản phẩm tinh túy nhất. Từ hương thơm quyến rũ của trà xanh Nhật Bản đến vị đậm đà của trà Ô Long Đài Loan, mỗi loại trà đều kể một câu chuyện riêng và mang lại cảm giác thư giãn, sảng khoái.

                        Chúng tôi cũng cam kết mang đến cho bạn những trải nghiệm mua sắm tuyệt vời với dịch vụ khách hàng thân thiện và chuyên nghiệp. Hãy đến với Shop Trà Đặc Biệt để khám phá thế giới trà phong phú và tìm ra hương vị yêu thích của riêng bạn!
                    </p>

                    <h3>Sản Phẩm Nổi Bật</h3>
                    <ul>
                        <li>Trà Xanh Nhật Bản</li>
                        <li>Trà Ô Long Đài Loan</li>
                        <li>Trà Đen Ấn Độ</li>
                        <li>Trà Thảo Mộc Việt Nam</li>
                    </ul>

                    <h3>Địa Chỉ Liên Hệ</h3>
                    <p>Địa chỉ: 123 Đường Trà, Thành Phố Hà Nội</p>
                    <p>Điện thoại: (0123) 456 789</p>
                    <p>Email: contact@shoptradacbiet.com</p>

                    <a href="contact.html" class="button">Liên Hệ Chúng Tôi</a>
                </div>
                <div class="image" style="margin-top: 80px; margin-left:30px">
                    <img src="{{ asset('images/tt2.jpg') }}" alt="Trà Đặc Biệt"> <!-- Thay đổi URL hình ảnh -->
                </div>
            </div>




            <div class="row">
                <div style="text-align: center">
                    <h2>Đội ngũ phát triển</h2>
                </div>
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-team-details.html"><img src="images/resource/team-1.jpg"
                                        alt></a></figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Manager</span>
                            <h4 class="name"><a href="page-team-details.html">Jessica Brown</a></h4>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-team-details.html"><img src="images/resource/team-2.jpg"
                                        alt></a></figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Manager</span>
                            <h4 class="name"><a href="page-team-details.html">Richerd Fred</a></h4>
                        </div>
                    </div>
                </div>

                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="page-team-details.html"><img src="images/resource/team-3.jpg"
                                        alt></a></figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="info-box">
                            <span class="designation">Manager</span>
                            <h4 class="name"><a href="page-team-details.html">Richerd Fred</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
