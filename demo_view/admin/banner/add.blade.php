@extends('layout.admin.master')

{{-- section: định nghĩa nội dung của section --}}

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Thêm Banner</h4>
                <div class="card-body">
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        {{-- 1 cơ chế bảo mật của laravel --}}
                        @csrf



                        <div class="mb-3">
                            <label for="" class="form-label">Hình ảnh:</label>
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="image" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">URL</label>
                            <textarea class="form-control" rows="3" name="image_url" placeholder="Nhập url"></textarea>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
