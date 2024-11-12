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
                <h4 class="card-header">Danh sách đơn hàng</h4>

                {{-- body --}}
                <div class="card-body">

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button"  data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif



                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                            <thead>

                                <th>#</th>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Trạng thái</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </thead>
                            <tbody>
                                @foreach ($listOrder as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <a href="{{ route('orders.show', $item->id) }}">
                                                {{ $item->code_oder }}
                                            </a>
                                        </td>
                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <span class="badge bg-warning text-dark">
                                                {{ $orderStatus[$item->order_status] }}
                                            </span>
                                        </td>
                                        <td>{{ number_format($item->total_amount, 0, ',', '.') }}đ</td>

                                        <td>
                                            <form action="{{ route('orders.update', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select name="order_status" class="form-control " style="width: 170px;"
                                                    onchange="confirmSubmit(this)"
                                                    data-default-value="{{ $item->order_status }}">


                                                    @foreach ($orderStatus as $key => $value)
                                                        <option value="{{ $key }}"
                                                            {{ $key == $item->order_status ? 'selected' : '' }}>
                                                            {{ $value }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </form>



                                        </td>

                                        <td>
                                            <a href="{{route('orders.show', $item->id)}}">
                                                <button type="button" style="background-color: #6777EF" class="btn ">
                                                    <i class="fas fa-eye"></i> <!-- Biểu tượng chỉnh sửa -->
                                                </button>
                                            </a>

                                            @if ($item->order_status === $type_huy_don_hang)
                                                <form action="{{route('orders.destroy', $item->id)}}" method="POST" style="display:inline;"  onsubmit="return confirm('Bạn có muốn xóa không?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger">
                                                        <i class="fas fa-trash"></i> <!-- Biểu tượng thùng rác -->
                                                    </button>
                                                </form>
                                            @endif
                                        </td>






                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                {{-- end-body --}}


                {{-- ft --}}
                <div class="d-flex justify-content-between">

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
                            <input type="radio" name="icon-input" value="2"
                                class="selectgroup-input select-sidebar" checked>
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
        function confirmSubmit(selectElement) {
            var form = selectElement.form;
            var selectedOption = selectElement.options[selectElement.selectedIndex].text;
            var defaultValue = selectElement.getAttribute('data-default-value');

            if (confirm('Bạn có chắc chắn thay đổi trạng thái đơn hàng thành "' + selectedOption + '" không ?')) {
                form.submit();
            } else {
                selectElement.value = defaultValue;
            }

        }






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
