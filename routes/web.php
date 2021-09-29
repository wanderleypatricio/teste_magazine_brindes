<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index'])->name('layouts.index');
Route::get('/create', [UserController::class, 'create'])->name('layouts.user.create');
Route::post('/save', [UserController::class, 'store']);
Route::get('/edit/{id}', [UserController::class, 'show'])->name('layouts.user.edit');
Route::post('/update/{id}', [UserController::class, 'update']);
Route::get('/delete/{id}', [UserController::class, 'destroy']);
