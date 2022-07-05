<?php

namespace App;

use ReflectionException;
use Steodec\SteoFrameWork\Routers\Main;
use Steodec\SteoFrameWork\Routers\RouterException;

require_once 'vendor/autoload.php';

try {
    $application = new Main("App\\controllers");
    $application->run();
} catch (ReflectionException|RouterException $e) {
    error_log($e->getMessage());
}