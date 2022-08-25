<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [MovieController::class, "index"])->name("index");
Route::post("/", [MovieController::class, "store"])->name("store");
Route::get("/edit/{movie}", [MovieController::class, "edit"])->name("movie.edit");
Route::post("/edit/{movie}", [MovieController::class, "update"])->name("movie.update");
Route::delete("/edit/{movie}", [MovieController::class, "destroy"])->name("movie.destroy");

Route::fallback(function () {
    echo 'The route you tried to access isn' . "'" . 't available, <a href="' . route('index') . '">
click here</a> to return to home page';
});
