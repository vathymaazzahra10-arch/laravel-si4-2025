<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\MyController;

Route::get('/', [PraktikumController::class, 'index']);

Route::get('/welcome', [WelcomeController::class, 'show']);

Route::get('/my-page', [MyController::class, 'showPage']);

Route::post('/submit-form', [MyController::class, 'submitForm']);

Route::get('/mahasiswa', [PraktikumController::class, 'mahasiswaIndex']);
