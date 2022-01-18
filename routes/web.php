<?php

use App\Http\Controllers\CreatorController;
use App\Http\Controllers\SubscriberFizikController;
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

Route::resource('creator', CreatorController::class);

Route::resource('subscriberfizik', SubscriberFizikController::class);
