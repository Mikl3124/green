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
Route::group(['middleware' => ['auth']], function () {
  Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
  Route::get('/administratif', 'DashboardController@administratif')->name('administratif');
  Route::get('/enveloppe', 'DashboardController@enveloppe')->name('enveloppe');
  Route::get('/nouveau-projet', 'DashboardController@pricing')->name('pricing');
  //Projet
  Route::post('/administratif-create', 'ProjetController@createAdministratif')->name('administratif.create');
  Route::post('/projet-create', 'ProjetController@create')->name('projet.create');
  Route::get('/projets-list', 'ProjetController@index')->name('projets-list');
  Route::post('/projet-show', 'ProjetController@show')->name('projet.show');

});
