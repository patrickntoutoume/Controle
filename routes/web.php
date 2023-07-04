<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\TaskController;
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


Route::get('/', [AppController::class , 'index'])->name('home');

Route::post('update_ter/{$id}', [AppController::class , 'update_ter'])->name('update_ter');

Route::resource('/task', TaskController::class );



