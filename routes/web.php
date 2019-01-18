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

Route::get('/home', 'HomeController@index')->middleware(['auth'])->name('home');

Route::get('/news/{alias}', 'NewsController@showNews');

Route::prefix("/admin")->middleware(['auth'])->group( function () {

    Route::group(['prefix' => '/seo'], function () {
       
        Route::get('/', 'SeoController@list')->name('seo-list');

        Route::get('/create', 'SeoController@show');
        Route::post('/create', 'SeoController@create')->name('seo-create');
    
        Route::get('/edit/{id}', 'SeoController@show')->name('seo-edit');
        Route::post('/edit/{id}', 'SeoController@update')->name('seo-update');
    
        Route::get('/delete/{id}', 'SeoController@delete')->name('seo-delete');
    });

    Route::group(['prefix' => '/news'], function () {
        Route::get('/', 'NewsController@list')->name('news');

        Route::get('/create', 'NewsController@show');
        Route::post('/create', 'NewsController@create')->name('news-create');

        Route::get('/edit/{id}', 'NewsController@show')->name('news-edit');
        Route::post('/edit/{id}', 'NewsController@update')->name('news-update');

        Route::get('/delete/{id}', 'NewsController@delete')->name('news-delete');
    });
    
});
