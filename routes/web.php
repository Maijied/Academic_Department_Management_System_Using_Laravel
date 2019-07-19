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
    return view('auth.login');
});



Auth::routes();
Route::group(['middleware' => 'auth'], function(){

Route::get('/admin', function () {
	if (Auth::user()->admin == 1) {
		return view('admin.admin');
	}
    return view('posts.display');
}); 

Route::get('/assignteacher', function () {
	if (Auth::user()->admin == 1) {
		return view('teacher.assignteacher');
	}
    return view('posts.display');
});

Route::post('/assignteacher','HomeController@assignteacher');
Route::get('/removeassignteacher/{userid}/{categoryid}','HomeController@removeassignteacher');
Route::get('/teacher', function () {
    return view('teacher.teacher');
});
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/post', 'PostController@post');
Route::get('/viewpost/{posttitle}', 'PostController@viewpost');

Route::get('/approveteacher/{id}', 'HomeController@approveteacher');
Route::get('/removeteacher/{id}', 'HomeController@removeteacher');
Route::get('/removepost/{id}', 'HomeController@removepost');
Route::get('/approvepost/{id}', 'HomeController@approvepost');

Route::get('/manageposts', function () {
	if (Auth::user()->admin == 1) {
		return view('posts.manageposts');
	}
    return view('posts.display');
});

Route::get('/profile', 'ProfileController@profile');

Route::get('/category', 'CategoryController@category');

Route::post('/addCategory', 'CategoryController@addCategory');

Route::post('/addProfile', 'ProfileController@addProfile');

Route::post('/addPost', 'PostController@addPost');

Route::get('/view/{id}', 'PostController@view');

// Route::get('/edit/{id}', 'PostController@edit');



});
Route::get('/display', function () {
    return view('posts.display');
});

