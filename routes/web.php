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
/*pasarle parametro
Route::get('contactos/{nombre?}', function ($nombre="Invitados") {
	return "contactos " . $nombre;
    //return view('welcome');
})->name('contactos');*/

/*Route::get('/', function () {
	$nombre = "Jorge";
    return view('home', compact('nombre'));
})->name('home');*/

App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessagesController@store')->name('contact');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

//Route::resource('projects', 'PortfolioController');
//Route::resource('projects', 'PortfolioController')->only(['index','show']);
//Route::resource('projects', 'PortfolioController')->except(['index','show']);


