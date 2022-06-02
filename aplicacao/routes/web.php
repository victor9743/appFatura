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
Route::get("/", function(){
    return view("auth/login");
});

// fatura


Route::get('/fatura/cadastrar', [fatura_controller::class, 'create']);

Route::post('/fatura/index',  [fatura_controller::class, 'index']);

Route::post('/fatura/salvar',  [fatura_controller::class, 'salvar']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/index',  [fatura_controller::class, 'index'])->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/fatura/index', [fatura_controller::class, 'index']);

});