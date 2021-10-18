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
Route::get('/renovation', 'Front\FrontendController@renovation')->name('front.renovation');
Route::get('/construction', 'Front\FrontendController@construction')->name('front.construction');
Route::get('/offers', 'Front\FrontendController@offers')->name('front.offers');
Route::get('/offers/details/{id}', 'Front\FrontendController@offersDetails')->name('offer.details');
Route::get('/gallery', 'Front\FrontendController@gallery')->name('front.gallery');
Route::get('/gallery/view/{id}', 'Front\FrontendController@galleryView')->name('gallery.view');

Route::post('/fetchsubcategory', 'Admin\CategoryController@fetchsubcategory')->name('fetchsubcategory');
Route::post('/profileupdate', 'Front\FrontendController@profileupdate')->name('profileupdate');

Auth::routes();
//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::prefix('admin')->group(function () {

    Route::get('/general/gallery/delete/{id}', 'Admin\WebsiteController@gallerydelete')->name('gallery.delete');
    Route::get('/general/gallery', 'Admin\WebsiteController@gallery')->name('general.gallery');
    Route::get('/general/offers', 'Admin\WebsiteController@offers')->name('general.offers');
    Route::get('/general/edit/{id}', 'Admin\WebsiteController@offeredit')->name('offer.edit');
    Route::post('/general/update/{id}', 'Admin\WebsiteController@offerUpdate')->name('offer.update');
    Route::get('/general/construction', 'Admin\WebsiteController@construction')->name('general.construction');
    Route::get('/general/settings', 'Admin\WebsiteController@settings')->name('general.settings');
    Route::get('/general/renovation', 'Admin\WebsiteController@renovation')->name('general.renovation');
    Route::get('/general/slider', 'Admin\WebsiteController@slider')->name('general.slider');
    Route::get('/general/testimonial', 'Admin\WebsiteController@testimonial')->name('general.testimonial');
    Route::get('/general/services', 'Admin\WebsiteController@services')->name('general.services');
    Route::post('/slider/store', 'Admin\WebsiteController@sliderStore')->name('slider.store');
    Route::post('/service/store', 'Admin\WebsiteController@serviceStore')->name('service.store');
    Route::post('/testimonial/store', 'Admin\WebsiteController@testimonialStore')->name('testimonial.store');
    Route::post('/construction/store', 'Admin\WebsiteController@constructionStore')->name('construction.store');
    Route::post('/renovation/store', 'Admin\WebsiteController@renovationStore')->name('renovation.store');
    Route::post('/settings/store', 'Admin\WebsiteController@settingsStore')->name('settings.store');
    Route::post('/gallery/store', 'Admin\WebsiteController@galleryStore')->name('gallery.store');

    Route::get('/site/create', 'Admin\SiteController@createSite')->name('site.create');
    Route::get('/site/index', 'Admin\SiteController@indexSite')->name('site.index');
    Route::get('/site/view/{id}', 'Admin\SiteController@viewSite')->name('site.view');
    Route::post('/site/store', 'Admin\SiteController@storeSite')->name('site.store');
    Route::post('/site/step/store', 'Admin\SiteController@stepSiteStore')->name('site.steps.store');
    Route::get('/step/status/{id}/{status}', 'Admin\SiteController@stepStatus')->name('step.status');

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

    Route::get('/problem/index', 'Admin\ClientController@problems')->name('admin.problems.index');
    Route::get('/problem/quote', 'Admin\ClientController@problemsQuote')->name('admin.problems.quote');
    Route::get('/problem/accept', 'Admin\ClientController@problemsAccept')->name('admin.problems.accept');
    Route::get('/problem/view/{id}', 'Admin\ClientController@problemView')->name('admin.problem.view');
    Route::post('/problem/quote{id}', 'Admin\ClientController@problemQuote')->name('admin.problem.quote');
    Route::post('/assign/problem/{id}', 'Admin\ClientController@problemAssign')->name('admin.assign.problem');

    });
});
//Client routes
Route::group(['middleware' => ['auth', 'web', 'client']], function() {
    Route::prefix('client')->group(function () {
        Route::get('/dashboard', 'Front\FrontendController@clientDashboard')->name('client.dashboard');

        Route::get('/problem/create', 'Client\ClientController@problemCreate')->name('problem.create');
        Route::get('/problem/index', 'Client\ClientController@problemIndex')->name('problem.index');
        Route::post('/problem/store', 'Client\ClientController@problemStore')->name('problem.store');
        Route::get('/problem/view/{id}', 'Client\ClientController@problemView')->name('problem.view');
        Route::get('/problem/quote/status/{id}/{status}', 'Client\ClientController@problemQuote_status')->name('problem.quote_status');

        Route::get('/client/profile', 'Client\ClientController@profile')->name('client.profile');

        Route::get('/site/index', 'Client\ClientController@sites')->name('client.site.index');
        Route::get('/site/view/{id}', 'Client\ClientController@siteView')->name('client.site.view');
    });
});
//Provider routes
Route::group(['middleware' => ['auth', 'web', 'provider']], function() {
    Route::prefix('provider')->group(function () {
        Route::get('/dashboard', 'Front\FrontendController@providerDashboard')->name('provider.dashboard');

        Route::get('/problems/assign', 'Provider\ProviderController@assignProblems')->name('provider.problems.assign');
        Route::get('/problems/complete', 'Provider\ProviderController@completeProblems')->name('provider.problems.complete');
        Route::get('/problem/view/{id}', 'Provider\ProviderController@problemView')->name('provider.problem.view');
        Route::get('/problem/status/{id}', 'Provider\ProviderController@problemStatus')->name('provider.problem.status');
    });
});
