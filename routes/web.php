<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

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

Route::get('/home', [BookController::class, 'index']);


// Route::get('/home', function () {
//     return view('template');
// });

Route::get('/createBook', [BookController::class, 'create']);
Route::post('/storeBook', [BookController::class, 'store']);
Route::get('/showBook/{id}', [BookController::class, 'show']);
Route::get('/editBook/{id}', [BookController::class, 'edit']);
Route::patch('/updateBook/{id}', [BookController::class, 'update']);
Route::delete('/deleteBook/{id}', [BookController::class, 'destroy']);
Route::get('/createCategory', [CategoryController::class, 'create']);
Route::post('/storeCategory', [CategoryController::class, 'store']);