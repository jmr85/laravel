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

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/{id}', 'PortfolioController@show')->name('portfolio.show');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessagesController@store')->name('contact');