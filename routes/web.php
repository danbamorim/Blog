<?php

use App\Http\Controllers\PostagensController;
use Illuminate\Support\Facades\Route;


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

 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');

Route::post('/logout', [App\Http\Controllers\Auth\LogoutController::class,'logout'])->name('logout');

Route::resource('/posts',PostagensController::class)->middleware('auth',['except'=>['index','show']]);
Route::resource('/posts', PostagensController::class, ['only' => ['index', 'show']]);
//Route::resource('/posts', PostagensController::class);
//Route::resource('/posts', PostagensController::class)->middleware('auth');


//Route::group(['middleware' => 'auth'], function () {
//    Route::resource('/posts', PostagensController::class, ['except' => ['index', 'show']]);
// });
