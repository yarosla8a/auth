<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/travel', [PageController::class, 'travel'])->name('travel');
Route::get('/music', [PageController::class, 'music'])->name('music');
Route::get('/move', [PageController::class, 'move'])->name('move');
Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/admin', [PageController::class, 'admin'])->name('admin')->middleware(['admin']);
Route::get('/users', [PageController::class, 'users'])->name('users')->middleware('auth');

Route::get('setting', [PageController::class, 'setting'])->name('setting')->middleware('auth');
Route::post('update/{id}', [PageController::class, 'update'])->name('update')->middleware('auth');
