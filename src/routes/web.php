<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index']);

Route::get('/users/signup', function () {
    return view('add-user');
});

Route::post('/users/signup', [UserController::class, 'registerUser']);

Route::get('/users/delete/{id}', [UserController::class, 'deleteUser']);
