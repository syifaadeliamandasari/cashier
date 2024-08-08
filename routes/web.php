<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginadminController;
use App\Http\Controllers\registeradminController;
use App\Http\Controllers\loginpetugasController;
use App\Http\Controllers\dashboardadminController;


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
Route::get('/dashboardadmin', [dashboardadminController::class, 'dashboardadmin'])->name('dashboardadmin');
