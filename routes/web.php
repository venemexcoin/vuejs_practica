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

Route::get('/', function () {
    return view('index');
});

Route::get('/prueba', function () {
    return view('grid.video1.prueba');
});

Route::get('/video16', function () {
    return view('grid.video16.index');
});

Route::get('/video2', function () {
    return view('web\javascript');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gallery', 'Web\PageController@gallery')->name('gallery');

Route::get('/idea', 'Web\PageController@idea')->name('idea');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('galeria',   'GaleriaController');

    // Roles

    Route::resource('roles',   'RoleController');

    Route::resource('products',   'ProductController');

    Route::resource('users',   'UsersController');

    Route::get('mis-ideas', 'IdeaController@getIdeas');

    Route::post('guardar-idea', 'IdeaController@store');
});
