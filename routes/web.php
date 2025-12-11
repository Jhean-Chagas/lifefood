<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
})->name('home');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');
Route::get('/produtos', function () {
    return view('produtos');
})->name('produtos');
use App\Http\Controllers\ContatoController;

Route::post('/contato/enviar', [ContatoController::class, 'enviar'])
    ->name('contato.enviar');
