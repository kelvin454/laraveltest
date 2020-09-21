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
Route::get('/app',function(){
    return view('layouts.app');
});
Route::get('/admin',function(){
    return view('layouts.admin');
});
Route::get('/loginteacher',function(){
    return view('layouts.loginteacher');
});


Route::get('/signupteacher',function(){
    return view('layouts.signupteacher');
});
Route::resource('/','homepagescontroller');
Route::get('/insertresults',function(){
    return view('layouts.insertresults');
});
Route::resource('teacher','teachercontroller');
Route::resource('dashboard','dashboardcontroller');
Route::resource('formone','formone');
Route::resource('formtwo','formtwo');
Route::resource('formthree','formthree');
Route::resource('formfour','formfour');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
