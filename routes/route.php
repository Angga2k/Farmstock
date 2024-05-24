<?php 

    $routes = [];

    $routes['GET']['/'] = 'AuthController@viewlogin';
    $routes['GET']['/dashboard'] = 'DashboardController@index';
    $routes['GET']['/pupuk'] = 'PupukController@index';
    $routes['POST']['/pupuk'] = 'PupukController@create';
    $routes['GET']['/pupukupdate/{id}'] = 'PupukController@formupdate';
    $routes['POST']['/updatepupuk/{id}'] = 'PupukController@update';
    $routes['GET']['/deletepupuk/{id}'] = 'PupukController@delete';
    $routes['GET']['/login'] = 'AuthController@viewlogin';
    $routes['GET']['/register'] = 'AuthController@viewregister';
    $routes['POST']['/login'] = 'AuthController@login';
    $routes['POST']['/register'] = 'AuthController@register';
    $routes['GET']['/logout'] = 'AuthController@logout';
?>