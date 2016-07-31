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
use App\Stats;
use App\RemoteappUser;
use App\RemoteappProject;

Route::get('/login', function () {
	$user_object = Socialite::driver('calculatietool')->user();

	if (!$user_object)
		abort(500);

	if (!$user_object->issuperuser)
		abort(401);

	Auth::login(User::createIfNotExist($user_object));

	return redirect('/');
})->middleware('guest');

Route::get('/reauth', function () {
	return view('reauth');
})->middleware('guest');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/blank', function () {
		return view('blank');
	});

	Route::get('/sync', function () {

		$exitCode = Artisan::call('import');

		return view('sync');
	});

	Route::get('/board', function () {
		return view('main', [
			'total_users' => RemoteappUser::count(),
			'total_projects' => RemoteappProject::count(),
			'top_users' => RemoteappUser::orderBy('id', 'desc')->limit(5)->get(),
			'last_update' => Stats::orderBy('created_at', 'desc')->first(),
		]);
	});

	Route::get('/table', function () {
		return view('table', [
			'all_users' => RemoteappUser::all(),
			// 'total_projects' => RemoteappProject::count(),
		]);
	});

	Route::get('/logout', function () {
		Auth::logout();

		return redirect('/reauth');
	});
});
