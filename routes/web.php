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

// Route::resource('/Teams/', 'TeamController');
// Route::resource('/Players/', 'PlayerController');

Route::get('Teams/', 'TeamController@index')->name('allTeams');
Route::get('Teams/{id}', 'TeamController@show');
Route::get('Players', 'PlayerController@index');
Route::get('Players/{id}', 'PlayerController@show');

Route::get('/register', 'RegisterController@create')->name('register');
Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/login', 'LoginController@create')->name('show-login');
Route::post('/login', 'LoginController@store')->name('login');

// Route::group(['middleware' => ['guest']], function (){

//     // Route::get('/register', 'RegisterController@create')->name('show-register');
//     Route::post('/register','RegisterController@store')->name('register');

// });


