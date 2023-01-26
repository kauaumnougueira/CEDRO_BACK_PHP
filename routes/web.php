<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PagesController::class, 'index']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [PagesController::class, 'index'])->name('home');
    Route::get('/painel', [PagesController::class, 'painel']);
    Route::get('/images/{id}', [ImageController::class, 'index'])->name('images');
});


