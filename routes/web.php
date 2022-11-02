<?php

use App\Http\Controllers\MapController;
use App\Http\Controllers\LegendController;
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
    return view('welcome');
});

Route::get('/home', [MapController::class, 'index']);

Route::get('/legend', [LegendController::class, 'index']);
