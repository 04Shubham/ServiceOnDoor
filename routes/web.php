<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart/orders', [App\Http\Controllers\Client\OrderController::class, 'index'])->name("order");

Route::get('/email/verify', function () {
    return view('auth.verify-email'); 
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware(['auth', 'verified']);


Route::get('/form',[App\Http\Controllers\Partner\FormController::class, 'index'])->name('form');

Route::get('/category/{slug}',[App\Http\Controllers\Client\CategoryController::class,'index'] );
Route::get('/shop', [App\Http\Controllers\Client\ShopController::class,'index'])->name('shop');


// user route
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/category/{slug}',[App\Http\Controllers\Client\CategoryController::class,'index'] );
    Route::get('/category/{category_slug}/{service_slug}',[App\Http\Controllers\Client\ServiceController::class,'index'])->name('user.category');
    Route::get('/book/{service_id}',[App\Http\Controllers\Client\BookedController::class, 'store'] );
    Route::get('/profile',[App\Http\Controllers\Client\ProfileController::class, 'index'] )->name('profile');
    Route::get('/services/{slug}',[App\Http\Controllers\Client\ServiceController::class,'view'])->name('sevices');

    // // order
    // Route::get('/cart', [App\Http\Controllers\Client\CartController::class,'index'])->name('cart');
    // Route::get('/cart/{id}/add', [App\Http\Controllers\Client\ShopController::class,'add_to_cart'])->name('shop.cart.add');
    // Route::post('/cart/update', [App\Http\Controllers\Client\ShopController::class,'update_cart'])->name('shop.cart.update');
    // Route::get('/cart/delete/{id}', [App\Http\Controllers\Client\ShopController::class,'delete_cart'])->name('shop.cart.delete');
    // Route::get('/cart/checkout', [App\Http\Controllers\Client\CartController::class, 'view_checkout'])->name('cart.checkout');
    // Route::post('/address/create', [App\Http\Controllers\Client\AddressController::class, 'store'])->name('address.create');
    
    // Route::get('/orders', [App\Http\Controllers\Client\OrderController::class, 'view_orders'])->name('orders');
    // Route::get('/cancel_order/{id}', [App\Http\Controllers\Client\OrderController::class, 'cancel_order'])->name('orders.cancel');

    // Route::get('/razorpay/{price}', [App\Http\Controllers\Payment\RazorpayController::class, 'index'])->name('razorpay.payment');
    // Route::post('/order/store', [App\Http\Controllers\Client\OrderController::class, 'store'])->name('order.store');
}); 



    // Admin Route 
Route::prefix('admin')->middleware(['auth','user-access:admin'])->group(function ()  {
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/categories',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin.categories');
    Route::get('/category/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin.category.create');
    Route::post('/category/create',[App\Http\Controllers\Admin\CategoryController::class,'store'])->name('admin.category.store');
    Route::get('/category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin.category.edit');
    Route::post('/category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin.category.update');
    Route::get('/category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destory'])->name('admin.category.delete');

    Route::get('/services',[App\Http\Controllers\Admin\ServiceController::class,'index']);
    Route::get('/service/create',[App\Http\Controllers\Admin\ServiceController::class,'create']);
    Route::post('/service/create',[App\Http\Controllers\Admin\ServiceController::class,'store']);
    Route::get('/service/edit/{id}',[App\Http\Controllers\Admin\ServiceController::class,'edit']);
    Route::post('/service/update/{id}',[App\Http\Controllers\Admin\ServiceController::class,'update']);
    Route::get('/service/delete/{id}',[App\Http\Controllers\Admin\ServiceController::class,'destory']);
    
    Route::get('/categories/trash',[App\Http\Controllers\Admin\CategoryController::class,'trash']);
    Route::get('/trash/category/restore/{id}',[App\Http\Controllers\Admin\CategoryController::class,'restore']);
    Route::get('/trash/category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'delete']);
    
    Route::get('/services/trash',[App\Http\Controllers\Admin\ServiceController::class,'trash']);
    Route::get('/trash/service/restore/{id}',[App\Http\Controllers\Admin\ServiceController::class,'restore']);
    Route::get('/trash/service/delete/{id}',[App\Http\Controllers\Admin\ServiceController::class,'delete']);

    Route::get('/featured/categories',[App\Http\Controllers\Admin\FeaturedController::class,'view_featured_categories']);
    Route::post('/featured/categories/store',[App\Http\Controllers\Admin\FeaturedController::class,'store_featured_category']);
    Route::get('/featured/categories/delete/{id}',[App\Http\Controllers\Admin\FeaturedController::class,'remove_featured_category']);

    Route::get('/featured/services',[App\Http\Controllers\Admin\FeaturedController::class,'view_featured_services']);
    Route::post('/featured/services/store',[App\Http\Controllers\Admin\FeaturedController::class,'store_featured_service']);
    Route::get('/featured/services/delete/{id}',[App\Http\Controllers\Admin\FeaturedController::class,'remove_featured_service']);
}); 
