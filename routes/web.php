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
Route::get('/', function(){

	echo "welcome";
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::get('/home', ['uses'=>'HomeController@index']);
//Route::get('/admin/userList', 'StudentController@index')->name('student.index');

Route::get('/student/userList', ['as'=>'student.index','uses'=>'StudentController@index']);
Route::get('/student/details/{id}', 'StudentController@details')->name('student.details');

Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::post('/student/edit/{id}', 'StudentController@update')->name('student.update');

Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');
Route::post('/student/delete/{id}', 'StudentController@destroy')->name('student.destroy');

Route::get('/student/add', 'StudentController@add')->name('student.add');
Route::post('/student/add', 'StudentController@insert');

*/



Route::get('/', function(){

	echo "welcome";
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', ['as'=>'home.index','uses'=>'HomeController@index']);
	Route::get('/student/userList', ['as'=>'student.index','uses'=>'StudentController@index']);	

	


	Route::get('/student/details/{id}', 'StudentController@details')->name('student.details');

	Route::group(['middleware'=>['type']], function(){
/*

			Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
			Route::post('/student/edit/{id}', 'StudentController@update')->name('student.update');
			Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');
			Route::post('/student/delete/{id}', 'StudentController@destroy')->name('student.destroy');
			Route::get('/student/add', 'StudentController@add')->name('student.add');
			Route::post('/student/add', 'StudentController@insert');

			Route::resource('/account', 'AccountController');*/
	//});	
//});



			/////employer

			Route::get('/employer/employerList', ['as'=>'employer.index','uses'=>'employerController@index']);	
            Route::get('/employer/details/{id}', 'employerController@details')->name('employer.details');

			Route::get('/employer/add', 'employerController@add')->name('employer.add');
			Route::post('/employer/add', 'employerController@insert');



            Route::get('/employer/edit/{id}', 'employerController@edit')->name('employer.edit');
			Route::post('/employer/edit/{id}', 'employerController@update')->name('employer.update');

			Route::get('/employer/delete/{id}', 'employerController@delete')->name('employer.delete');
			Route::post('/employer/delete/{id}', 'employerController@destroy')->name('employer.destroy');




//////////////job/////////////


				Route::get('/job/jobList', ['as'=>'job.index','uses'=>'jobController@index']);	
            Route::get('/job/details/{id}', 'jobController@details')->name('job.details');

			Route::get('/job/add', 'jobController@add')->name('job.add');
			Route::post('/job/add', 'jobController@insert');



            Route::get('/job/edit/{id}', 'jobController@edit')->name('job.edit');
			Route::post('/job/edit/{id}', 'jobController@update')->name('job.update');

			Route::get('/job/delete/{id}', 'jobController@delete')->name('job.delete');
			Route::post('/job/delete/{id}', 'jobController@destroy')->name('job.destroy');
			

});
	});