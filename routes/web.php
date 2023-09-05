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
Route::get('/update', function () {
    return view('update');
});
Route::get('/delete/{id}',[StudantController::class,'destroy']);

Route::get('/add',[StudantController::class,'add'])->name('students.create');
Route::post('/students', [StudantController::class, 'store'])->name('students.store');
Route::get('/create', function () {
    return view('create');
});