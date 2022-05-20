<?php
//use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

//Route::resource('products',ProductController::class);

Route::view('/','welcome');
Route::view('login','login')->name('login')->middleware('guest');
Route::view('products','products')->middleware('auth');


Route::post('/login', [LoginController::class, 'login']);

Route::put('/login', [LoginController::class, 'logout']);


