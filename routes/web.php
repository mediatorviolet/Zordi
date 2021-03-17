<?php

use App\Http\Controllers\SlotsController;
use App\Http\Controllers\OrdinateursController;
use App\Http\Controllers\UtilisateursController;
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
    return view('auth.login');
});

Route::resource('/slots', SlotsController::class)->middleware(['auth']);

Route::resource('/ordinateurs', OrdinateursController::class)->middleware(['auth']);

Route::resource('/utilisateurs', UtilisateursController::class)->middleware(['auth']);

require __DIR__ . '/auth.php';
