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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/store', function () {
//     return view('store');
// });

Auth::routes();
// Route::get('/login', 'Auth\LoginController@showLoginForm' );
// Route::post('/login', 'Auth\LoginController@login');
// Route::post('/logout', 'Auth\LoginController@logout');

	// Authentication Routes...
    // $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
    // $this->post('login', 'Auth\LoginController@login');
    // $this->post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    // $this->get('registers', 'Auth\RegisterController@showRegistrationForm');
    // $this->post('registers', 'Auth\RegisterController@register');

    // Password Reset Routes...
    // $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    // $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    // $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    // $this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admpanel', 'HomeController@index')->name('admpanel');