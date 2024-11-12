@extends('layout.admin.master')
@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Thêm sản phẩm</h4>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        {{-- 1 cơ chế bảo mật của laravel --}}
                        @csrf

                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tên sản phẩm:</label>
                                    <input type="text" class="form-control" name="product_name" placeholder="Nhập tên sản phẩm">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Số lượng:</label>
                                    <input type="number" class="form-control" min="1" name="quantity" placeholder="Nhập số lượng sản phẩm">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Giá sản phẩm:</label>
                                    <input type="number" class="form-control" min="1" name="regular_price" placeholder="Nhập giá sản phẩm">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Giá khuyến mại:</label>
                                    <input type="number" class="form-control" min="1" name="discount_price" placeholder="Nhập giá sản phẩm">
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Ngày nhập:</label>
                                    <input type="date" class="form-control" min="1" name="created_at">
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="" class="form-label">Mô tả:</label>
                                    <textarea class="form-control" rows="3" name="product_description" placeholder="Nhập mô tả sản phẩm"></textarea>
                                </div> --}}

                                <div class="mb-3">
                                    <label for="" class="form-label">Mô tả ngắn:</label>
                                    <textarea class="form-control"  rows="3" name="short_description" placeholder="Nhập mô tả sản phẩm">{{ old('product_description') }}</textarea>
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Mô tả:</label>
                                    <textarea class="summernote" rows="3" name="product_description" placeholder="Nhập mô tả sản phẩm">{{ old('product_description') }}</textarea>
                                </div>




                                <div class="mb-3">
                                    <label for="" class="form-label">Danh mục:</label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->categories_name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label">Chương trình khuyến mại:</label>
                                    <select class="form-control" name="promotions_id">
                                        @foreach ($promotions as $item)
                                            <option value="{{ $item->id }}">{{ $item->promotions_name }}</option>
                                        @endforeach
                                    </select>
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
                                            <input type="file" name="image" id="image-upload" onchange="showImage(event)" class="d-none" />
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
