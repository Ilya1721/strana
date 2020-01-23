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

Route::get('/', function () {
    return view('main');
});
Route::get('/news', 'NewsController@index');
Route::get('/news/weather', 'NewsController@show');
Route::get('/articles', 'ArticleController@index');
Route::get('/opinions', 'OpinionController@index');
Route::get('/interviews', 'InterviewController@index');
Route::get('/videos', 'VideoController@index');
Route::get('/ataka-na-stranu', 'AttackOnStranaController@index');
Route::get('/church', 'ChurchController@index');
Route::get('/finance', 'FinanceController@index');
Route::get('/showbiz', 'ShowBizController@index');
Route::get('/sport', 'SportController@index');
