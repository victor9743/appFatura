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

Route::get('/', function () {
    return view('usuario/login');
});

Route::get('/register', function(){
    return view('usuario/register');
});

Route::get('/fatura/index', function(){
    return view('dashboard/index');
});

Route::get('/fatura/cadastrar', [fatura_controller::class, 'create']);

Route::post('/fatura/index',  [fatura_controller::class, 'index']);

Route::post('/fatura/salvar',  [fatura_controller::class, 'salvar']);
