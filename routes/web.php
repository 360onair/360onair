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


/*Route::get('/projecten', 'ProjectController@index');
Route::get('/projecten/{project}', 'ProjectController@show');
Route::post('/form/contact', 'FormController@contact');
*/

Route::get('create-category', 'CategoryController@create');
Route::post('create-category', 'CategoryController@store');


Route::get('/projecten', 'ProjectController@index');
Route::get('/projecten/{slug}', 'ProjectController@show')->name('projects.show');

Route::get('/', function () {
    return view('templates.home');
});

Route::get('/over-360onair', function () {
    return view('templates.about');
});

Route::get('/tarieven', function () {
    return view('templates.pricing');
});

Route::get('/privacyverklaring', function () {
    return view('templates.privacy');
});

Route::get('/disclaimer', function () {
    return view('templates.disclaimer');
});

Route::get('/contact', function () {
    return view('templates.contact');
});
/*
Route::post('project-create', ['as'=>'projects.single','uses'=>'ProjectController@create']);
*/

/* Route::get('/projecten/{slug}', ['as' => 'projects.single', 'uses' => 'ProjectController@getSingle'])->where('slug', '[\w\d\-\_]+'); */

/*
Route::get('/projecten/{id}', function ($id) {
    $slug = DB::table('projects')->where('slug', $slug)->get();
}); 
*/


