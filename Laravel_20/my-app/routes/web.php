<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("home", [HomeController::class, "index"]);
Route::get("features", [HomeController::class, "features"]);
Route::get("live", [HomeController::class, "live"]);
Route::get("pages", [HomeController::class, "pages"]);
Route::get("pricing", [HomeController::class, "pricing"]);
