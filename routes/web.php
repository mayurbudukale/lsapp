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

Route::get('/hello', function () {
    //return view('welcome');
    return 'Hello World';
});

Route::get('/about', function(){
    return view ('pages.about');
});

Route::get('/user/{name}/{id}', function($name,$id){
    return 'This is a user '.$name.'and user id ' .$id; 
});

*/
//Route::get('/about', function(){
  //  return view('pages.about');
//});

//Route::get('/user/{id}', function($id){
   // return 'This is user '. $id;
//});

//Route::get('/user/{id}', function($id){
 //return 'This is user '. $id;
//});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/login', 'PagesController@login');
Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
