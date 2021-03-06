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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
	Route::post('/record/add/', 'RecordController@store');
	Route::get('/add/student', 'StudentController@create');
	Route::post('/save/student', 'StudentController@store');
	Route::get('/edit/student/{id}', 'StudentController@edit');
	Route::get('/delete/student/{id}', 'StudentController@destroy');
	Route::get('/view/student/{id}', 'StudentController@show');
	Route::get('/update/student/{id}', 'StudentController@update');
	Route::get('/records/{id}', 'RecordController@allrecords');
	Route::get('/record/new/{id}', 'RecordController@addrecord');
	Route::get('/record/view/{id}', 'RecordController@show');
	Route::get('/record/edit/{id}', 'RecordController@edit');
	Route::get('/record/delete/{id}', 'RecordController@destroy');
	Route::post('/record/update/{id}', 'RecordController@update');
	Route::get('/record/comment/{id}', 'CommentController@addcomment');
	Route::get('/record/pdf/{id}-pdf', 'ExportController@exportdatatopdf');
	// Route::get('/record/pdf/{id}', function(){
	// 	$pdf = PDF::loadView('pdf.record');
	// 	return $pdf->download('record.pdf');
	// });

	Route::group(['middleware' => 'isAdmin'], function(){
		Route::get('/admin', 'AdminController@index');
		Route::get('/admin/{id}', 'AdminController@changerole');
		Route::get('/admin/create/relationship', 'AdminController@addRelationship');
		Route::get('/record/restore/{id}', 'RecordController@restore');
	});
	
});






