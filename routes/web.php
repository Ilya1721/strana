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
Route::get('lastReport', 'MainController@last_report');
Route::get('mainArticle', 'MainController@main_article');
Route::get('mainVideo', 'MainController@main_video');

Route::get('/reports', function() {
  return view('reports');
});
Route::get('/reports/{report}', function() {
  return view('report');
});
Route::get('report', 'NewsController@index');
Route::get('report/{report}', 'NewsController@show');

Route::get('/articles', function() {
  return view('articles');
});
Route::get('/articles/{article}', function() {
  return view('article');
});
Route::get('article', 'ArticleController@index');
Route::get('article/{article}', 'ArticleController@show');

Route::get('/opinions', function() {
  return view('opinions');
});
Route::get('/opinions/{opinion}', function() {
  return view('opinion');
});
Route::get('opinion', 'OpinionController@index');
Route::get('opinion/{opinion}', 'OpinionController@show');

Route::get('/interviews', function() {
  return view('interviews');
});
Route::get('/interviews/{interview}', function() {
  return view('interview');
});
Route::get('interview', 'InterviewController@index');
Route::get('interview/{interview}', 'InterviewController@show');

Route::get('/videos', function() {
  return view('videos');
});
Route::get('/videos/{video}', function() {
  return view('video');
});
Route::get('video', 'VideoController@index');
Route::get('video/{video}', 'VideoController@show');

Route::get('/ataka-na-stranus', function() {
  return view('attacks');
});
Route::get('/ataka-na-stranus/{attack}', function() {
  return view('attack');
});
Route::get('ataka-na-stranu', 'AttackOnStranaController@index');
Route::get('ataka-na-stranu/{attack}', 'AttackOnStranaController@show');

Route::get('/churches', function() {
  return view('churches');
});
Route::get('/churches/{church}', function() {
  return view('church');
});
Route::get('church', 'ChurchController@index');
Route::get('church/{church}', 'ChurchController@show');

Route::get('/finances', function() {
  return view('finances');
});
Route::get('/finances/{finance}', function() {
  return view('finance');
});
Route::get('finance', 'FinanceController@index');
Route::get('finance/{finance}', 'FinanceController@show');

Route::get('/showbizs', function() {
  return view('showbizs');
});
Route::get('/showbizs/{showbiz}', function() {
  return view('showbiz');
});
Route::get('showbiz', 'ShowBizController@index');
Route::get('showbiz/{showbiz}', 'ShowBizController@show');

Route::get('/sports', function() {
  return view('sports');
});
Route::get('/sports/{sport}', function() {
  return view('sport');
});
Route::get('sport', 'SportController@index');
Route::get('sport/{sport}', 'SportController@show');

Route::get('headerOpinion', 'OpinionController@header');
Route::get('headerArticle', 'ArticleController@header');
Route::get('footerOpinion', 'OpinionController@footer');
Route::get('footerFinanceArticle', 'ArticleController@footer_finance');
Route::get('footerPickArticle', 'ArticleController@footer_pick');
Route::get('rightBarArticle', 'ArticleController@right_bar');
Route::get('rightBarVideo', 'VideoController@right_bar');
Route::get('rightBarReport', 'NewsController@right_bar');
Route::get('rightBarPrivate', 'ArticleController@private');

Route::get('/test', function() {
  return view('test');
});
Route::get('items', 'ItemController@index');
