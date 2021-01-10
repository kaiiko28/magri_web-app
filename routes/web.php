<?php

use App\Http\Controllers\PageController;
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




Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/search', [PageController::class, 'searchpage'])->name('searchpage');
Route::get('/offers', [PageController::class, 'offers'])->name('offers');
Route::get('/restaurant', [PageController::class, 'restaurant'])->name('restaurant');
Route::get('/loginpage', [PageController::class, 'login'])->name('login_page');
Route::get('/trending', [PageController::class, 'trending'])->name('trending');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
