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

Route::get('/', function () {
	if (Auth::guest()) {
		return Socialite::with('calculatietool')->redirect();
	} else {
		return view('welcome');
	}
});

Route::get('/login', function () {
	$user_object = Socialite::driver('calculatietool')->user();

	if (!$user_object)
		abort(500);

	Auth::login(User::createIfNotExist($user_object), true);

	return redirect('/');
})->middleware('guest');
