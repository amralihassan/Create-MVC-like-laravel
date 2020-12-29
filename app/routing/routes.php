<?php
$router = new AltoRouter();

$router->map('Get', '/eShop/public/about', 'App\controllers\IndexController@show', 'about_us');

