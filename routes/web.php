<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home', function () {
    return view('welcome');
});
// Route::get('/home', [HomeController::class, 'index'])->name('home-page');

Route::get('/', [HomeController::class, 'index'])->name('home-page');

Route::get('/sectors/{slung}', [HomeController::class, 'sectors'])->name('sectors');

// Route::get('/sectors/{slung}', [HomeController::class, 'commercial_cleaning'])->name('commercial-cleaning');
// Route::get('/sectors/{construction-and-suppies}', [HomeController::class, 'construction_and_suppies'])->name('construction-and-suppies');
// Route::get('/sectors/{foot-and-beverages}', [HomeController::class, 'foot_and_beverages'])->name('foot-and-beverages');
// Route::get('/sectors/{motion-pictures-and-media-production}', [HomeController::class, 'production'])->name('production');
// Route::get('/sectors/{farming-and-meat-production}', [HomeController::class, 'farming_and_meat_production'])->name('farming-and-meat-production');



Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');

// House Of Shaq
// Shemaq Productions
// Treven Cleaners
