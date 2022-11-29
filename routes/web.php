<?php

use App\Http\Controllers\Products\CategoryController;
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

Route::get('/', function () {
    return view('admin.dashboard');
    // return view('welcome');
});

/*======================route space for hashmi============================*/
Route::group(['prefix' => 'Products'], function() {
    Route::resource('category', CategoryController::class);
});













/*======================route space for nabib============================*/















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






