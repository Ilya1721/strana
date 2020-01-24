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
Route::get('/news/{name}', 'NewsController@show');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/{name}', 'ArticleController@show');
Route::get('/opinions', 'OpinionController@index');
Route::get('/opinions/{name}', 'OpinionController@show');
Route::get('/interviews', 'InterviewController@index');
Route::get('/interviews/{name}', 'InterviewController@show');
Route::get('/videos', 'VideoController@index');
Route::get('/videos/{name}', 'VideoController@show');
Route::get('/ataka-na-stranu', 'AttackOnStranaController@index');
Route::get('/ataka-na-stranu/{ataka1}', 'AttackOnStranaController@show');
Route::get('/church', 'ChurchController@index');
Route::get('/church/{name}', 'ChurchController@show');
Route::get('/finance', 'FinanceController@index');
Route::get('/finance/{name}', 'FinanceController@show');
Route::get('/showbiz', 'ShowBizController@index');
Route::get('/showbiz/{name}', 'ShowBizController@show');
Route::get('/sport', 'SportController@index');
Route::get('/sport/{name}', 'SportController@show');
