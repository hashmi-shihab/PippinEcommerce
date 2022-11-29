<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
<<<<<<< HEAD
/*======================route space for hashmi============================*/















/*======================route space for hashmi============================*/
















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

=======
Route::get('/login', function () {
    return view('login');
    // return view('welcome');
});

 
Route::resource('category', CategoryController::class);


>>>>>>> 1f8a8e402c99057c7adf676b7c5dc7fd0083b485
