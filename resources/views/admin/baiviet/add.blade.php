@extends('layout.admin.master')

{{-- section: định nghĩa nội dung của section --}}

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Thêm bài viết</h4>
                <div class="card-body">
                    <form action="{{ route('bai-viet.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Hình ảnh -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh:</label>
                            <div id="image-preview" class="image-preview">
                                <label for="image" id="image-label">Chọn file</label>
                                <input type="file" name="hinh_anh" id="image" />
                            </div>
                        </div>

                        <!-- Tiêu đề -->
                        <div class="mb-3">
                            <label for="tieu_de" class="form-label">Tiêu đề:</label>
                            <input type="text" name="tieu_de" id="tieu_de" class="form-control" required>
                        </div>

                        <!-- Nội dung -->
                        <div class="mb-3">
                            <label for="noi_dung" class="form-label">Nội dung:</label>
                            <textarea name="noi_dung" id="noi_dung" class="form-control" rows="5" required></textarea>
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="trang_thai" class="form-label">Trạng thái:</label>
                            <select name="trang_thai" id="trang_thai" class="form-select" required>
                                <option value="hien">Hiện</option>
                                <option value="an">Ẩn</option>
                            </select>
                        </div>

                        <!-- Nút thêm mới -->
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
