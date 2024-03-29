<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[UserController::class,'index'] );


Route::view('reg','register');

Route::view('admin','users.admin');
Route::view('customer','users.customer');

Route::post('/login',[UserController::class,'checklogin'] );
Route::post('/logout',[UserController::class,'logout'] );

Route::get('/product',[ProductController::class,'index'] );
Route::get('/employee',[UserController::class,'emp'] );

Route::resource('users3',UserController::class);
Route::resource('products',ProductController::class);





