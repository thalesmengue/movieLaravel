<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;


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


Route::get("/login", [LoginController::class, "index"])->name("login.view");
Route::post("/login", [LoginController::class, "login"])->name("login.user");

Route::get("/register", [RegisterController::class, "index"])->name("register.view");
Route::post("/register", [RegisterController::class, "register"])->name("register.user");

Route::get("/password/forgot", [ForgotPasswordController::class, "index"])->name("password.request");
Route::post("/password/forgot", [ForgotPasswordController::class, "sendResetPasswordEmail"])->name("password.email");
Route::get("/password/reset/{token}", [ForgotPasswordController::class, "resetPasswordForm"])->name("password.reset");
Route::post("/password/reset", [ForgotPasswordController::class, "resetUserPassword"])->name("post.reset");

Route::middleware("auth")->group(function () {
    Route::get("/", [MovieController::class, "index"])->name("index");
    Route::post("/", [MovieController::class, "store"])->name("store");

    Route::get("/register/movie", [MovieController::class, "register"])->name("movie.register");
    Route::get("/edit/{movie}", [MovieController::class, "edit"])->name("movie.edit");
    Route::delete("/edit/{movie}", [MovieController::class, "destroy"])->name("movie.destroy");

    Route::get("/profile/{user}", [UserController::class, "edit"])->name("edit.user");
    Route::post("/profile/{user}", [UserController::class, "update"])->name("update.user");
    Route::delete("/profile/{user}", [RegisterController::class, "destroy"])->name("destroy.user");

    Route::get("/logout", [LogoutController::class, "logout"])->middleware("auth")->name("logout.user");
});

//Route::fallback(function () {
//    echo 'The route you tried to access isn' . "'" . 't available, <a href="' . route('index') . '">
//click here</a> to return to home page';
//});
