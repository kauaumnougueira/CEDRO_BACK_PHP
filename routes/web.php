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
    //se ja estiver logado redireciona para o painel
    if(!null == Auth::user()){
        Route::get('/login', [PagesController::class, 'painel'])->name('login');
    }
    //Route::get('/painel', [PagesController::class, 'painel']); painel sem imagens
    Route::get('/painel', [ImageController::class, 'index'])->name('painel');
    Route::get('/perfil', [ImageController::class, 'exames'])->name('perfil');
    Route::get('/getImage', [ImageController::class, 'index'])->name('getImage'); //alterar para espaço cheio de exames
    Route::get('/edit', [ImageController::class, 'index'])->name('edit'); //edição
});


