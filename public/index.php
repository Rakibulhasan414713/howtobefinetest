<?php
session_start();

require_once __DIR__ . '/../app/config/config.php';
require_once APP_ROOT . '/core/Autoload.php';

$router = new Router();


$router->post('/login', function () { (new AuthController())->adminLoginPost(); });
$router->post('/userlogincheck', function () { (new AuthController())->userLoginPost(); });
$router->post('/usersignup', function () { (new AuthController())->userSignupPost(); });
$router->post('/adminsignup', function () { (new AuthController())->adminSignupPost(); });


$router->post('/login', function () { (new AuthController())->adminLoginPost(); });

$router->dispatch();
