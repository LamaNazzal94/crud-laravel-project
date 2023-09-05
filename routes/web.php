<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudantController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [StudantController::class,'view']);
Route::get('/edit',[StudantController::class,'edit'])->name('edit');
Route::get('/update/{id}', [StudantController::class, 'update'])->name('update');
Route::get('/delete/{id}',[StudantController::class,'destroy']);
