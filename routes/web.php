<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);  
Route::get('/cart-list', [MovieController::class, 'movieCart']);
Route::post('add-to-cart', [MovieController::class, 'addMovieToCart'])->name('add-movie-to-shopping-cart');
Route::delete('/delete-cart-item', [MovieController::class, 'deleteItem'])->name('delete.cart.item');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');