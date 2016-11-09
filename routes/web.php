<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about', 'AboutController@index');


/*
 * Articles routes
 */
//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles', 'ArticlesController@store');
//Route::get('articles/{id}/edit', 'ArticlesController@edit');
//Route::patch('articles/{id}', 'ArticlesController@update');
//Route::delete('articles/{id}', 'ArticlesController@destroy');

Route::resource('articles', 'ArticlesController');


/*
 * Datatables routes
 */
Route::get('articles2', 'Articles2Controller@index');
Route::get('articles2/anyData', 'Articles2Controller@anyData');


Route::resource('articles3', 'Article3Controller');


/*
 * Profile routes
 */
Route::get('profile', 'ProfileController@profile');
Route::get('password', 'ProfileController@password');
Route::patch('profile', 'ProfileController@update');
Route::patch('profile/change_password', 'ProfileController@change_password');


/*
 * Settings routes
 */
Route::get('settings', 'SettingsController@index');


/*
 * Users routes
 */
Route::get('users', 'UsersController@index');
Route::get('users/create', 'UsersController@create');
Route::get('users/{id}', 'UsersController@show');
Route::post('users', 'UsersController@store');
Route::get('users/{id}/edit', 'UsersController@edit');

Route::patch('users/{id}', 'UsersController@update');

Route::delete('users/{id}', 'UsersController@destroy');


Route::get('users/{id}/reset_password', 'UsersController@reset_password');
Route::patch('users/{id}/reset_password', 'UsersController@update_password');