<?php

use App\Http\Controllers\AsignaturaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    Route::resource('asignatura', AsignaturaController::class);