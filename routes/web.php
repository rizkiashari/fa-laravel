<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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


// Home with middleware
Route::get('/', [HomeController::class, 'index'])->middleware('auth');


// guest group middleware
Route::group(['middleware' => 'guest'], function () {
  Route::get('/login', [AuthController::class, 'loginGet'])->name('login');
  Route::get('/register', [AuthController::class, 'registerGet']);
  Route::post("/register", [AuthController::class, 'registerStore']);
});
