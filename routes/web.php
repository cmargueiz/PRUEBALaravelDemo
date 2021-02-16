<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/login','Auth\LoginController@showLoginForm')->name('login');

// Route::post( 'login', 'Auth\LoginController@login' );

// Route::get( '/', 'twUsuariosController@LoginForm' )->name( 'login' );
// Route::post( 'login', 'twUsuariosController@loginPost' )->name( 'login_post' );
// Route::get( 'logout', 'twUsuariosController@logoutGet' )->name( 'logout' );
// Route::post( 'logout', 'twUsuariosController@logoutPost' )->name( 'logout_post' );

