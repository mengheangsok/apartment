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

Route::prefix('/welcome')->group(function(){
	
	Route::get('/{id}', function () {
	    return view('welcome');
	})->name('welcomePage');

	Route::post('/create', function () {
	    return view('welcome');
	})->name('welcomePage');

});


Route::get('/room','RoomController@list');


Route::post('/', function () {
    return view('welcome');
});


