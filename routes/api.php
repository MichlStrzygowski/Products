<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PriceController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products/{sort?}/{dir?}', [ProductController::class, 'index'])->where('sort', '[a-zA-Z]+')->where('dir', 'asc|desc');


Route::get('products/{product}', [ProductController::class, 'show'])->where('product', '[0-9]+');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('products', [ProductController::class, 'store']);
    Route::put('products/{product}', [ProductController::class, 'update'])->where('product', '[0-9]+');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->where('product', '[0-9]+');
    Route::put('products/{product}/prices/{price}', [PriceController::class, 'update'])->where('product', '[0-9]+')->where('price', '[0-9]+');
 //   Route::delete('products/{product}/prices/{price}', [PriceController::class, 'destroy'])->where('product', '[0-9]+')->where('price', '[0-9]+');
});
Route::delete('products/{product}/prices/{price}', [PriceController::class, 'destroy'])->where('product', '[0-9]+')->where('price', '[0-9]+');


Route::post('products/{product}/prices', [PriceController::class, 'store'])->where('product', '[0-9]+');
