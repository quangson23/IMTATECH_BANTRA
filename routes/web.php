<?php

use App\Http\Controllers\Admin\BaiVietController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\BaiVietController as ClientBaiVietController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\OkController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::resource('banner', BannerController::class);
Route::resource('bai-viet', BaiVietController::class);
Route::get('/blog', [ClientBaiVietController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [ClientBaiVietController::class, 'show'])->name('blog-detail'); // Detail view of a single blog post
// Route::get('client', function () {
//     return view('client.index');
// });



Route::get('admin', [DashboardController::class, 'index'])
    ->middleware(['auth', CheckRoleAdminMiddleware::class]);

// ->middleware(CheckRoleAdminMiddleware::class)

Route::get('shop', function (Request $request) {
    $category_id = $request->category_id;
    return view('client.pages.shop',compact('category_id'));

});

Route::post('/products/{id}/review', [ReviewController::class, 'store'])->name('store');

Route::get('/', [HomeController::class, 'index']);

Route::get('blog-detail', function () {
    return view('client.pages.blog-detail');
});


Route::get('khoahoctra', function () {
    return view('client.pages.khoahoctra');
});

Route::get('about', function () {
    return view('client.pages.about');
});
// Route::get('contac',[HomeController::class, 'contac']);
Route::get('contac', function () {
    return view('client.pages.contac');
});

// Route::get('about', function () {
//     return view('client.pages.about');
// });
Route::get('cart', [HomeController::class, 'cart']);


// Route::get('test', function () {
//     return view('client.pages.myaccount');
// });

Route::get('myacc', [OrderController::class, 'myacc']);




Route::get('checkout', function () {
    return view('client.pages.checkout');
});


// Route::get('productdetail', function () {
//     return view('client.product.productdetail');
// });

Route::post('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.updateE');



Route::middleware('auth')->prefix('ordersc')
    ->as('ordersc.')
    ->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('/create', [OrderController::class, 'create'])->name('create');
        Route::post('/store', [OrderController::class, 'store'])->name('store');
        Route::get('/show/{id}', [OrderController::class, 'show'])->name('show');
        Route::put('/update/{id}', [OrderController::class, 'update'])->name('update');
        // Route::get('/thank/{id}', [OrderController::class, 'thank'])->name('thank');


    });


Route::post('logout', [OrderController::class, 'logout'])->name('logout');


Route::get('myacc', [OrderController::class, 'index']);



Route::get('/product/detail/{id}', [ClientProductController::class, 'detailProduct'])->name('products.detail');

Route::get('/list-cart', [CartController::class, 'listCart'])->name('cart.list');
Route::post('/add-to-cart', [CartController::class, 'addCart'])->name('cart.add');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');


// Route resouce
Route::delete('categories/bulk-delete', [CategoryController::class, 'bulkDelete'])->name('category.bulkDelete');
Route::delete('coupons/bulk-delete', [CouponController::class, 'bulkDelete'])->name('coupon.bulkDelete');
Route::delete('products/bulk-delete', [ProductController::class, 'bulkDelete'])->name('product.bulkDelete');

Route::resource('product', ProductController::class)->middleware(['auth', CheckRoleAdminMiddleware::class]);
Route::resource('category', CategoryController::class)->middleware(['auth', CheckRoleAdminMiddleware::class]);
Route::resource('banner', BannerController::class)->middleware(['auth', CheckRoleAdminMiddleware::class]);
Route::resource('user', UserController::class)->middleware(['auth', CheckRoleAdminMiddleware::class]);
Route::resource('staff', StaffController::class)->middleware(['auth', CheckRoleAdminMiddleware::class]);
Route::resource('coupon', CouponController::class)->middleware(['auth', CheckRoleAdminMiddleware::class]);
Route::resource('promotion', PromotionController::class)->middleware(['auth', CheckRoleAdminMiddleware::class]);
//route


Route::middleware('auth')->prefix('orders')
    ->as('orders.')
    ->group(function () {
        Route::get('/', [AdminOrderController::class, 'index'])->name('index');
        Route::get('/show/{id}', [AdminOrderController::class, 'show'])->name('show');
        Route::put('/update/{id}', [AdminOrderController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [AdminOrderController::class, 'destroy'])->name('destroy');

        Route::get('/print/{id}', [AdminOrderController::class, 'printInvoice'])->name('print');
    });

// Route::get('loginadmin', [AuthController::class, 'showFormLoginAdmin']);

Route::get('login', [AuthController::class, 'showFormLogin']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'showFormRegister']);
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
