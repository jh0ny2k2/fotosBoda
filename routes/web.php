<?php

use App\Http\Controllers\BebidaController;
use App\Http\Controllers\CancionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\InvitadoController;

// INICIO
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// FORMULARIO
Route::post('/confirmarAsistencia', [InvitadoController::class, 'confirmarAsistencia'])->name('confirmarAsistencia');

// SUBIR FOTOS
Route::get('/subirFotos', [FotoController::class, 'verSubirFotos'])->name('verSubirFotos');
Route::post('/subirFotos', [FotoController::class, 'subirFotos'])->name('subirFoto');

Route::get('/verFotos', [FotoController::class, 'verFotos'])->name('verFotos');


// CANCION
Route::post('/cancion', [CancionController::class, 'cancion'])->name('cancion');

// BEBIDAS 
Route::post('/bebidas', [BebidaController::class, 'bebida'])->name('bebida');



//LISTA INVITADOS
Route::get('/verAdmin', [InvitadoController::class, 'verAdmin'])->name('verAdmin');
Route::get('/verInvitaciones', [InvitadoController::class, 'verInvitaciones'])->name('verInvitaciones');
Route::get('/verCanciones', [InvitadoController::class, 'verCanciones'])->name('verCanciones');
Route::get('/verBebidas', [BebidaController::class, 'admin'])->name('admin');