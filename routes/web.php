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
});

Route::get('/create','FicheController@create')->name('fiche_create');
Route::post('/create','FicheController@store')->name('fiche_store');
Route::get('/index','FicheController@index')->name('fiche_index');
Route::get('/edit/{id}','FicheController@edit')->name('edit_list');
Route::patch('/edit/{id}','FicheController@update')->name('fiche_update');
Route::delete('/delete/{id}', 'FicheController@destroy')->name('fiche_destroy');
