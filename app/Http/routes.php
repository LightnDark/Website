<?php

use Illuminate\Routing\Router;

$router->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
$router->get('install', ['as' => 'install', 'uses' => 'FrontController@getInstallPage']);

$router->group(['prefix' => 'api', 'namespace' => 'Api'], function(Router $router)
{
    $router->post('subscribe', ['as' => 'subscribe', 'uses' => 'EmailController@subscribe']);
});

$router->controller('auth', 'AuthController');
$router->controller('password', 'PasswordController');
