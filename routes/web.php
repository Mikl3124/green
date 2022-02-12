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


Route::get('/', 'HomeController@home')->name('home');

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
  Route::get('/pricing', 'DashboardController@pricing')->name('pricing');
  //Projet
  Route::post('/administratif-create', 'ProjetController@createAdministratif')->name('administratif.create');
  Route::post('/projet-create', 'ProjetController@create')->name('projet.create');
  Route::get('/projets-list', 'ProjetController@index')->name('projets-list');
  Route::get('/projet-show/{id}', 'ProjetController@show')->name('projet.show');
  Route::get('/change-pack/{id}', 'ProjetController@choice_pack')->name('projet.choice_pack');
  Route::post('/change-pack/', 'ProjetController@change_pack')->name('projet.change_pack');
  Route::post('/projet-delete/{id}', 'ProjetController@delete')->name('projet.delete');
  Route::post('/projet-rename', 'ProjetController@rename')->name('projet.rename');

    //Surface
    Route::get('/surface/{id}', 'SurfaceController@create')->name('surface.create');
    Route::post('/surface-store', 'SurfaceController@store')->name('surface.store');
});
