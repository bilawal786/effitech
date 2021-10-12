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

Route::get('/', 'Front\FrontendController@index')->name('front.index');
Route::get('/admin/login', 'Front\FrontendController@admin')->name('admin.login');
Route::get('/provider/login', 'Front\FrontendController@provider')->name('provider.login');
Route::get('/contact', 'Front\FrontendController@contact')->name('front.contact');

Route::post('/fetchsubcategory', 'Admin\CategoryController@fetchsubcategory')->name('fetchsubcategory');

Auth::routes();
//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function() {

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

    Route::get('/category/index', 'Admin\CategoryController@index')->name('category.index');
    Route::get('/category/delete/{id}', 'Admin\CategoryController@delete')->name('category.delete');
    Route::post('/category/store', 'Admin\CategoryController@store')->name('category.store');

    Route::get('/subcategory/index', 'Admin\CategoryController@subcategoryindex')->name('subcategory.index');
    Route::get('/subcategory/delete/{id}', 'Admin\CategoryController@subcategorydelete')->name('subcategory.delete');
    Route::post('/subcategory/store', 'Admin\CategoryController@subcategorystore')->name('subcategory.store');


});
//Client routes
Route::group(['middleware' => ['auth', 'web', 'client']], function() {
    Route::prefix('client')->group(function () {
        Route::get('/dashboard', 'Front\FrontendController@clientDashboard')->name('client.dashboard');

        Route::get('/problem/create', 'Client\ClientController@problemCreate')->name('problem.create');
        Route::get('/problem/index', 'Client\ClientController@problemIndex')->name('problem.index');
        Route::post('/problem/store', 'Client\ClientController@problemStore')->name('problem.store');
    });
});
//Provider routes
Route::group(['middleware' => ['auth', 'web', 'provider']], function() {
    Route::prefix('provider')->group(function () {
        Route::get('/dashboard', 'Front\FrontendController@providerDashboard')->name('provider.dashboard');
    });
});
