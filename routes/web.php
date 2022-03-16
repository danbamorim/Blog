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

Route::auth();

 Route::resource('/posts',PostagensController::class)->middleware('auth',['except'=>['index','show']]);