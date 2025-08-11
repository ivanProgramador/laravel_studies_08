<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware(['auth']);

Route::get('/contatos', function () {
    return view('contatos');
})->name('contatos');

