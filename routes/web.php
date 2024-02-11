<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

Auth::routes();
Route::get('about', [AboutController::class, 'about']);
Route::resource('product', ProductController::class);

Route::group(['middleware' =>   ['auth', 'ceklevel:admin,user']], function () {
    Route::resource('index', IndexController::class);
});

Route::group(['middleware' =>   ['auth', 'ceklevel:admin']], function () {
    Route::resource('dashboard', DashboardController::class)->middleware('auth');;
});
