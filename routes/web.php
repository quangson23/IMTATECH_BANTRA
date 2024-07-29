<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use Illuminate\Support\Facades\Route;

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



Route::resource('banner',BannerController::class);

// Route::get('client', function () {
//     return view('client.index');
// });


Route::get('admin', [DashboardController::class, 'index'])
    ->middleware(['auth', CheckRoleAdminMiddleware::class]);

// ->middleware(CheckRoleAdminMiddleware::class)

// Route::get('shop', function () {
//     return view('client.pages.shop');['auth', 'auth.admin']
// });
Route::get('shop',[ShopController::class, 'index']);
Route::get('/',[HomeController::class, 'index'])->middleware('auth');



// Route::get('contac',[HomeController::class, 'contac']);
Route::get('contac', function () {
    return view('client.pages.contac');
});

// Route::get('about', function () {
//     return view('client.pages.about');
// });
Route::get('cart',[HomeController::class, 'cart']);





Route::get('checkout', function () {
    return view('client.pages.checkout');
});


Route::get('productdetail', function () {
    return view('client.pages.productdetail');
});



// Route resouce
Route::delete('categories/bulk-delete', [CategoryController::class, 'bulkDelete'])->name('category.bulkDelete');
Route::delete('coupons/bulk-delete', [CouponController::class, 'bulkDelete'])->name('coupon.bulkDelete');

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('banner',BannerController::class);
Route::resource('user',UserController::class);
Route::resource('staff',StaffController::class);
Route::resource('coupon',CouponController::class);
Route::resource('promotion',PromotionController::class);
//route


// Route::get('loginadmin', [AuthController::class, 'showFormLoginAdmin']);

Route::get('login', [AuthController::class, 'showFormLogin']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'showFormRegister']);
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware(['auth', 'auth.admin'])->prefix('admin')
//     ->as('admin.')
//     ->group(function () {
//         Route::get('/dashboard', function () {
//             return view('admin.dashboard.index');
//         })->name('dashboard');




//     });
