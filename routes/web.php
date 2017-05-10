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
    return view('home.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('submit-login',['as'=>'submit-login','uses'=>'UserController@login']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('review-feedback', function(){
    return view('review_feedback');
});

Route::get('lecturer-view',function(){
  
   return view('lecturerView',compact('tab'));
});

Route::get('submit-assignment', function(){
    return view('submit_assignment');
});


Route::get('create-assignment', function(){
    return view('Assignment.create_assignment');
});

Route::get('/{id}',['as'=>'course','uses' => 'CourseController@getCourse']);

 