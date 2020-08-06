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

// Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@register');

Route::get('/welcome', 'AuthController@welcome');

Route::post('/welcome', 'AuthController@welcome_post');

Route::get('/', function () {
    return view('adminlte.welcome');
});

Route::get('/data-tables', function () {
    return view('adminlte.data-tables');
});

Route::get('/master', function(){
    return view('adminlte/master');
});

Route::get('/items', function(){
    return view('items.index');
});

Route::get('/items/create', function(){
    return view('items.create');
});
//Route ::get('/master', function(){
//     return view('master');
// });