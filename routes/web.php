<?php

use Illuminate\Support\Facades\Route;

// o usuario entra no site principal /home automaticamente
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/detalhes', function () {
    return view('detalhes');
})->name('detalhes');

Route::get('/home', function () { // como fica na url
    return view('app'); //chamada do arquivo
})->name('home'); // mome na ancora href html5

Route::get('/detalhes', function () { // como fica na url
    return view('layouts.detalhes'); //chamada do arquivo
})->name('detalhes'); // mome na ancora href html5

Route::get('/avaliacao', function () { // como fica na url
    return view('layouts.avaliacao'); //chamada do arquivo
})->name('avaliacao'); // mome na ancora href html5

Route::get('/login', function () { // como fica na url
    return view('layouts.login'); //chamada do arquivo
})->name(''); // mome na ancora href html5