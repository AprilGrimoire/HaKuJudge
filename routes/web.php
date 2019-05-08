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

Route::get('/', 'StaticPagesController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/problems', 'ProblemsController');
Route::get('/problems/{problem}/fetch', 'ProblemsController@fetch')->name('problems.fetch');
Route::get('/problems/{problem}/digest', 'ProblemsController@digest')->name('problems.digest');

Route::resource('/submissions', 'SubmissionsController');
Route::get('/attach_submission', 'SubmissionsController@attach')->name('submissions.attach');
