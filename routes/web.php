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

Route::get('/login', function (){
    return view('auth.login');
});
Route::get('/', function (){
    return view('auth.login');
});
Route::get('/search-for-players-data', 'PlayersController@search');
Route::get('/Reports', 'ReportsController@index');
Route::get('/search-for-systemInfo-data', 'SysteminfosController@search');
Route::get('/search-for-accounts-data', 'AccountsController@search');
Route::get('/search-for-activitylog-data', 'ActivitylogsController@search');
Route::get('/search-for-foodhunt-data', 'StageprogressController@search');
Route::get('/search-for-fooddrop-data', 'FooddropscoresController@search');
Route::get('/search-for-spellafood-data', 'SpellafoodscoresController@search');

Route::resource('accounts', 'AccountsController');
Route::resource('players', 'PlayersController');
Route::resource('systemupdates', 'SystemupdatesController');
Route::resource('reports', 'ReportsController');
Route::resource('systeminfos', 'SysteminfosController');
Route::resource('activitylogs', 'ActivitylogsController');
Route::resource('foodhunt', 'StageprogressController');
Route::resource('spellafood', 'SpellafoodscoresController');
Route::resource('fooddrop', 'FooddropscoresController');

Auth::routes();

