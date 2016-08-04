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
	Route::get('/blank', function () {
		return view('blank');
	});

	Route::get('/sync', function () {
		return view('sync');
	});

	Route::get('/imports', function () {
		return view('imports', [
			'all_imports' => Stats::orderBy('created_at', 'desc')->get(),
			'last_update' => Stats::orderBy('created_at', 'desc')->first(),
		]);
	});

	/*Route::get('/query', function () {
		return view('query', [
			'all_imports' => Stats::orderBy('created_at', 'desc')->get(),
			'last_update' => Stats::orderBy('created_at', 'desc')->first(),
		]);
	});*/

	Route::get('/', function () {
		return view('main', [
			'top_users' => RemoteappUser::orderBy('id', 'desc')->limit(5)->get(),
			'last_update' => Stats::orderBy('created_at', 'desc')->first(),
		]);
	});

	Route::get('/users', function () {
		return view('users', [
			'all_users' => RemoteappUser::all(),
			'last_update' => Stats::orderBy('created_at', 'desc')->first(),
		]);
	});

	Route::get('/projects', function () {
		return view('projects', [
			'all_projects' => RemoteappProject::all(),
			'last_update' => Stats::orderBy('created_at', 'desc')->first(),
		]);
	});

	Route::get('/logout', function () {
		Auth::logout();

		return redirect('/reauth');
	});

	Route::group(['prefix' => 'rest'], function() {
	
		Route::get('/sync', function () {
			$exitCode = Artisan::call('import');
			return response()->json(['success' => true, 'code' => $exitCode]);
		});

		Route::get('/counters', function () {
			$users = [];
			$projects = [];
			$offers = [];
			$invoices = [];

			foreach (Stats::orderBy('created_at')->get() as $row) {
				array_push($users, [strtotime($row->created_at)*1000, $row->user_count]);
				array_push($projects, [strtotime($row->created_at)*1000, $row->project_count]);
				array_push($offers, [strtotime($row->created_at)*1000, $row->offer_count]);
				array_push($invoices, [strtotime($row->created_at)*1000, $row->invoice_count]);
			}

			return response()->json(['success' => true, 'users' => $users, 'projects' => $projects, 'offers' => $offers, 'invoices' => $invoices]);
		});

		Route::get('/users_active', function () {
			$list = \DB::table('remoteapp_users')
				->selectRaw('active, count(id) as total')
				->groupBy('active')
				->lists('total', 'active');

			$data = [
				["value" => $list[0], "color" => "rgba(27, 184, 152,0.9)", "highlight" => "rgba(27, 184, 152,1)", "label" => "Inactive"],
				["value" => $list[1], "color" => "rgba(97, 103, 116,0.9)", "highlight" => "rgba(97, 103, 116,1)", "label" => "Active"]
			];

			return response()->json(['success' => true, 'data' => $data]);
		});

	});
});
