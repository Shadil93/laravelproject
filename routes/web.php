<?php

use App\Http\Controllers\databaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pageController;
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
    return view('welcome');
});
Route::get('/',[pageController::class,'index'])->name('index');
Route::get('/admin',[pageController::class,'admin'])->name('admin');
Route::get('/register',[pageController::class,'register'])->name('register');
Route::POST('/do_register',[databaseController::class,'do_register'])->name('do_register');

Route::get('/view',[pageController::class,'view'])->name('view');
Route::get('/edit/{id}',[pageController::class,'edit'])->name('edit');
Route::POST('/update/{id}',[databaseController::class,'update'])->name('update');
Route::get('/delete/{id}',[pageController::class,'delete'])->name('delete');


Route::get('/login',[loginController::class,'login'])->name('login');
Route::post('/do_login',[loginController::class,'do_login'])->name('do_login');
Route::get('/upload',[pageController::class,'upload'])->name('upload');
Route::POST('/do_upload',[databaseController::class,'do_upload'])->name('do_upload');
Route::get('/logout',[loginController::class,'logout'])->name('logout');

Route::get('indexpage',[pageController::class,'indexpage'])->name('indexpage');
Route::get('logoutindex',[loginController::class,'logoutindex'])->name('logoutindex');


Route::get('/loginuser',[loginController::class,'loginuser'])->name('loginuser');
Route::post('/do_loginuser',[loginController::class,'do_loginuser'])->name('do_loginuser');

Route::GET('/search',[pageController::class,'search'])->name('search');
Route::POST('/do_search',[pageController::class,'do_search'])->name('do_search');


Route::get('/booking/{id}',[pageController::class,'booking'])->name('booking');
Route::POST('/do_booking',[databaseController::class,'do_booking'])->name('do_booking');


Route::get('/payment',[pageController::class,'payment'])->name('payment');
Route::post('/do_payment',[databaseController::class,'do_payment'])->name('do_payment');


Route::get('/viewbooking',[pageController::class,'viewbooking'])->name('viewbooking');
Route::get('/notification/{id}',[pageController::class,'notification'])->name('notification');
Route::post('/do_message',[databaseController::class,'do_message'])->name('do_message');

Route::get('/viewmessage',[pageController::class,'viewmessage'])->name('viewmessage');
