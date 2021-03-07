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

// $router->group(['middleware' => 'client.credentials'], function () use ($router) {

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/users1', 'User1Controller@index');
$router->post('/users1', 'User1Controller@add'); //add
$router->get('/users1/{id}', 'User1Controller@show'); // get user by id
$router->put('/users1/{id}','User1Controller@update'); // update user record
$router->delete('/users1/{id}', 'User1Controller@delete'); //delete record


$router->get('/users2', 'User2Controller@index');
$router->post('/users2', 'User2Controller@add'); //add
$router->get('/users2/{id}', 'User2Controller@show'); // get user by id
$router->put('/users2/{id}','User2Controller@update'); // update user record
$router->delete('/users2/{id}', 'User2Controller@delete'); //delete record

// });