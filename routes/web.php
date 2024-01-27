<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FavoriteQuoteController;

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
    return redirect('/today');
});

Route::get('/quotes', function () {
    return view('quotes');
});

Route::get('/today', function () {
    return view('today');
});

Route::get('/dashboard', function () {
    return redirect('/secure-quotes');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/secure-quotes', function () {
    return view('secure-quotes');
})->middleware(['auth', 'verified'])->name('secure-quotes');


Route::get('/favorite-quotes', function () {
    return view('favorite-quotes');
})->middleware(['auth', 'verified'])->name('secure-quotes');

Route::get('/report-favorite-quotes', function () {
    return view('report-favorite-quotes');
})->middleware(['auth', 'verified'])->name('secure-quotes');


Route::get('my-quotes', [FavoriteQuoteController::class, 'listAllMyFavotiteQuotes']);

Route::get('all-users-quotes', [FavoriteQuoteController::class, 'listAllFavotiteQuotes']);

Route::post('favotite-this-quote', [FavoriteQuoteController::class, 'favoriteOneQuote']);

Route::delete('delete-favotite-quote/{id}', [FavoriteQuoteController::class, 'removeFavoriteQuote']);

require __DIR__.'/auth.php';
