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

/** 
 * Essas tags vem de resources e busca pelo nome do arquivo
*/
Route::get('/test', function () {
    return view('tags');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tags', 'HomeController@index')->name('tags');
