<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

// Prospects
Route::post('/prospect-create', 'ProspectController@create')->name('prospect-create');

// Administrateur
Route::group(['middleware' => ['auth', 'admin']], function () {
  Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
