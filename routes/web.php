<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
Route::get('/', [PageController::class, 'index'])->name('welcome');
Route::get('/services', 'App\Http\Controllers\ServicesController@index')->name('services');
Route::get('/aboutme', 'App\Http\Controllers\AboutmeController@index')->name('aboutme');
Route::get('/portfolyo', 'App\Http\Controllers\PortfolyoController@index')->name('portfolyo');