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

use App\Project;


Route::get('/projecten', function () {

	$projects = Project::all();
	
	// $task = DB::table('projects')->latest()->get();


    return view('projects.index', compact('projects'));
});


Route::get('/projecten/{slug}', function ($slug) {

	$slug = DB::table('projects')->where('slug', $slug)->get();

    return view('projects.show', compact('project'));

});


Route::get('/about', function () {
    return view('about');
});
