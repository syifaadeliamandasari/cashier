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


/* login */
Route::get('/loginadmin', [loginadminController::class, 'loginadmin'])->name('loginadmin');
Route::get('/registeradmin', [registeradminController::class, 'registeradmin'])->name('registeradmin');
Route::get('/loginpetugas', [loginpetugasController::class, 'loginpetugas'])->name('loginpetugas');

/* dashboard */
Route::get('/admin', [adminController::class, 'admin'])->name('admin');
Route::get('/petugas', [petugasController::class, 'petugas'])->name('petugas');

/* Admin */
/* Route::get('/productadmin', [productadminController::class, 'productadmin'])->name('productadmin');
Route::get('/productadmin', [ProductController::class, 'index'])->name('productadmin');
Route::post('/productadmin', [ProductController::class, 'store'])->name('products.store');
Route::delete('/productadmin/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); */
Route::get('/users', [usersController::class, 'users'])->name('users');


Route::get('/productadmin', [productadminController::class, 'productadmin'])->name('productadmin');
Route::post('/productadmin', [productadminController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductAdminController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductAdminController::class, 'update'])->name('products.update');
Route::delete('/productadmin/{id}', [productadminController::class, 'destroy'])->name('products.destroy');
