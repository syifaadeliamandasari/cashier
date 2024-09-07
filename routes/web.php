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
use App\Http\Controllers\productpetugasController;
use App\Http\Controllers\userspetugasController;
use App\Http\Controllers\profilepetugasController;

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

Route::get('register', function () {
    return view('login.registeradmin');
})->name('register');

Route::post('register', [AuthController::class, 'register']);

Route::get('login', function () {
    return view('login.loginadmin');
})->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::get('/loginpetugas', [loginpetugasController::class, 'loginpetugas'])->name('loginpetugas');

/* Admin Dashboard */
Route::get('/admin', [adminController::class, 'admin'])->name('admin');
Route::get('/productadmin', [productadminController::class, 'productadmin'])->name('productadmin');
Route::post('/productadmin', [productadminController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [productadminController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [productadminController::class, 'update'])->name('products.update');
Route::delete('/productadmin/{id}', [productadminController::class, 'destroy'])->name('products.destroy');

/* Petugas Dashboard */
Route::get('/petugas', [petugasController::class, 'petugas'])->name('petugas');
Route::get('/productpetugas', [productpetugasController::class, 'productpetugas'])->name('productpetugas');
Route::get('/userspetugas', [userspetugasController::class, 'userspetugas'])->name('userspetugas');
Route::get('/profilepetugas', [profilepetugasController::class, 'profilepetugas'])->name('profilepetugas');

/* Other Routes */
Route::get('/menu', [menuController::class, 'menu'])->name('menu');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/users', [usersController::class, 'store'])->name('users.store');
Route::post('/userspetugas', [userspetugasController::class, 'store'])->name('userspetugas.store');
Route::resource('products', ProductController::class);
Route::resource('users', usersController::class);
