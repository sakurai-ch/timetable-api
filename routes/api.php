<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ResultController;


Route::get('/', [HomeController::class, 'get']);

Route::post('/', [HomeController::class, 'post']);

Route::get('/list', [ListController::class, 'get']);

Route::get('/result', [ResultController::class, 'get']);
