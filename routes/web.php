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
})->name('welcomePage');


Route::prefix('/welcome')->group(function(){
	
	Route::get('/{id}', function () {
	    return view('welcome');
	})->name('welcomePage');

	Route::post('/create', function () {
	    return view('welcome');
	})->name('welcomePage');

});

Route::post('/logintest','LoginController@authenticate')->name('logintest');

Route::middleware(['auth'])->group(function () {

Route::get('/room','RoomController@list');
Route::get('/room/create','RoomController@create');
Route::post('/room/store','RoomController@store');
Route::get('/room/edit/{id}','RoomController@edit');
Route::patch('/room/update/{id}','RoomController@update');
Route::delete('/room/delete/{id}','RoomController@delete');

Route::resource('/category','CategoryController');
Route::resource('/user','UserController');
Route::resource('/rent','RentController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
