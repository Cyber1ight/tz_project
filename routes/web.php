<?php

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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\TableBookController;
use App\Http\Controllers\TableNumController;
use App\Http\Controllers\MainController;
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/api/v1/books/list', [TableBookController::class, 'create'])->name('books.create');
Route::get('/api/v1/books/{post}', [TableBookController::class, 'show'])->name('books.show');
Route::get('/table_num', [TableNumController::class, 'create'])->name('num.create');


