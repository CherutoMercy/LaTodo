<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

     Route::auth();

//Task Routes

    Route::get('/tasks', 'TaskController@index');
    Route::get('/listtasks', 'TaskController@tasks');
    Route::post('/task', 'TaskController@store');
    Route::get('/edittasks/{id}', 'TaskController@edit');
    Route::post('/updatetask', 'TaskController@update');
    Route::delete('/task/{task}', 'TaskController@destroy');

//Setting Routes
    Route::get('/setting', 'TaskController@editsettings');
    Route::post('/setting', 'TaskController@updatesettings');

   

});
