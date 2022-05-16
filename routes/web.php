<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;



// Route::get('/', function () {
//     return view('welcome');
// });




Route::get("/{cat_id?}",[PublicController::class,"index"])->name("homepage");
Route::get("/product/{p_id}",[PublicController::class,"view"])->name("viewProduct");
Route::get("/cart",[PublicController::class,"cart"])->name("cart");
Route::get("/checkout",[PublicController::class,"checkout"])->name("checkout");

// Admin route

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::resources([
        "product"=>App\Http\Controllers\ProductController::class,
        "category"=>App\Http\Controllers\CategoryController::class,
        "brand"=>App\Http\Controllers\BrandController::class,
        "coupon"=>App\Http\Controllers\CouponController::class,
        "order"=>App\Http\Controllers\OrderController::class,
        "Payment"=>App\Http\Controllers\PaymentController::class,
        "user"=>App\Http\Controllers\UserController::class,
        "address"=>App\Http\Controllers\addressController::class,
    ]);
});




//  Auth route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
