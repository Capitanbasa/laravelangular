<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/auth',function(){
    if(!Auth::check()){
        $user = App\User::find(1);
        Auth::login($user);
    }
    return Auth::user();
});

Route::get('/home', 'HomeController@index');
