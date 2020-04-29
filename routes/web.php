<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('app');
    //return $router->app->version();
});

// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
   // Matches "/api/register
   $router->post('register', 'AuthController@register');

   $router->post('login', 'AuthController@login');

   $router->group(['prefix' => 'post'], function ($router) {
      
      $router->post('create', 'PostController@store');
      $router->get('edit/{id}', 'PostController@edit');
      $router->post('update/{id}', 'PostController@update');
      $router->delete('delete/{id}', 'PostController@destroy');
      $router->get('all', 'PostController@index');
  });

});





