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
    return view('layout');
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/award','iaburcontroller@award');
Route::get('/team','iaburcontroller@team');
Route::get('/group','iaburcontroller@group');
Route::get('/player','iaburcontroller@player');
Route::get('/squad','iaburcontroller@squad');
Route::get('/russia','squadcontroller@russia');
Route::get('/portugal','squadcontroller@portugal');
Route::get('/fixture','iaburcontroller@fixture');
Route::get('/result','iaburcontroller@result');
Route::get('/point_table','iaburcontroller@point_table');
Route::get('/stadium','iaburcontroller@stadium');
Route::get('/news','iaburcontroller@news');
Route::get('/livestreaming','iaburcontroller@livestreaming');
Route::post('/save_comment','iaburcontroller@save_comment');





