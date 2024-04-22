<?php

use App\Http\Controllers\Authenticate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    //admin routes Product
    Route::get('/admin/phone',[PhoneController::class,'list'])->name('list.phone');
    Route::get('/admin/phone/create',[PhoneController::class,'create'])->name('create.phone');
    Route::post('/admin/phone/store',[PhoneController::class,'store'])->name('store.phone');
    Route::get('/admin/edit/{product}',[PhoneController::class,'edit'])->name('edit.phone');
    Route::put('/admin/update/{id}',[PhoneController::class,'update'])->name('update.phone');
    Route::get('/admin/{product}/detail',[PhoneController::class,'detail'])->name('detail.phone');
    Route::delete('/admin/{product}/delete',[PhoneController::class,'delete'])->name('delete.phone');
});

Route::get('/home',[HomeController::class,'listProducts'])->name('home.list');
Route::get('/login',[Authenticate::class,'login'])->name('login');
Route::post('/login',[Authenticate::class,'loginA'])->name('loginA');
Route::get('/register',[Authenticate::class,'register']);
Route::post('/admin/user/store',[Authenticate::class,'store'])->name('user.store');
Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/footer',[HomeController::class,'footer'])->name('footer');
Route::get('/testhome',[HomeController::class,'test'])->name('test');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/home/productDetail/{id}', [PhoneController::class, 'showDetail'])->name('home.productDetail');
Route::post('/logout', [Authenticate::class, 'logout'])->name('logout');






Route::get('/admin/auth', function () {
    return view('admin.auth.login');
});

Route::get('/admin/phones', function () {
    return view('admin.phones.phone');
});

Route::get('/admin/phones/components', function () {
    return view('admin.phones.components.add_phone');
});

Route::get('/about', function(){
    return view('about.about');
});

// Route::get('/admin/dashboard', function(){
//     return view('admin.dashboard.dashboard');
// });


