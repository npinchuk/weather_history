<?php

use Illuminate\Support\Facades\Route;
use App\Http\Procedures\WeatherProcedure;

/** @see \Sajya\Server\ServerServiceProvider::register() */
Route::rpc('/', [WeatherProcedure::class], '.');
