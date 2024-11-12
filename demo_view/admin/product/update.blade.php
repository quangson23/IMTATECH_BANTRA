@extends('layout.admin.master')
@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Sửa sản phẩm</h4>
                <div class="card-body">
                    <form action="{{ route('product.update', $productS->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- 1 cơ chế bảo mật của laravel --}}
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Tên sản phẩm:</label>
                            <input type="text" class="form-control" name="product_name"
                                value="{{ $productS->product_name }}" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Số lượng:</label>
                            <input type="number" class="form-control" value="{{ $productS->quantity }}" min="1"
                                name="quantity" placeholder="Nhập số lượng sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Giá sản phẩm:</label>
                            <input type="number" class="form-control" value="{{ $productS->regular_price }}" min="1"
                                name="regular_price" placeholder="Nhập giá sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ngày nhập:</label>
                            <input type="date" class="form-control" min="1" value="{{ $productS->created_at }}"
                                name="created_at">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả:</label>
                            <textarea class="form-control" rows="3" name="product_description"placeholder="Nhập mô tả sản phẩm">{{ $productS->product_description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Danh mục:</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $item)
                                    <option {{ $item->id == $productS->category_id ? 'selected' : '' }}
                                        value="{{ $item->id }}">{{ $item->categories_name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Chương trình khuyến mại:</label>
                            <select class="form-control" name="promotions_id">
                                @foreach ($promotions as $item)
                                    <option {{ $item->id == $productS->promotions_id ? 'selected' : ''}}
                                     value="{{ $item->id }}">{{ $item->promotions_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Hình ảnh:</label>
                            <input type="file" class="form-control" name="image">
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
