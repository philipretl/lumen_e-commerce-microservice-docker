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
    return 'api_gateway';
});

$router->group(['prefix' => 'api'], function () use ($router) {

  $router->group(['prefix' => 'v1'], function () use ($router) {

    //Rutas para los productos

    $router->get('/', ['middleware' => ['auth', 'role_or_permission: productos'], function () use ($router) {
        return $router->app->version();
    }]);
    $router->group(['prefix' => '/productos','middleware' => ['auth', 'role_or_permission: productos'] ], function () use ($router) {
        $router->get('/', 'ProductosController@index');

    });
  });

});
