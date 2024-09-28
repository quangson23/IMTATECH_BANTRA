@extends('layout.admin.master')
@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Thêm chương trình khuyến mại</h4>
                <div class="card-body">
                    <form action="{{ route('promotion.store') }}" method="POST" enctype="multipart/form-data">
                        {{-- 1 cơ chế bảo mật của laravel --}}
                        @csrf

                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tên:</label>
                                    <input type="text" class="form-control" name="promotions_name" placeholder="Nhập tên sản phẩm">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Mô tả:</label>
                                    <textarea class="form-control" rows="3" name="promotions_description" placeholder="Nhập mô tả sản phẩm"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="promotions_condition" class="form-label">Loại khuyến mại:</label>
                                    <select class="form-control" name="promotions_condition">
                                        <option value="1" {{ old('promotions_condition') == 1 ? 'selected' : '' }}>Giảm theo %</option>
                                        <option value="0" {{ old('promotions_condition') == 0 ? 'selected' : '' }}>Giảm theo tiền</option>
                                    </select>
                                    @error('promotions_condition')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Nhập số tiền giảm/ % giảm:</label>
                                    <input type="number" class="form-control" min="1" name="promotions_price" placeholder="Nhập giá sản phẩm">
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Ngày bắt đầu:</label>
                                    <input type="date" class="form-control" min="1" name="start_date">
                                </div>

                                <!-- Ngày kết thúc -->
                                <div class="mb-3">
                                    <label for="" class="form-label">Ngày kết thúc:</label>
                                    <input type="date" class="form-control" min="1" name="end_date">
                                </div>


                                <div class="mb-3">
                                    <label for="status" class="form-label">Trạng thái:</label>
                                    <select class="form-control" name="status">
                                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Kích hoạt</option>
                                        <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Đóng</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>






                                <div class="mb-3 d-flex justify-content-center" >
                                    <button type="submit" class="btn btn-success">Thêm mới</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="image-upload" class="form-label"></label>
                                    <div id="image-preview" class="border p-3 text-center image-container">
                                        <img id="image_category" src="{{ asset('images/trong.jpg') }}" alt="Hình ảnh sản phẩm" class="img-fluid mb-3 image-preview-img">
                                        <div>
                                            <input type="file" name="image_path" id="image-upload" onchange="showImage(event)" class="d-none" />
                                            <label for="image-upload" id="image-label" class="btn btn-primary">Chọn ảnh</label>
                                        </div>
                                        <small class="form-text text-muted">Chọn ảnh dung lượng tối đa 1MB</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="mb-3 d-flex justify-content-center" >
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script>
        function showImage(event) {
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var image = document.getElementById('image_category');
                    image.src = e.target.result;
                    image.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <style>
        /* Tùy chỉnh chiều rộng của phần hình ảnh */
        .image-container {
            max-width: 80%; /* Giảm chiều rộng khung chứa ảnh */
            margin: 0 auto; /* Căn giữa khung chứa ảnh */
        }

        .image-preview-img {
            max-width: 100%; /* Đảm bảo ảnh không vượt quá chiều rộng của khung chứa */
            height: auto; /* Giữ tỷ lệ khung hình */
        }
    </style>
@endsection
