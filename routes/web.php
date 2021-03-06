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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'disease', 'middleware' => 'auth'], function () {
    Route::get('/', 'DiseaseController@index')->name("disease");
    Route::get('/last','DiseaseController@last');
    Route::get('/first','DiseaseController@first');
});


Route::get('/test',function(){
    $t = App\User::all();
    $m = $t[0]->diseases()->get();
    dd($m[0]->name);
});


