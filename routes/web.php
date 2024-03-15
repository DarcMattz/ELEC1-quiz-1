<?php

use App\Http\Controllers\PostController;
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

Route::get('/registration', [
    PostController::class, 'show_reg'
]);

Route::post('/registration', [
    PostController::class, 'create'
]);

Route::get('/login', [
    PostController::class, 'show_login'
]);

Route::post('/login', [
    PostController::class, 'login'
]);

Route::get('/index', [
    PostController::class, 'show_index'
])->middleware('check');

Route::get('/logout', [
    PostController::class, 'logout'
]);
