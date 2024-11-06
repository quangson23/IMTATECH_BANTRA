{{-- extends: Chỉ định layout được sử dụng --}}
@extends('layout.admin.master')

{{-- section: định nghĩa nội dung của section --}}

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Chi tiết bài viết</h4>
                <div class="card-body">
                    <form action="{{ route('bai-viet.update', $baivietS->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- Cơ chế bảo mật của Laravel --}}
                        @method('put')
                        @csrf

                        <!-- Hình ảnh cũ -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Hình ảnh hiện tại:</label>
                            <div>
                                @if($baivietS->hinh_anh)
                                    <img src="{{ asset('storage/' . $baivietS->hinh_anh) }}" width="100" height="100" alt="Ảnh cũ">
                                @else
                                    <p>Không có ảnh hiện tại</p>
                                @endif
                            </div>
                        </div>



                        <!-- Tiêu đề -->
                        <div class="mb-3">
                            <label for="tieu_de" class="form-label">Tiêu đề:</label>
                            <input type="text" name="tieu_de" id="tieu_de" class="form-control" value="{{ old('tieu_de', $baivietS->tieu_de) }}" required readonly>
                        </div>

                        <!-- Nội dung -->
                        <div class="mb-3">
                            <label for="noi_dung" class="form-label">Nội dung:</label>
                            <textarea readonly name="noi_dung" id="noi_dung" class="form-control" rows="5" required>{{ old('noi_dung', $baivietS->noi_dung) }}</textarea>
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="trang_thai" class="form-label">Trạng thái:</label>
                            <select name="trang_thai" id="trang_thai" class="form-control" required disabled>
                                <option value="hien" {{ old('trang_thai', $baivietS->trang_thai) == 'hien' ? 'selected' : '' }}>Hiện</option>
                                <option value="an" {{ old('trang_thai', $baivietS->trang_thai) == 'an' ? 'selected' : '' }}>Ẩn</option>
                            </select>
                        </div>

                        <!-- Nút sửa -->

                    </form>


                </div>
            </div>
        </section>
    </div>
@endsection
