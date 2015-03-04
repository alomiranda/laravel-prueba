<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('hello/{usuario}', function($usuario)
{
    return "Hello $usuario";
});

Route::get('user/edit/{id}', function($id)
{
    return "You are editing the user with the ID #$id";
})
->where('id', '[0-9]+');


Route::get('template/{name}', function ($name) {
   $name = ucwords(str_replace('-', ' ', $name));
   return View::make('template')->with('name', $name); 
});

Route::resource('admin/users', 'UsersController');

//Route::resource('admin', 'UserController');

