<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdadController;

Route::get('/', function () {
    return view('verifica'); // vista inicial
});

Route::post('/procesar-edad', [EdadController::class, 'procesar'])->middleware('verificar.edad');

Route::get('/error', function () {
    return view('error');
})->name('error');

Route::get('/bebes', [BebesController::class, 'index']);

Route::get('/ninos', [NinosController::class, 'index']);

Route::get('/adolescentes', [AdolescentesController::class, 'index']);

Route::get('/jovenes', [JovenesController::class, 'index']);

Route::get('/adultos', [AdultosController::class, 'index']);

Route::get('/mayores', [MayoresController::class, 'index']);

Route::get('/longevos', [LongevosController::class, 'index']);
