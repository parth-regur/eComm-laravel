<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    
    Session::forget('user');
    return redirect('login');
});

Route::get('/register',[RegisterController::class,'index']);
Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
Route::get('/',[ProductController::class,'index']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::get('cartlist',[ProductController::class,'cartlist']);
Route::get('remove_cart_item/{id}',[ProductController::class,'removeCartItem']);
Route::get('order_now',[ProductController::class,'orderNow']);
Route::post('orderplace/',[ProductController::class,'orderPlace']);
Route::get('myorders/',[ProductController::class,'myOrders']);

Route::get('/test',[TestController::class,'index']);

Route::get('/layouts/about', function () {
    return view('layouts.about');
});

Route::get('/layouts/test', function () {
    return view('layouts.test');
});

Route::get('/layouts/form', function () {
    return view('layouts.form');
});

Route::get('/filter',[ProductController::class,'myOrderFilter']);

Route::get('/search',[SearchController::class,'search']);