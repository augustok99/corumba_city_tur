<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PlaceController;

// Redireciona para /login se não estiver autenticado, caso contrário, redireciona para /home
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('home');
    } else {
        return redirect()->route('login');
    }
});

Route::get('/home', function () { // como fica na url
    return view('app'); //chamada do arquivo
})->name('home')->middleware('auth'); // mome na ancora href html5 //proteger a rota

Route::get('/avaliacao', function () { // como fica na url
    return view('layouts.avaliacao'); //chamada do arquivo
})->name('avaliacao')->middleware('auth'); // mome na ancora href html5

Route::get('/login', function () { // como fica na url
    return view('layouts.login'); //chamada do arquivo
})->name('login'); // mome na ancora href html5

Route::get('/cadastro', function () { // como fica na url
    return view('layouts.cadastro'); //chamada do arquivo
})->name('cadastro'); // mome na ancora href html5

Route::post('/profile_picture', [PictureController::class, 'index'])->name('profile_picture')->middleware('auth');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/autenticar', [AuthController::class, 'autenticar'])->name('autenticar');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store')->middleware('auth');

// Rotas de lugares
Route::get('/lugares_cadastrados', [PlaceController::class, 'index'])->name('lugares_cadastrados')->middleware('auth');
Route::get('/places', [PlaceController::class, 'index'])->name('places.index')->middleware('auth');
Route::get('/detalhes', [PlaceController::class, 'showDetails'])->name('detalhes')->middleware('auth');
Route::get('/places/create', [PlaceController::class, 'create'])->name('places.create')->middleware('auth');