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

Auth::routes();

Route::group(['middleware'=>['web','auth']], function(){
	Route::get('/', function () {
	    if(Auth::user()->user_role=="customer"){
			return view('CustomerHome.view');
		}
		if(Auth::user()->user_role=="admin"){
			$users['users'] = \App\users::all();
			return view('admin_landing_page',$users);
		}
		if(Auth::user()->user_role=="supervisor"){
			return view('StaffHome.view');
		}} );

	Route::get('/home', function () {
	    if(Auth::user()->user_role=="customer"){
			return view('CustomerHome.view');
		}
		if(Auth::user()->user_role=="admin"){
			$users['users'] = \App\users::all();
			return view('admin_landing_page',$users);
		}
		if(Auth::user()->user_role=="supervisor"){
			return view('StaffHome.view');
		}} );

});


Route::resource('users','UserController');

Route::get('users.create','UserController@index');
Route::get('users.edit','ManageUserController@edit');

Route::get('Department.view','DepartmentController@index');

Route::post('ManageUser.manageUser','ManageUserController@edit');
Route::post('ManageUser.manageUser','ManageUserController@destroy');

Route::post('users.create','UserController@store')->name('users.store');

Route::get('ManageUser.manageUser','ManageUserController@index');
Route::post('ManageUser.manageUser','ManageUserController@store')->name('manageUser.store');


Route::get('check_in.view','CheckController@index');
Route::post('check_in.view','CheckController@store')->name('check.store');

Route::get('/forgot_password', 'ForgotPassword@forgot');
Route::post('/forgot_password', 'ForgotPassword@password');