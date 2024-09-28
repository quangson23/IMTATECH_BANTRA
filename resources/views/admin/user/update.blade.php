{{-- extends: Chỉ định layout được sử dụng --}}
@extends('layout.admin.master')

{{-- section: định nghĩa nội dung của section --}}



@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Chỉnh sửa quyền</h4>
                <div class="card-body">
                    <form action="{{ route('user.update', $userS->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="role" class="form-label">Quyền hạn:</label>
                            <select class="form-control" name="role_id" id="role" >
                                @foreach ($roles as $role)
                                    <option value="{{ $role['id'] }}" {{ $userS->role == $role['id'] ? 'selected' : '' }}>
                                        {{ $role['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Sửa quyền</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
