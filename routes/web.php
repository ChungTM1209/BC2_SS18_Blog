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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::group(['prefix'=>'blogs'],function(){
    Route::get('/','BlogController@index')->name('list');
    Route::get('/create','BlogController@add')->name('create');
    Route::post('/create','BlogController@store')->name('store');
    Route::get('/{id}/show','BlogController@show')->name('show');
    Route::get('/{id}/edit','BlogController@edit')->name('edit');
    Route::post('/{id}/edit','BlogController@update')->name('update');
    Route::get('/{id}/delete','BlogController@delete')->name('delete');
});