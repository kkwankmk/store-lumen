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
    return $router->app->version();
});

$router->get('/item', 'ItemController@index');
$router->post('/item', 'ItemController@store');
$router->get('/item/{id}', 'ItemController@show');
$router->put('/item/{id}', 'ItemController@update');
$router->delete('/item/{id}', 'ItemController@delete');
