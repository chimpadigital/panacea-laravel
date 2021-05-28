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
})->name('/');

Auth::routes();

Route::get('/home', function(){
	return redirect()->route('anuncios.index');
})->name('home');

Route::get('/admin', function(){
	return redirect()->route('anuncios.index');
})->name('admin');

Route::get('/register', function(){
	return redirect()->route('login');
})->name('register');

Route::post('/register', function(){
	return redirect()->route('login');
});

Route::get('/hotel','AdController@ad')->name('hotel');

Route::get('/habitaciones',function(){
	return view('habitaciones');
})->name('habitaciones');

Route::get('/superior','AdController@adSuperior')->name('superior');

Route::get('/estandar','AdController@adEstandar')->name('estandar');

Route::post('contacto','ContactController@contact')->name('contact');

Route::post('reserva','ContactController@reserva')->name('reserva');

Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('/anuncios','AdController');

});