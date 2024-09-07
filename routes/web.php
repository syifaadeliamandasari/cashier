<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginadminController;
use App\Http\Controllers\registeradminController;
use App\Http\Controllers\loginpetugasController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\productadminController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\menuController;




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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('register', function () {
    return view('login.registeradmin');
})->name('register');

Route::post('register', [AuthController::class, 'register']);

Route::get('login', function () {
    return view('login.loginadmin');
})->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::get('/loginpetugas', [loginpetugasController::class, 'loginpetugas'])->name('loginpetugas');

Route::get('admin/dashboard', function () {
    return view('dashboard.admin');
})->name('admin.dashboard');

Route::get('petugas/dashboard', function () {
    return view('dashboard.petugas');
})->name('petugas.dashboard');


/* dashboard */
Route::get('/admin', [adminController::class, 'admin'])->name('admin');
Route::get('/petugas', [petugasController::class, 'petugas'])->name('petugas');

/* Admin */

Route::get('/users', [usersController::class, 'users'])->name('users');


Route::get('/productadmin', [productadminController::class, 'productadmin'])->name('productadmin');
Route::post('/productadmin', [productadminController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductAdminController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductAdminController::class, 'update'])->name('products.update');
Route::delete('/productadmin/{id}', [productadminController::class, 'destroy'])->name('products.destroy');

Route::resource('users', usersController::class);

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::post('/profile', 'update')->name('profile.update');
});

Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

Route::get('/loginpetugas', [loginpetugasController::class, 'loginpetugas'])->name('loginpetugas');
Route::get('/loginpetugas', [loginpetugasController::class, 'loginpetugas'])->name('loginpetugas');

Route::get('/menu', [menuController::class, 'menu'])->name('menu');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
// web.php
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
