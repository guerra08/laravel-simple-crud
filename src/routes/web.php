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

Route::get('/users/add', function(){ return view('add-user'); })->name('get-create-user-page');

Route::get('/users/edit/{id}', [UserController::class, 'getUserEditPage'])->name('get-edit-user-page');

Route::post('/users/add', [UserController::class, 'registerUser'])->name('create-user');

Route::patch('/users/edit/{id}', [UserController::class, 'updateUser'])->name('edit-user');

Route::delete('/users/delete/{id}', [UserController::class, 'deleteUser'])->name('delete-user');
