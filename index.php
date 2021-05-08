<?php

require __DIR__ . '/vendor/autoload.php';

use Components\Application;
use Components\Renderer;
use Components\Router;
use Symfony\Component\Dotenv\Dotenv;

$environmentSettings = new Dotenv();
$environmentSettings->loadEnv(__DIR__ . '/.env');

$app = new Application();
$app->bootstrapApplication();
$app->processRequestedUri();
