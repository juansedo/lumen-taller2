<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => '/api/v1'], function () use ($router) {
    $router->get('/pokeneas', [
        'as' => 'findAll', 'uses' => 'PokeneaController@findAll'
    ]);
    $router->get('/pokeneas/random', [
        'as' => 'getRandom', 'uses' => 'PokeneaController@getRandom'
    ]);
    $router->get('/pokeneas/{id}', [
        'as' => 'find', 'uses' => 'PokeneaController@find'
    ]);
});

$router->get('/pokeneas/random', [
    'as' => 'getRandomWithView', 'uses' => 'PokeneaController@getRandomWithView'
]);
