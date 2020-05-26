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
    return view('wel');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/edit', 'EditController@index')->name('edit');
Route::post('update/user/{id}', 'EditController@update');
//Route::get('/edit/{id}', 'EditController@index')->name('edit');
//Route::get('edit/product/{id}', 'EditController@Edit');
//Route::get('/edit/{id}', ['as'=>'edit','uses'=>'EditController@edit']);
//Route::post('/profile/edit/{id}', 'EditController@update');

Route::get('/up', 'UpController@index')->name('up');
Route::post('/upload', 'UpController@uploadimg')->name('upload');

Route::get('/reservation', 'ReservationController@index')->name('reservation');
Route::post('/resrve', 'ReservationController@send')->name('reservation.post');
Route::post('/send', 'ContactController@sendMessage')->name('contact.send');



Route::get('/reservationhistory', 'ReservationhistoryController@index')->name('reservationhistory');

Route::get('delete/product/{id}', 'ReservationhistoryController@Delete');


/*
Route::post('/upload', function (){

	dd(request()->image->store('images','public'));
	
});



Route::post('/upload', function (Request $request){
	$request->image->store('images');
	return 'uploded';
});*/