<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;



// Route::get('/', function () {
//     return view('welcome');
// });




Route::get("/",[PublicController::class,"index"])->name("homepage");
Route::get("/product/{p_id}",[PublicController::class,"view"])->name("viewProduct");
Route::get("/cart",[PublicController::class,"cart"])->name("cart");
Route::get("/checkout",[PublicController::class,"checkout"])->name("checkout");


//  Auth route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
