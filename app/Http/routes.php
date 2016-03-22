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
Route::get('/', function(){
    return redirect('/docs');
});

Route::get('/api', function(){
    return redirect('/docs');
});

Route::get('/docs', function(){
    return view('api.docs.index');
});

Route::group(['prefix' => 'api'], function(){
    Route::group(['prefix' => 'user'], function(){

        Route::get('', "UserController@allUsers");

        Route::get('{id}', "UserController@getUser");

        Route::post('', "UserController@saveUser");

        Route::put('{id}', "UserController@updateUser");

        Route::delete('{id}', "UserController@deleteUser");
    });
});

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
    //
});
