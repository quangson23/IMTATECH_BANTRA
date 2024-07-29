@extends('layout.admin.master')

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Sửa mã giảm</h4>
                <div class="card-body">
                    <form action="{{ route('coupon.update', $couponS->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Tên:</label>
                            <input type="text" class="form-control" name="coupon_name"
                                value="{{ $couponS->coupon_name }}" placeholder="Nhập tên mã">
                        </div>

                        <div class="mb-3">
                            <label for="coupon_condition" class="form-label">Loại giảm giá:</label>
                            <select class="form-control" name="coupon_condition">
                                <option value="1" {{ (old('coupon_condition', $couponS->coupon_condition) == 1) ? 'selected' : '' }}>Giảm theo %</option>
                                <option value="0" {{ (old('coupon_condition', $couponS->coupon_condition) == 0) ? 'selected' : '' }}>Giảm theo giá</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Nhập số tiền giảm/ % giảm:</label>
                            <input type="text" class="form-control" name="coupon_price"
                                value="{{ $couponS->coupon_price }}" placeholder="Nhập số tiền giảm/ % giảm:">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Số lượng</label>
                            <input type="text" class="form-control" name="coupon_number"
                                value="{{ $couponS->coupon_number }}" placeholder="Nhập số lượng">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Mã code:</label>
                            <input type="text" class="form-control" name="coupon_code"
                                value="{{ $couponS->coupon_code }}" placeholder="Nhập mã code">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Ngày bắt đầu:</label>
                            <input type="date" class="form-control" min="1" value="{{ $couponS->start_date }}"
                                name="start_date">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Ngày kết thúc:</label>
                            <input type="date" class="form-control" min="1" value="{{ $couponS->end_date }}"
                                name="end_date">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái:</label>
                            <select class="form-control" name="status">
                                <option value="1" {{ (old('status', $couponS->status) == 1) ? 'selected' : '' }}>Kích hoạt</option>
                                <option value="0" {{ (old('status', $couponS->status) == 0) ? 'selected' : '' }}>Đóng</option>
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
