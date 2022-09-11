<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KomenAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('signup', function () {
    return view('template.signup');
});

// login
Route::get('login', [AuthController::class,'showLogin'])->name('login');
Route::post('login', [AuthController::class,'processLogin']);

//logout
Route::get('logout', [AuthController::class,'Logout']);

//admin
Route::get('base', [HomeController::class,'showBase']);
Route::get('dashboard', [HomeController::class,'showDashboard']);
Route::get('master-data/categories', [HomeController::class,'showCategories']);


Route::prefix('master-data')->middleware('auth')->group(function(){
    Route::post('product/filter',[ProductController::class,'Filter']);
    Route::resource('product',ProductController::class);
    Route::resource('user',UserController::class);
    Route::resource('artikel',ArtikelController::class);
    Route::resource('komen',KomenAdminController::class);

});

// Komentar
Route::resource('komen', KomenController::class);
Route::post('blog-detail/{artikel}', [KomenController::class, 'store']);

//template e-commerce
Route::post('shop/filter',[ClientController::class,'filter']);
Route::post('artikel/filter',[ClientController::class,'filter']);
Route::get('/', [ClientController::class,'showHome']);
Route::get('home', [ClientController::class,'showHome']);
Route::get('shop', [ClientController::class,'showShop']);
Route::get('blog', [ClientController::class,'showBlog']);
Route::get('blog-detail/{artikel}', [ClientController::class,'showBlogDetail']);
Route::get('about', [ClientController::class,'showAbout']);
Route::get('contact', [ClientController::class,'showContact']);
Route::get('cart', [ClientController::class,'showCart']);
Route::get('produk/{product}', [ClientController::class,'showDetail']);
Route::get('shoping', [ClientController::class,'showShoping']);

// Route::get('product', [ProductController::class,'index']);
// Route::get('product/create', [ProductController::class,'create']);
// Route::post('product', [ProductController::class,'store']);
// Route::get('product/{product}', [ProductController::class,'show']);
// Route::get('product/{product}/edit', [ProductController::class,'edit']);
// Route::put('product/{product}', [ProductController::class,'update']);
// Route::delete('product/{product}', [ProductController::class,'destroy']);

// Route::get('user', [UserController::class,'index']);
// Route::get('user/create', [UserController::class,'create']);
// Route::post('user', [UserController::class,'store']);
// Route::get('user/{user}', [UserController::class,'show']);
// Route::get('user/{user}/edit', [UserController::class,'edit']);
// Route::put('user/{user}', [UserController::class,'update']);
// Route::delete('user/{user}', [UserController::class,'destroy']);
