<?php

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

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;


Auth::routes();
Route::get('/welcome', function () {
    return view('welcome');
})->middleware("check_time",'auth');

Route::get('/test', function () {
    return view('test');
});

// Route::get('/{locale?}', [HomeController::class, 'index']);

Route::resource('products', ProductController::class);
//Route::get('products', [ProductController::class,'index']);


Route::get('/{locale?}', [HomeController::class, 'index']);

