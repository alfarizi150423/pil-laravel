<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index']);