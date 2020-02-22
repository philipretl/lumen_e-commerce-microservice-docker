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
    //return $router->app->version();
    return 'products_service';
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'v1'], function () use ($router) {

        //Rutas para los productos

        $router->group(['prefix' => '/products' ], function () use ($router) {
            $router->get('/', 'ProductController@index');
            $router->post('/', 'ProductController@store');

        });
    });

});
