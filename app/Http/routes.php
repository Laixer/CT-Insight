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

use App\User;

Route::get('/login', function () {
	$user_object = Socialite::driver('calculatietool')->user();

	if (!$user_object)
		abort(500);

	if (!$user_object->issuperuser)
		abort(401);

	Auth::login(User::createIfNotExist($user_object));

	return redirect('/');
})->middleware('guest');

Route::get('/maint', function () {
	$arr = [];

	InternalMaintenance::request()->get('user', function ($user) use (&$arr) {
 		array_push($arr, $user);
 	});

	return response()->json($arr);
});

Route::group(['middleware' => 'auth'], function() {
	Route::get('/', function () {
		return view('welcome');
	});
});
