<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', function()
{
    if (Auth::check()) return 'Welcome back, '. Auth::user()->username;

    return 'Hi Guest. ' . link_to('login', 'Login to reddit');
});

$router->get('interface', function(){
    $data = [
        'route' => 'home'
    ];
    return View::make('homepage', compact('data'));
});

$router->get('login', 'AuthController@login');

App::bind('Searcher\Repositories\AuthoriserInterface', 'Searcher\Repositories\FakeRedditAuthoriser');

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

//$router->controller('auth', 'AuthController');
//
//$router->controller('password', 'PasswordController');
