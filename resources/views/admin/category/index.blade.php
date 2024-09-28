@extends('layout.admin.master')

@section('main-content')
    <style>
        .custom-badge {
            display: inline-block;
            font-size: 0.7rem;
            padding: 0.4rem 0.8rem;
            width: 80px;
            /* Đặt chiều rộng cố định */
            text-align: center;
            border-radius: 0.60rem;
            /* Đảm bảo các góc của badge tròn */
        }
    </style>
    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Danh sách danh mục</h4>

                {{-- body --}}
                <div class="card-body">


                    <form action="{{ route('category.bulkDelete') }}" method="POST" id="bulk-delete-form">
                        @csrf
                        @method('DELETE')
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>#</th>
                                    <th>Tên danh mục</th>
                                    <th>Mô tả</th>
                                    <th>Hình ảnh</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $index => $item)
                                        <tr>
                                            <td><input type="checkbox" name="categories[]" value="{{ $item->id }}"></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->categories_name }}</td>

                                            <td>
                                                <textarea class="form-control" rows="3" readonly>{{ strip_tags($item->categories_description) }}</textarea>
                                            </td>


                                            <td>
                                                <img src="{{ asset('storage/' . $item->image_path) }}" width="100"
                                                    height="100" alt="">
                                            </td>
                                            <td>
                                                <span
                                                    class="{{ $item->categories_status ? 'badge bg-success text-white custom-badge' : 'badge bg-danger text-white custom-badge' }}">
                                                    {{ $item->categories_status ? 'Hiển thị' : 'Ẩn' }}
                                                </span>
                                            </td>


                                            <td style="display: flex; gap: 10px; align-items: center; height: 100px;">
                                                <a href="{{ route('category.show', $item->id) }}">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="fas fa-info-circle"></i> <!-- Biểu tượng thông tin -->
                                                    </button>
                                                </a>
                                                <a href="{{ route('category.edit', $item->id) }}">
                                                    <button type="button" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i> <!-- Biểu tượng chỉnh sửa -->
                                                    </button>
                                                </a>
                                                <form action="{{ route('category.destroy', $item->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                        onclick="return confirm('Bạn có muốn xóa không?')"
                                                        class="btn btn-danger">
                                                        <i class="fas fa-trash"></i> <!-- Biểu tượng thùng rác -->
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                {{-- end-body --}}


                {{-- ft --}}
                <div class="d-flex justify-content-between">
                    <div class="card-footer text-right ">
                        <nav class="d-inline-block">
                            <div class="mb-3 d-flex ">
                                <!-- Dropdown for bulk actions -->
                                <div class="dropdown mr-2 ">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Chọn hành động
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" id="bulk-delete">Xóa</a>
                                    </div>
                                </div>
                                <!-- Execute button -->
                                <button type="button" id="execute-button" class="btn btn-danger">Thực hiện</button>
                            </div>
                        </nav>
                    </div>


                    {{-- number --}}
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                {{-- end ft --}}
            </div>
        </section>
    </div>
    {{-- setting --}}
    <div class="settingSidebar">
        <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
                <div class="setting-panel-header">Setting Panel
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Select Layout</h6>
                    <div class="selectgroup layout-color w-50">
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="1"
                                class="selectgroup-input-radio select-layout" checked>
                            <span class="selectgroup-button">Light</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="2"
                                class="selectgroup-input-radio select-layout">
                            <span class="selectgroup-button">Dark</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Sidebar Color</h6>
                    <div class="selectgroup selectgroup-pills sidebar-color">
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar"
                                checked>
                            <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Color Theme</h6>
                    <div class="theme-setting-options">
                        <ul class="choose-theme list-unstyled mb-0">
                            <li title="white" class="active">
                                <div class="white"></div>
                            </li>
                            <li title="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li title="black">
                                <div class="black"></div>
                            </li>
                            <li title="purple">
                                <div class="purple"></div>
                            </li>
                            <li title="orange">
                                <div class="orange"></div>
                            </li>
                            <li title="green">
                                <div class="green"></div>
                            </li>
                            <li title="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                id="mini_sidebar_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Mini Sidebar</span>
                        </label>
                    </div>
                </div>
                <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                        <label class="m-b-0">
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                id="sticky_header_setting">
                            <span class="custom-switch-indicator"></span>
                            <span class="control-label p-l-10">Sticky Header</span>
                        </label>
                    </div>
                </div>
                <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                    <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                        <i class="fas fa-undo"></i> Restore Default
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- end setting --}}
    {{-- JavaScript for bulk select and actions --}}
    <script>
        document.getElementById('select-all').addEventListener('click', function(event) {
            const checkboxes = document.querySelectorAll('input[name="categories[]"]');
            checkboxes.forEach(checkbox => checkbox.checked = event.target.checked);
        });

        document.getElementById('execute-button').addEventListener('click', function() {
            const selectedAction = document.querySelector('.dropdown-menu .active')?.id;
            if (selectedAction === 'bulk-delete') {
                if (confirm('Bạn có chắc chắn muốn xóa các mục đã chọn?')) {
                    document.getElementById('bulk-delete-form').submit();
                }
            } else {
                alert('Vui lòng chọn hành động từ danh sách.');
            }
        });

        document.getElementById('bulk-delete').addEventListener('click', function() {
            const dropdownButton = document.getElementById('dropdownMenuButton');
            dropdownButton.textContent = 'Xóa'; // Change text to "Xóa"
            document.querySelectorAll('.dropdown-menu .dropdown-item').forEach(item => item.classList.remove(
                'active'));
            this.classList.add('active');
        });
    </script>
@endsection
