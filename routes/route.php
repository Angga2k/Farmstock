<?php 

$routes = [];

$routes['GET']['/'] = 'DashboardController@index';
$routes['GET']['/pupuk'] = 'PupukController@index';
$routes['POST']['/pupuk'] = 'PupukController@create';
$routes['GET']['/pupukupdate/{id}'] = 'PupukController@formupdate';
$routes['POST']['/updatepupuk/{id}'] = 'PupukController@update';
$routes['GET']['/deletepupuk/{id}'] = 'PupukController@delete';
?>