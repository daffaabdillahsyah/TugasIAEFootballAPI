<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teamController;
use App\Http\Controllers\countryController;
use App\Http\Controllers\predictionController;
use App\Http\Controllers\competitionController;

Route::get('/', [countryController::class, 'country']);

Route::get('/comp/{id}', [competitionController::class, 'competition']) -> name("comp");