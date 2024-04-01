<?php

use App\Http\Controllers\MountainController;

$router->get('/mountains', 'MountainController@index');
$router->get('/mountains/{id}', 'MountainController@show');