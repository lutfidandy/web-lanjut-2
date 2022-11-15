<?php

use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::resource('Soal', SoalController::class);
