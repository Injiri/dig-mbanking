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
/*
Route::get('/', function () {
    return view('welcome');
});*/

/* grabbing users dynamicaly
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'this userwith id '.$id .' and name'.$name;  
});
   
Route::get('/depositcash', function () {
    return view('pages.depositcash');  
});
*/
Route::get('/','PagesController@index');
Route::get('/depositcash', 'PagesController@depositcash');
Route::get('/services','PagesController@services');

Route::resource('posts', 'PostsController');
Route::resource('mbanking','DepositesController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
