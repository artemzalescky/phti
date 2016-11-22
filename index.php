<?php

define('BASE_PATH', __DIR__ . '/');

require_once './environment.php';
require_once './ph/autoload/autoload-register.php';

$app = new \ph\Application();
$app->run();
