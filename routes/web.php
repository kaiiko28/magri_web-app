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
Route::get('/404', [PageController::class, 'notfound'])->name('notfound');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/comingsoon', [PageController::class, 'coming_soon'])->name('coming_soon');
Route::get('/contact_us', [PageController::class, 'contact_us'])->name('contact_us');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/favorites', [PageController::class, 'favorites'])->name('favorites');
Route::get('/forgot_password', [PageController::class, 'forgot_password'])->name('forgot_password');
Route::get('/location', [PageController::class, 'location'])->name('location');
Route::get('/maintenance', [PageController::class, 'maintenance'])->name('maintenance');
Route::get('/map', [PageController::class, 'map'])->name('map');
Route::get('/most_popular', [PageController::class, 'most_popular'])->name('most_popular');
Route::get('/my_order', [PageController::class, 'my_order'])->name('my_order');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/signup', [PageController::class, 'signup'])->name('signup');
Route::get('/status_canceled', [PageController::class, 'status_canceled'])->name('status_canceled');
Route::get('/status_completed', [PageController::class, 'status_completed'])->name('status_completed');
Route::get('/status_onprogress', [PageController::class, 'status_onprogress'])->name('status_onprogress');
Route::get('/search', [PageController::class, 'searchpage'])->name('searchpage');
Route::get('/successful', [PageController::class, 'successful'])->name('successful');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/verification', [PageController::class, 'verification'])->name('verification');
Route::get('/verification', [PageController::class, 'verification'])->name('verification');
Route::get('/offers', [PageController::class, 'offers'])->name('offers');
Route::get('/restaurant', [PageController::class, 'restaurant'])->name('restaurant');
Route::get('/loginpage', [PageController::class, 'login'])->name('loginpage');
Route::get('/trending', [PageController::class, 'trending'])->name('trending');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
