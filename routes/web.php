<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sobre', [PaginaController::class, 'sobre']);

Route::get('/entregas', [Controller::class, 'index']);
