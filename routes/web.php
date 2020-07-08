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

App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::get('/portfolio', 'ProjectController@index')->name('projects.index');//devuelve listado
Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');//create tiene q estar x arriba de show y store

Route::get('/portfolio/{id}/edit', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portfolio/{id}', 'ProjectController@update')->name('projects.update');//similar a @show pero cambia tipo PATCH

Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
Route::get('/portfolio/{id}', 'ProjectController@show')->name('projects.show');//devuelve un projecto x

Route::delete('/portfolio/{id}', 'ProjectController@destroy')->name('projects.destroy');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store')->name('messages.store');