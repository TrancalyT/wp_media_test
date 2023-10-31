<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TourController;

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

// View (get)
Route::get('/', [MainController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);

// Post
Route::post('/add/news', [NewsController::class, 'store']);
Route::post('/add/tour', [TourController::class, 'store']);
Route::post('/add/album', [AlbumsController::class, 'store']);

// Delete
Route::delete('/delete/news/{news}', [NewsController::class, 'destroy']);
Route::delete('/delete/tour/{tour}', [TourController::class, 'destroy']);
Route::delete('/delete/album/{album}', [AlbumsController::class, 'destroy']);