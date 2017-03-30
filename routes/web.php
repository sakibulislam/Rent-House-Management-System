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

Route::get('/', 'MasterBladeController@index');

Route::get('/homeguest', ['as'=>'homeguest', 'uses'=>'HomeGuestController@index']);

Route::get('/about', ['as'=>'about', 'uses'=>'AboutController@index']);

Route::get('/house', ['as'=>'house', 'uses'=>'HouseController@index']);

Route::get('/services', ['as'=>'services', 'uses'=>'ServicesController@index']);

Route::get('/gallery', ['as'=>'gallery', 'uses'=>'GalleryController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/viewDetails', ['as'=>'viewhousedetails', 'uses'=>'HouseListController@index']);

Route::get('/galleryforuser', ['as'=>'galleryforuser', 'uses'=>'GalleryForUserController@index']);

Route::get('/viewhousedetailsforuser', ['as'=>'viewhousedetailsforuser', 'uses'=>'ViewHouseDetailsForUserController@index']);

Route::get('/updatehouse', ['as'=>'updatehouse', 'uses'=>'HouseUpdateController@index']);

Route::post('/updatehouse', ['as'=>'storehouse', 'uses'=>'HouseUpdateController@store']);

Route::get('/{id}/edithouse', ['as'=>'getedithouse', 'uses'=>'HouseUpdateController@edit']);

Route::post('/{id}/edithouse', ['as'=>'postedithouse', 'uses'=>'HouseUpdateController@update']);

Route::post('/delete', ['as'=>'deletehouse', 'uses'=>'HouseUpdateController@destroy']);







