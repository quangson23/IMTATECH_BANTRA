@extends('layout.client.master')
@section('main-content')
    <style>
        /* Custom styles for the account page */
        /* Custom styles for the account page */
        .nav-link {
            color: #000000;
            /* Black color for text and icons */
        }

        .breadcrumb-area {
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .breadcrumb-area .breadcrumb {
            margin-bottom: 0;
        }

        .my-account-wrapper {
            background-color: #ffffff;
            border-radius: 8px;

        }

        .myaccount-tab-menu .nav-link {
            border: 1px solid #dee2e6;

            border-radius: 0;
            /* Remove border-radius to get square corners */
        }

        .myaccount-tab-menu .nav-link.active {
            background-color: #900000;
            color: #ffffff;
            border-color: #900000;
            /* Keep the border color same as the background for the active tab */
        }

        .table thead th {
            background-color: #900000;
            color: #ffffff;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .text-warning {
            color: #ffc107;
        }
    </style>
    <main>

        <section class="page-title" style="background-image: url(images/bannerpage.jpg);">
            <div class="auto-container">
                <div class="title-outer">
                    <h1 class="title">My-Account</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>my-account</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- my account wrapper start -->
        <div class="my-account-wrapper section-padding p-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 border border-0 mb-40 mt-40">
                        <!-- My Account Tab Menu Start -->
                        <div class="nav flex-column nav-pills myaccount-tab-menu border-1" role="tablist">
                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="pill" href="#dashboard"
                                role="tab">
                                <i class="fa fa-tachometer-alt"></i> Dashboard
                            </a>
                            <a class="nav-link" id="orders-tab" data-bs-toggle="pill" href="#orders" role="tab">
                                <i class="fa fa-cart-arrow-down"></i> Orders
                            </a>
                            <a class="nav-link" id="download-tab" data-bs-toggle="pill" href="#download" role="tab">
                                <i class="fa fa-download"></i> Downloads
                            </a>
                            <a class="nav-link" id="payment-method-tab" data-bs-toggle="pill" href="#payment-method"
                                role="tab">
                                <i class="fa fa-credit-card"></i> Payment Method
                            </a>
                            <a class="nav-link" id="address-edit-tab" data-bs-toggle="pill" href="#address-edit"
                                role="tab">
                                <i class="fa fa-street-view"></i> Address
                            </a>
                            <a class="nav-link" id="account-info-tab" data-bs-toggle="pill" href="#account-info"
                                role="tab">
                                <i class="fa fa-user"></i> Account Details
                            </a>


                            {{-- <a class="nav-link" href="login-register.html">
                                <i class="fa fa-sign-out-alt"></i> Logout
                            </a> --}}

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="dropdown-item has-icon text-danger" style="border: 1px solid #dee2e6;">
                                    <button  type="submit" style="border: 1px;background-color: transparent;color: red">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </button>
                                </a>
                            </form>




                        </div>
                        <!-- My Account Tab Menu End -->
                    </div>

                    <!-- My Account Tab Content Start -->
                    <div class="col-lg-9 col-md-8">
                        <div class="tab-content">
                            <!-- Dashboard Content -->
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                                <!-- Dashboard Header -->
                                <div class="dashboard-header mb-4">
                                    <h2>Welcome, [User Name]!</h2>
                                    <p>Here’s an overview of your account activity and statistics.</p>
                                </div>

                                <!-- Overview Section -->
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card border-0 shadow-sm">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Total Orders</h5>
                                                <p class="card-text">5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card border-0 shadow-sm">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Pending Orders</h5>
                                                <p class="card-text">2</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card border-0 shadow-sm">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Total Spent</h5>
                                                <p class="card-text">$4,500</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Recent Orders Section -->
                                <div class="recent-orders mb-4">
                                    <h3>Recent Orders</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#12345</td>
                                                    <td>August 1, 2024</td>
                                                    <td>Shipped</td>
                                                    <td>$150.00</td>
                                                </tr>
                                                <tr>
                                                    <td>#12344</td>
                                                    <td>July 25, 2024</td>
                                                    <td>Delivered</td>
                                                    <td>$200.00</td>
                                                </tr>
                                                <tr>
                                                    <td>#12343</td>
                                                    <td>July 15, 2024</td>
                                                    <td>Pending</td>
                                                    <td>$350.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Account Stats Section -->
                                <div class="account-stats mb-4">
                                    <h3>Account Statistics</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title">Total Products</h5>
                                                    <p class="card-text">15</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title">Total Reviews</h5>
                                                    <p class="card-text">25</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-0 shadow-sm">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title">Wishlist Items</h5>
                                                    <p class="card-text">8</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Orders Content -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
                                    <h5>Orders</h5>

                                    <!-- Filter Section -->
                                    <div class="mb-4">
                                        <div class="btn-group" role="group" aria-label="Order Status Filter">
                                            <button type="button" class="btn btn-secondary filter-btn"
                                                data-status="all">All Orders</button>
                                            <button type="button" class="btn btn-secondary filter-btn"
                                                data-status="pending">Pending</button>
                                            <button type="button" class="btn btn-secondary filter-btn"
                                                data-status="approved">Approved</button>
                                            <button type="button" class="btn btn-secondary filter-btn"
                                                data-status="on-hold">On Hold</button>
                                        </div>
                                    </div>

                                    <!-- Orders Table -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center" id="orders-table">
                                            <thead class="thead-light">

                                                <tr>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Ngày đặt</th>
                                                    <th>Trạng thái</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Hành động</th>

                                                </tr>

                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('ordersc.show', $item->id) }}">
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
                                                            <a href="{{ route('ordersc.show', $item->id) }}" class="btn btn-warning">View</a>
                                                            <form action="{{ route('ordersc.update', $item->id) }}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('PUT')
                                                                @if ($item->order_status === $type_cho_xac_nhan)
                                                                    <input type="hidden" name="huy_don_hang" value="1">
                                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có xác nhận hủy đơn hàng không ?')">Hủy</button>
                                                                @elseif ($item->order_status === $type_dang_van_chuyen)
                                                                    <input type="hidden" name="da_giao_hang" value="1">
                                                                    <button type="submit" class="btn btn-success" onclick="return confirm('Xác nhận đã nhận hàng')">Xác nhận</button>
                                                                @endif
                                                            </form>
                                                        </td>


                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Downloads Content -->
                            <div class="tab-pane fade" id="download" role="tabpanel">
                                <div class="myaccount-content">
                                    <h5>Downloads</h5>
                                    <!-- Downloads content goes here -->
                                </div>
                            </div>

                            <!-- Payment Method Content -->
                            <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                <div class="myaccount-content">
                                    <h5>Payment Method</h5>
                                    <p class="text-warning">You can't save your payment method yet.</p>
                                </div>
                            </div>

                            <!-- Address Edit Content -->
                            <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                <div class="myaccount-content">
                                    <h5>Billing Address</h5>
                                    <!-- Address edit content goes here -->
                                </div>
                            </div>
<style>.profile-picture-section {
    position: relative;
    display: inline-block;
}

.profile-picture {
    display: inline-block;
    width: 150px; /* Adjust size as needed */
    height: 150px; /* Adjust size as needed */
    background-color: #d3d3d3; /* Gray background for default */
    border-radius: 50%; /* Circle shape */
    overflow: hidden; /* Ensure content fits within circle */
    position: relative;
}

.profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.file-input-label {
    position: absolute;
    bottom: 0;
    right: 0;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 10px;
}

.file-input-label .fa-camera {
    font-size: 24px; /* Adjust size as needed */
    color: #000; /* Adjust color as needed */
    display: inline-block;
    margin-right: 50px
}

.file-input-label input[type="file"] {
    display: none; /* Hide the default file input */
}


</style>
                            <!-- Account Info Content -->
                            <div class="tab-pane fade " id="account-info" role="tabpanel">
                                <div class="myaccount-content ">
                                    <h5>Account Details</h5>
                                    <!-- Combined Form for Profile Picture and Account Details -->
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="  mb-4 text-center">
                                            <!-- Profile Picture -->
                                            <div class="profile-picture">
                                                <img id="profilePicPreview" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : 'path/to/default-gray-circle.png' }}" alt="Profile Picture" class="img-fluid rounded-circle">
                                                <!-- File Input Trigger -->
                                                <label for="profile_picture" class="file-input-label">
                                                    <span class="fa fa-camera text-center"></span>
                                                    <input type="file" name="profile_picture" id="profile_picture" class="form-control-file mt-2">
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Account Details Form -->
                                        <div class="form-group">
                                            <label for="name">Tên</label>
                                            <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Số Điện Thoại</label>
                                            <input type="text" id="phone" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Địa Chỉ</label>
                                            <input type="text" id="address" name="address" class="form-control" value="{{ Auth::user()->address }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="created_at">Ngày Tạo Tài Khoản</label>
                                            <input type="text" id="created_at" name="created_at" class="form-control" value="{{ Auth::user()->created_at }}" readonly>
                                        </div>
                                        <button type="submit" class="btn btn-success">Cập Nhật</button>
                                    </form>
                                </div>
                            </div>

                            <script>
                                document.getElementById('profile_picture').addEventListener('change', function(event) {
                                    const file = event.target.files[0];
                                    const reader = new FileReader();

                                    reader.onload = function(e) {
                                        document.getElementById('profilePicPreview').src = e.target.result;
                                    };

                                    if (file) {
                                        reader.readAsDataURL(file);
                                    }
                                });
                            </script>



                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->
    </main>

    <!-- Scroll to top start -->
    <!-- Scroll to Top End -->
    <script>



        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const tableRows = document.querySelectorAll('#orders-table tbody tr');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const status = this.getAttribute('data-status');

                    tableRows.forEach(row => {
                        if (status === 'all' || row.getAttribute('data-status') ===
                            status) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    // Update button styles
                    filterButtons.forEach(btn => btn.classList.remove('btn-primary'));
                    this.classList.add('btn-primary');
                });
            });
        });
    </script>



    <!-- footer area start -->
@endsection
