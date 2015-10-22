<?php

use Illuminate\Routing\Router;
use Orchestra\Services\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Frontend Routing
|--------------------------------------------------------------------------
*/

Foundation::group('blupl/services', 'services', ['namespace' => 'Blupl\Services\Http\Controllers'], function (Router $router) {

        $router->get('create', 'ServicesController@create');
});

/*
|--------------------------------------------------------------------------
| Backend Routing
|--------------------------------------------------------------------------
*/

Foundation::namespaced('Blupl\Services\Http\Controllers\Admin', function (Router $router) {
    $router->group(['prefix' => 'services'], function (Router $router) {
        $router->get('/', 'HomeController@index');
        $router->match(['GET', 'HEAD', 'DELETE'], 'profile/{roles}/delete', 'HomeController@delete');

    });
});
