<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/register", [UserController::class, "register"])->name("auth.register")->middleware("guest");
Route::post("/register", [UserController::class, "handleRegister"])->middleware("guest");

Route::get("/login", [UserController::class, "login"])->name("auth.login")->middleware("guest");
Route::post("/login", [UserController::class, "handleLogin"])->middleware("guest");
Route::delete("/logout", [UserController::class, "logout"])->name("auth.logout")->middleware("auth");

// Publications
Route::get("/posts", [PostController::class, "index"])->name("posts.index");
Route::get("/posts/create", [PostController::class, "create"])->name("posts.create")->middleware("auth");
Route::post("/posts/create", [PostController::class, "store"])->middleware("auth");

Route::get("/posts/{post}", [PostController::class, "show"])->name("posts.show");
Route::get("/posts/{post}/edit", [PostController::class, "edit"])->middleware("auth")->name("posts.edit");
Route::put("/posts/{post}/edit", [PostController::class, "update"])->middleware("auth")->name("posts.update");
Route::delete("/posts/{post}/delete", [PostController::class, "destroy"])->middleware("auth")->name("posts.destroy");
