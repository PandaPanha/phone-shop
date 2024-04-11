<?php

use App\Http\Controllers\Authenticate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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


});

Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/login',[Authenticate::class,'login'])->name('login');
Route::post('/login',[Authenticate::class,'loginA'])->name('loginA');
Route::get('/register',[Authenticate::class,'register']);
Route::post('/admin/user/store',[Authenticate::class,'store'])->name('user.store');
Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/footer',[HomeController::class,'footer'])->name('footer');
Route::get('/testhome',[HomeController::class,'test'])->name('test');
Route::get('/product',[HomeController::class,'product'])->name('product');


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
