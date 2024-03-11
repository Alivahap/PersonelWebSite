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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/test/{ad?}/{soyad?}', function ($ad=null,$soyad=null ) {
    
    
    
    return "ad: ".$ad."<br> soyad:".$soyad;
    #return view('test');
})->where(['ad' => '[a-z]+','soyad' => '[azA-z]+'])->name('test');


Route::post('/post', function () {
    return view('test');
});




Route::get('/page', [PageController::class, 'index']);

Route::get('/hakkimizda', 'App\Http\Controllers\HakkimizdaController@index')->name('hakkimizda');
Route::get('/portfolyo', 'App\Http\Controllers\PortfolyoController@index')->name('portfolyo');
