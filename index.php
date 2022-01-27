<?php
define('BASEPATH', true);

require 'system/config.php';
require 'system/core/autoload.php';

error_reporting(ERROR_REPORTING_LEVEL);

$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

if(!CoreHelper::validateController($controller))
  $controller = 'ErrorPage';

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";

$controller .= 'Controller';

if(!CoreHelper::validateMethodController($controller, $method))
  $method = 'exec';

$controller = new $controller;

$controller->$method($param);