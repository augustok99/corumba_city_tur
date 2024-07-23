<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RatingController;

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
})->name('home'); // mome na ancora href html5 //proteger a rota

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
Route::get('/detalhes', [PlaceController::class, 'showDetails'])->name('detalhes');
Route::get('/places/{id}/edit', [PlaceController::class, 'edit'])->name('places.edit');
Route::put('/places/{id}', [PlaceController::class, 'update'])->name('places.update');
Route::get('/places/{id}', [PlaceController::class, 'show'])->name('places.show');
Route::delete('/places/{id}', [PlaceController::class, 'destroy'])->name('places.destroy')->middleware('auth');


Route::get('/user/edit', [AuthController::class, 'showEditForm'])->name('users.edit')->middleware('auth');
Route::post('/user/update', [AuthController::class, 'update'])->name('users.update')->middleware('auth');
Route::get('/search', [PlaceController::class, 'search'])->name('places.search');



// Rotas de Avaliacao
Route::post('/ratings/{id}/like', [RatingController::class, 'toggleLike'])->name('ratings.like')->middleware('auth');
Route::get('/ratings/', [RatingController::class, 'show'])->name('ratings.show')->middleware('auth');
Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store')->middleware('auth');