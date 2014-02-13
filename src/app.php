<?php

/* Initialize new Silex App */
$app = new Silex\Application();

/* Mount Controllers */
$app->mount('/', include 'Controllers/indexController.php');

/* Config */
$app->register(new Igorw\Silex\ConfigServiceProvider(__DIR__."/../config/config.json", array('base_path' =>  realpath(__DIR__ . '/..'))));

/* Propel */
$app['propel.config_file'] = __DIR__.'/../db/conf/propel-conf.php';
$app['propel.model_path']  = __DIR__.'/../db/classes/';
$app->register(new Propel\Silex\PropelServiceProvider());

/* Register Url Generator */
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

/* Register Twig */
$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__.'/../templates',
));

return $app;