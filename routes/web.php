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
    return view('welcome');
});

// Route::get('/summaries/secretary', function() {
//     return view('secretarySummaries');
// });

Route::get('/summaries/secretary', 'SecretaryController@index');
Route::get('/expense/{id}/secretary', 'SecretaryController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
