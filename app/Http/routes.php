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

//url: http://lumen.api.tff.com/user/get?aa=df
$app->group(['prefix' => 'user', 'namespace' =>  'App\Http\Controllers\User'], function() use ($app) {
    $app->get('/', function () use ($app) {
        return 'first api';
    });
    $app->get('get', "UserController@getInfo");
});
$app->get('/', function () use ($app) {
    return $app->version();
});
