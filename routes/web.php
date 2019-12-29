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
    return view('layouts.master');
});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('Catégories','CategorieController');
Route::get('/Catégories','CategorieController@index');
Route::post('/Catégories','CategorieController@store');
Route::get('Catégories/{id}/edit','CategorieController@edit');
Route::get('Catégories/create','CategorieController@create');
Route::put('Catégories/{id}','CategorieController@update');
Route::get('Catégories/{id}','CategorieController@show');
Route::delete('Catégories/{id}/destroy','CategorieController@destroy');

//Route::resource('Courses','CourseController');
Route::get('/Courses','CourseController@index');
Route::post('/Courses','CourseController@store');
Route::get('Courses/{id}/edit','CourseController@edit');
Route::get('Courses/create','CourseController@create');
Route::put('Courses/{id}','CourseController@update');
Route::get('Courses/{id}','CourseController@show');
Route::delete('Courses/{id}/destroy','CourseController@destroy');

//Route Lang
Route::get('locale/{locale}',function($locale){
  Session::put('locale',$locale);
  return redirect()->back();
  /*This Link will add session of language when they click to change language*/
});