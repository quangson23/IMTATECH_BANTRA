@extends('layout.admin.master')
@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Chi tiết sản phẩm</h4>
                <div class="card-body">
                    <form action="{{ route('product.show', $productS->id) }}" method="POST" enctype="multipart/form-data">
                        {{-- 1 cơ chế bảo mật của laravel --}}
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Tên sản phẩm:</label>
                            <input type="text" class="form-control" name="product_name"
                                value="{{ $productS->product_name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Số lượng:</label>
                            <input type="number" class="form-control" value="{{ $productS->quantity }}" min="1"
                                name="quantity" placeholder="Nhập số lượng sản phẩm" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Giá sản phẩm:</label>
                            <input type="number" class="form-control" value="{{ $productS->regular_price }}" min="1"
                                name="regular_price" placeholder="Nhập giá sản phẩm" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ngày nhập:</label>
                            <input type="date" class="form-control" min="1" value="{{ $productS->created_at_pd }}"
                                name="created_at_pd" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả:</label>
                            <textarea class="form-control" rows="3" name="product_description" disabled>{{ $productS->product_description }}</textarea>
                        </div>



                        <div class="mb-3">
                            <label for="" class="form-label">Danh mục:</label><br>
                            <select class="form-control" name="category_id" disabled>
                                @foreach ($categories as $item)
                                    <option {{ $item->id == $productS->category_id ? 'selected' : '' }}
                                        value="{{ $item->id }}">{{ $item->categories_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Ảnh</label>
                            <div id="image" class="border p-3">
                                <!-- Ảnh được hiển thị ở đây -->
                                <img src="{{ asset('storage/' . $productS->image) }}" alt="Ảnh sản phẩm" id="image" width="200px" style="display:block;" >
                            </div>
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
