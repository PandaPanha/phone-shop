<?php

use App\Http\Controllers\API\ApiProductController;
use App\Http\Controllers\API\ProductImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('testing',function(){
    return "this is a test api";
});
//product API
Route::post('add-product',[ApiProductController::class, 'create']);
Route::put('add-product/update',[ApiProductController::class, 'update']);
Route::delete('add-product/destroy',[ApiProductController::class, 'destroy']);
Route::get('add-product/list',[ApiProductController::class, 'list']);

//productImage API
Route::post('productImg',[ProductImageController::class, 'create']);
Route::put('productImg/update',[ProductImageController::class, 'update']);
Route::delete('productImg/destroy',[ProductImageController::class, 'destroy']);
Route::get('productImg/list',[ProductImageController::class, 'list']);