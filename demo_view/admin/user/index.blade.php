@extends('layout.admin.master')

@section('main-content')

    <div class="main-content">
        <section class="section">
            <div class="card">
                <h4 class="card-header">Danh sách khách hàng</h4>

                {{-- body --}}
                <div class="card-body">



                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Ngày tạo</th>
                                    <th>Quyền hạn</th>
                                    <th>Hành động</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $index => $item)
                                        <tr>
                                            <td><input type="checkbox" name="users[]" value="{{ $item->id }}"></td>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->name }}</td>

                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->created_at }}</td>


                                            <td><span class="badge bg-success w-50">{{ $item->role }}</span></td>




                                            <td style="display: flex; gap: 10px; align-items: center; height: 100px;">
                                                <a href="#">
                                                    <button type="button" class="btn btn-primary">
                                                        <i class="fas fa-info-circle"></i> <!-- Biểu tượng thông tin -->
                                                    </button>
                                                </a>
                                                <a href="{{ route('user.edit', $item->id) }}">
                                                    <button type="button" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i> <!-- Biểu tượng chỉnh sửa -->
                                                    </button>
                                                </a>

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

@endsection
