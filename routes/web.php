<?php

Route::get('/', function () {
    return view('welcome');
});
Route::resource('contacts', 'ContactController');
Route::resource('opportunities', 'OpportunityController');
Route::resource('tasks', 'TasksController');
Route::resource('documents', 'DocumentsController');
Route::get('/projects/create/{id}/', [
	'uses' =>'ProjectsController@createProject',
	'as'=>'projects.create'
]);
Route::get('/projects/store', [
	'uses' =>'ProjectsController@store',
	'as'=>'projects.store'
]);