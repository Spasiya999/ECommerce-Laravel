<?php

use App\Http\Controllers\Admin\HomeContoller\HomeController;
use App\Http\Controllers\Auth\LoginController;
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
 
Auth::routes();

Route::get('/login', [LoginController::class, 'loadLoginPage'])->name('login');

Route::group(['prefix' => 'admin'], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');
    
    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
});