<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$basePath = file_exists(__DIR__.'/../compro-ptcpl')
    ? __DIR__.'/../compro-ptcpl'
    : __DIR__.'/..';

// Maintenance mode
if (file_exists($maintenance = $basePath.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload
require $basePath.'/vendor/autoload.php';

// Bootstrap Laravel
(require_once $basePath.'/bootstrap/app.php')
    ->handleRequest(Request::capture());
