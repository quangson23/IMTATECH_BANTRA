@extends('layout.admin.master')

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Thêm mã giảm giá</h4>
                <div class="card-body">
                    <form action="{{ route('coupon.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Tên mã -->
                        <div class="mb-3">
                            <label for="" class="form-label">Tên mã:</label>
                            <input type="text" class="form-control" name="coupon_name"
                                placeholder="Nhập tên mã" value="{{ old('coupon_name') }}">
                            @error('coupon_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Loại mã -->
                        <div class="mb-3">
                            <label for="coupon_condition" class="form-label">Loại mã:</label>
                            <select class="form-control" name="coupon_condition">
                                <option value="1" {{ old('coupon_condition') == 1 ? 'selected' : '' }}>Giảm theo %</option>
                                <option value="0" {{ old('coupon_condition') == 0 ? 'selected' : '' }}>Giảm theo tiền</option>
                            </select>
                            @error('coupon_condition')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Nhập số tiền giảm/ % giảm:</label>
                            <input type="number" class="form-control" min="1" name="coupon_price" placeholder="Nhập giá sản phẩm">
                        </div>


                        <!-- Số lượng -->
                        <div class="mb-3">
                            <label for="" class="form-label">Số lượng:</label>
                            <input type="text" class="form-control" name="coupon_number"
                                placeholder="Nhập số lượng" value="{{ old('coupon_number') }}">
                            @error('coupon_number')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Mã code -->
                        <div class="mb-3">
                            <label for="" class="form-label">Mã code:</label>
                            <input type="text" class="form-control" name="coupon_code"
                                placeholder="Nhập mã code" value="{{ old('coupon_code') }}">
                            @error('coupon_code')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Ngày bắt đầu -->
                        <div class="mb-3">
                            <label for="" class="form-label">Ngày bắt đầu:</label>
                            <input type="date" class="form-control" min="1" name="start_date">
                        </div>

                        <!-- Ngày kết thúc -->
                        <div class="mb-3">
                            <label for="" class="form-label">Ngày kết thúc:</label>
                            <input type="date" class="form-control" min="1" name="end_date">
                        </div>

                        <!-- Trạng thái -->
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

                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
