<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client/create', 'Admin\ClientController@create')->name('client.create');
Route::get('/client/professional', 'Admin\ClientController@professional')->name('client.professional');
Route::post('/client/store', 'Admin\ClientController@store')->name('client.store');
Route::get('/client/particular', 'Admin\ClientController@particular')->name('client.particular');

Route::get('/traitant/create', 'Admin\ClientController@traitantCreate')->name('traitant.create');
Route::get('/traitant/index', 'Admin\ClientController@traitantIndex')->name('traitant.index');

Route::get('/commercial/create', 'Admin\ClientController@commercialCreate')->name('commercial.create');
Route::get('/commercial/index', 'Admin\ClientController@commercialIndex')->name('commercial.index');

Route::get('/conducteur/create', 'Admin\ClientController@conducteurCreate')->name('conducteur.create');
Route::get('/conducteur/index', 'Admin\ClientController@conducteurIndex')->name('conducteur.index');
