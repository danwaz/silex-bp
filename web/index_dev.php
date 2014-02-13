<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/app.php';

// enable the debug mode
$app['debug'] = true;

//Enable Logging
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../logs/silex_dev.log',
));

$app->run();