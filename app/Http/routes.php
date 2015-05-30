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

get('/', [
    'as'   => 'home',
    'uses' => 'PagesController@home'
]);


get('404', [
    'as'   => '404',
    'uses' => 'PagesController@page404'
]);


get('team', [
    'as'   => 'team',
    'uses' => 'PagesController@team'
]);


get('contact', [
    'as'   => 'contact',
    'uses' => 'PagesController@contact'
]);


get('about', [
    'as'   => 'about',
    'uses' => 'PagesController@about'
]);


get('blog', [
    'as'   => 'blog',
    'uses' => 'BlogController@index'
]);


get('blog/detail/{slug}', [
    'as'   => 'blogDetail',
    'uses' => 'BlogController@detail'
]);


//get('/', 'WelcomeController@index');
//
//get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
