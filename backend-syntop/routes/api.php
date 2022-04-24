<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product-rekomendasi', [App\Http\Controllers\Api\ApiProductController::class, 'getRekomendasi']);
Route::get('/product-list', [App\Http\Controllers\Api\ApiProductController::class, 'getAllProduct']);
Route::get('/product-search', [App\Http\Controllers\Api\ApiProductController::class, 'searchProduct']);
Route::get('/product-detail/{id}', [App\Http\Controllers\Api\ApiProductController::class,'detailProduct']);

Route::post('/keranjang-post', [App\Http\Controllers\Api\ApiKeranjangController::class, 'postKeranjang']);
