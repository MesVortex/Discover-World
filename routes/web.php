<?php

use App\Http\Controllers\AdventureController;
use App\Http\Controllers\Pages;
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

Route::get('/', [Pages::class, 'index'])->name('homePage');

Route::post('/', [Pages::class, 'filter'])
->name('filter');

Route::post('/order', [Pages::class, 'order'])
->name('order');

Route::get('/statistics', [Pages::class, 'statistics'])
->name('statistics');

Route::post('/adventure/show', [AdventureController::class, 'show'])
->name('adventure.show');

Route::post('/adventure', [AdventureController::class, 'store'])
->name('store');