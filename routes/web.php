<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// user route
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/category/{slug}',[App\Http\Controllers\Client\CategoryController::class,'index'] );
    Route::get('/category/{category_slug}/{service_slug}',[App\Http\Controllers\Client\ServiceController::class,'index'] );
    Route::get('/book/{service_id}',[App\Http\Controllers\Client\BookedController::class, 'store'] );
    Route::get('/profile',[App\Http\Controllers\Client\ProfileController::class, 'index'] )->name('profile');
    Route::get('/services/{slug}',[App\Http\Controllers\Client\ServiceController::class,'view']);
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