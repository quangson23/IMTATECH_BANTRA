{{-- extends: Chỉ định layout được sử dụng --}}
@extends('layout.admin.master')

{{-- section: định nghĩa nội dung của section --}}



@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Thêm danh mục</h4>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        {{-- 1 cơ chế bảo mật của laravel --}}
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Tên sản phẩm:</label>
                            <input type="text" class="form-control" name="categories_name"
                                placeholder="Nhập tên sản phẩm" value="{{ old('categories_name') }}">
                            @error('categories_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả:</label>
                            <textarea class="summernote" rows="3" name="categories_description" placeholder="Nhập mô tả sản phẩm">{{ old('categories_description') }}</textarea>
                        </div>


                        <div class="mb-3">
                            <label for="image-upload" class="form-label">Hình ảnh:</label>
                            <div id="image-preview" class="border p-3">
                                <label for="image-upload" id="image-label" class="btn btn-primary">Choose File</label>
                                <input type="file" name="image_path" id="image-upload" onchange="showImage(event)" class="d-none" />
                                <img style="display:none;" id="image_category" src="" alt="Hình ảnh danh mục" width="200px">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="categories_status" class="form-label">Trạng thái:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="categories_status" id="gridRadios1"
                                    value="1" {{ old('categories_status') == 1 ? 'checked' : '' }}>
                                <label class="form-check-label text-success" for="gridRadios1">Hiển thị</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="categories_status" id="gridRadios2"
                                    value="0" {{ old('categories_status') == 0 ? 'checked' : '' }}>
                                <label class="form-check-label text-danger" for="gridRadios2">Ẩn</label>
                            </div>
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                        </div>
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
@endsection

{{-- @section('js')
    <script>
        function showImage(event) {
            const image_category = document.getElementById('image_category');

            console.log(image_category);
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function() {
                image_category.src = reader.result;
                image_category.style.display = 'block';
            }
            if (file) {
                reader.readAsDataUrl(file);
            }
        }
    </script>
@endsection --}}
