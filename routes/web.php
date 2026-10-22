<?php

use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DestinationController::class, 'index'])
    ->name('destinations.index');

Route::get('/wisata/{destination}', [DestinationController::class, 'show'])
    ->name('destinations.show');
