<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddressController;



// Route::get('/', function () {
//     return view('welcome');
// });




Route::get("/",[PublicController::class,"index"])->name("homepage");
Route::get("/category/{cat_id?}",[PublicController::class,"index"])->name("filter");
Route::get("/product/{p_id}",[PublicController::class,"view"])->name("viewProduct");
Route::get("/cart",[PublicController::class,"cart"])->name("cart");
Route::post("/coupon/apply",[PublicController::class,"applyCoupon"])->name("applyCoupon");
Route::post("/payment/process",[PublicController::class,"paymentProcess"])->name("paymentprocess");
Route::get("/coupon/remove",[PublicController::class,"removeCoupon"])->name("removeCoupon");
Route::get("/checkout",[PublicController::class,"checkout"])->name("checkout");
Route::post("/payment/order",[PublicController::class,"order"])->name("paymentnow");
Route::post("/payment/call-back",[PublicController::class,"paymentCallback"])->name("paymentcallback");

Route::get("/add-to-cart/{p_id}",[PublicController::class,"addToCart"])->name("addToCart");
Route::get("/remove-from-cart/{p_id}",[PublicController::class,"removeFromCart"])->name("removeFromCart");
Route::get("/remove-item-from-cart/{p_id}",[PublicController::class,"removeItemFromCart"])->name("removeItemFromCart");
Route::resource("address",AddressController::class)->only("store");

Route::get("/my-order",[PublicController::class,"myOrder"])->name("myorder");

// Admin route

Route::prefix('admin')->middleware(['auth'])->group(function(){
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
