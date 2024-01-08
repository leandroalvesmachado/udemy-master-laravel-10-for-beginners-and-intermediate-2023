<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
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
    // return view('welcome');
    return redirect()->route('books.index');
});

// Route::resource('books', BookController::class);

Route::resource('books', BookController::class)
    ->only(['index', 'show']);

// GET|HEAD   books/{book} ................... books.show › BookController@show
// POST       books/{book}/reviews ........... books.reviews.store › ReviewController@store
// GET|HEAD   books/{book}/reviews/create .... books.reviews.create › ReviewController@create
Route::resource('books.reviews', ReviewController::class)
    ->scoped(['review' => 'book'])
    ->only(['create', 'store']);
