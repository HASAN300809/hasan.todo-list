<?php

use App\Http\Controllers\todocontroller;
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
});

Route::get('/todo', [todocontroller::class, 'index'])->name('todo');
Route::post('/todo', [todocontroller::class, 'store'])->name('todo.post');
Route::put('/todo/{id}', [todocontroller::class, 'update'])->name('todo.update');
Route::delete('/todo/{id}', [todocontroller::class, 'destroy'])->name('todo.delete');

