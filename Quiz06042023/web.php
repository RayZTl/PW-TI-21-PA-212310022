<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProfileController;
use App\http\Controllers\HomeController;
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
    return view('laporpak');
});

Route::get('/wc/welcome', function () {
    return view('welcome');
});
Route::get('/ray', function () {
    return view('test');
});
Route::get('/profile',[ProfileController::class,'inde']);
Route::get('/profile/identity',[ProfileController::class,'indentity']);
Route::get('/home',[HomeController::class,'index']);
   