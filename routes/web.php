<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

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
Route::view('reg','auth/reglog');
Route::view('log','auth/log');
Route::view('home','auth/home');
Route::get('register',[UserAuthController::class,'register']);
Route::get('check',[UserAuthController::class,'check']);
Route::get('dash',[UserAuthController::class,'dashboard']);

