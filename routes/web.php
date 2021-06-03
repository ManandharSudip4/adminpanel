<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/achievements', [PagesController::class, 'achievements'])->name('achievements');
Route::get('/add-facilities', [PagesController::class, 'addFacilities'])->name('addFacilities');
Route::get('/add-social-media', [PagesController::class, 'addSocialMedia'])->name('addSocialMedia');
Route::get('/cancel-bookings', [PagesController::class, 'cancelBookings'])->name('cancelBookings');
Route::get('/maps-location-change', [PagesController::class, 'mapsLocationChange'])->name('mapsLocationChange');
Route::get('/notice', [PagesController::class, 'notice'])->name('notice');
Route::get('/offers', [PagesController::class, 'offers'])->name('offers');
Route::get('/rules', [PagesController::class, 'rules'])->name('rules');
Route::get('/update-contacts', [PagesController::class, 'updateContacts'])->name('updateContacts');
Route::get('/update-profile', [PagesController::class, 'updateProfile'])->name('updateProfile');