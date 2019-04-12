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
    return view('auth/login');
});

// Route::get('/summaries/secretary', function() {
//     return view('secretarySummaries');
// });

Route::get('/summaries/secretary', 'SecretaryController@index');
Route::get('/expense/{id}/secretary', 'SecretaryController@edit');
Route::patch('/expense/{id}/secretary', 'SecretaryController@update');

Route::get('/summaries/manager', 'ManagerController@index');
Route::post('/summaries/manager', 'ManagerController@store'); // Endpoint for submitting reports
Route::get('/expense/{id}/manager', 'ManagerController@edit');
Route::patch('/expense/{id}/manager', 'ManagerController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
