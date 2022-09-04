<?php

use App\Http\Controllers\mesasController;
use App\Http\Controllers\produtosController;
use App\Http\Controllers\CaixaController;
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
    Route::get('/mesas', [mesasController::class, 'todasmesas'])->name('mesas');
    Route::get('/mesasSolicitar/{id}', [mesasController::class, 'reservarMesa'])->name('reservarMesa');
    Route::get('/mesasConta/{id}', [mesasController::class, 'solicitarConta'])->name('solicitarConta');
    Route::get('/mesasAddPedidos/{id}', [mesasController::class, 'adicionarPedidos'])->name('adicionarPedidos');

    //---------------------- produtos ----------------------
    Route::get('/produtos', [produtosController::class, 'todosprodutos'])->name('produtos');
    Route::get('/produtos/{id}', [produtosController::class, 'editarproduto'])->name('editarproduto');
    Route::get('/produtos2/{id}', [produtosController::class, 'editarproduto2'])->name('editarproduto2');
    
    //---------------------- Caixa ------------------------
    Route::get('/caixa', [CaixaController::class, 'caixaDados'])->name('caixa');
    Route::get('/addCaixa/{id}', [CaixaController::class, 'adicionarAoCaixa'])->name('adicionarAoCaixa');
   
});

