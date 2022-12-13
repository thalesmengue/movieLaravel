<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;


Route::get("/login", [LoginController::class, "index"])->name("login.view");
Route::post("/login", [LoginController::class, "login"])->name("login.user");

Route::get("/register", [RegisterController::class, "index"])->name("register.view");
Route::post("/register", [RegisterController::class, "register"])->name("register.user");

Route::get("/password/forgot", [ForgotPasswordController::class, "index"])->name("password.request");
Route::post("/password/forgot", [ForgotPasswordController::class, "sendResetPasswordEmail"])->name("password.email");
Route::get("/password/reset/{token}", [ForgotPasswordController::class, "resetPasswordForm"])->name("password.reset");
Route::post("/password/reset", [ForgotPasswordController::class, "resetUserPassword"])->name("post.reset");

Route::middleware("auth")->group(function () {
    Route::resource('movies', MovieController::class)->except('index');
    Route::resource("users", UserController::class)->only('edit', 'update');

    Route::get("/", [MovieController::class, "index"])->name("index");

    Route::get("/logout", [LogoutController::class, "logout"])->name("logout.user");
});
