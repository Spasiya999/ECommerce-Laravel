<?php

use App\Http\Controllers\Admin\CategoryController\CategoryController;
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

    // Category
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/create', [CategoryController::class, 'createUI'])->name('admin.category.createUI');
    Route::post('/category/create/store', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::get('/category/edit/{id}', [CategoryController::class, 'editUI'])->name('admin.category.editUI');
    Route::post('/category/edit/update', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
});
