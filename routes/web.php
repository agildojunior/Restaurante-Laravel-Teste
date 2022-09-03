<?php

use App\Http\Controllers\produtosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    //--------------------- inicio ---------------------
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //---------------------- mesas ----------------------
    Route::get('/mesas', function () {
        return view('mesas');
    })->name('mesas');

    //---------------------- produtos ----------------------
    Route::get('/produtos', [produtosController::class, 'todosprodutos'])->name('produtos');
    //editar produto
    Route::get('/produtos/{id}', [produtosController::class, 'editarproduto'])->name('editarproduto');
    Route::get('/produtos2/{id}', [produtosController::class, 'editarproduto2'])->name('editarproduto2');
});

