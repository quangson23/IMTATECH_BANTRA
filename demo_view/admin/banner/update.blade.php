{{-- extends: Chỉ định layout được sử dụng --}}
@extends('layout.admin.master')

{{-- section: định nghĩa nội dung của section --}}

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Sửa danh mục</h4>
                <div class="card-body">
                    <form action="{{ route('banner.update', $bannerS->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- 1 cơ chế bảo mật của laravel --}}
                        @method('put')
                        @csrf




                        <div class="mb-3">
                            <label for="" class="form-label">Hình ảnh:</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">URL:</label>
                            <textarea class="form-control" rows="3" name="image_url"placeholder="Nhập mô tả sản phẩm">{{ $bannerS->image_url }}</textarea>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Sửa sp</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
