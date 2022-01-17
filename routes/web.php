<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminController;
use App\http\Middleware\Role;

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

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister']);
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);

Route::get('/home', [AbsenController::class, 'index'])->middleware(['auth', 'role:mahasiswa']);
Route::post('/absensi', [AbsenController::class, 'absensi'])->middleware(['auth', 'role:mahasiswa']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/downloadpdf', [AdminController::class, 'downloadpdf']);
    Route::get('/home/admin', [AdminController::class, 'user']);
    Route::get('/home/admin/users', [AdminController::class, 'users']);
    Route::get('/home/admin/pembimbing', [AdminController::class, 'pembimbing']);
    Route::get('/home/admin/add-pbb', [AdminController::class, 'addpbb']);
    Route::post('/postpbb', [AdminController::class, 'postpbb']);
    Route::get('/home/admin/{id}/edit', [AdminController::class, 'editpbb']);
    Route::post('/home/admin/{id}/update', [AdminController::class, 'update']);
    Route::get('/home/admin/{id}/delete', [AdminController::class, 'destroy']);
});

Route::get('/logout', [AuthController::class, 'logout']);
