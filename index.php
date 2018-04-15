<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\Debug\DebugClassLoader;
use Symfony\Component\Debug\ErrorHandler;

Debug::enable();
ExceptionHandler::register();
DebugClassLoader::enable();
ErrorHandler::register();

$router = new Gears\Router();
$router->routesPath = 'routes/routes.php';
$router->dispatch();









