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

Route::get('/', 'MainController@index');
Route::get('/news', 'NewsController@index');
Route::get('/news/{report}', 'NewsController@show');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/{article}', 'ArticleController@show');
Route::get('/opinions', 'OpinionController@index');
Route::get('/opinions/{opinion}', 'OpinionController@show');
Route::get('/interviews', 'InterviewController@index');
Route::get('/interviews/{interview}', 'InterviewController@show');
Route::get('/videos', 'VideoController@index');
Route::get('/videos/{video}', 'VideoController@show');
Route::get('/ataka-na-stranu', 'AttackOnStranaController@index');
Route::get('/ataka-na-stranu/{ataka}', 'AttackOnStranaController@show');
Route::get('/church', 'ChurchController@index');
Route::get('/church/{church}', 'ChurchController@show');
Route::get('/finance', 'FinanceController@index');
Route::get('/finance/{finance}', 'FinanceController@show');
Route::get('/showbiz', 'ShowBizController@index');
Route::get('/showbiz/{showbiz}', 'ShowBizController@show');
Route::get('/sport', 'SportController@index');
Route::get('/sport/{sport}', 'SportController@show');
