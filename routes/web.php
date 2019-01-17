<?php

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

Route::get('/', 'NewsController@showNewsOnHome');

Auth::routes();

Route::match(['get', 'post'], '/register', function () { return abort(404); });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news/{alias}', 'NewsController@showNews');

Route::prefix("/admin")->middleware(['auth'])->group( function () {

    Route::get('/seo', 'SeoController@list')->name('seo-list');

    Route::get('/seo/create', 'SeoController@show');
    Route::post('/seo/create', 'SeoController@create')->name('seo-create');

    Route::get('/seo/edit/{id}', 'SeoController@show')->name('seo-edit');
    Route::post('/seo/edit/{id}', 'SeoController@update')->name('seo-update');

    Route::get('/seo/delete/{id}', 'SeoController@delete')->name('seo-delete');

    Route::get('/news', 'NewsController@list')->name('news');

    Route::get('/news/create', 'NewsController@show');
    Route::post('/news/create', 'NewsController@create')->name('news-create');

    Route::get('/news/edit/{id}', 'NewsController@show')->name('news-edit');
    Route::post('/news/edit/{id}', 'NewsController@update')->name('news-update');

    Route::get('/news/delete/{id}', 'NewsController@delete')->name('news-delete');

});
