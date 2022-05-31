<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fatura_controller;
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

//usuario

Route::get('/', function () {
    return view('usuario/login');
});

Route::get('/register', function(){
    return view('usuario/register');
});

Route::get('/recuperarSenha', function(){
    return view('usuario/recover');
});

Route::get('/usuario/detalhes', function(){
    return view('usuario/detalhesUsuario');
});

// fatura

Route::get('/fatura/index', [fatura_controller::class, 'index']);

Route::get('/fatura/cadastrar', [fatura_controller::class, 'create']);

Route::post('/fatura/index',  [fatura_controller::class, 'index']);

Route::post('/fatura/salvar',  [fatura_controller::class, 'salvar']);
