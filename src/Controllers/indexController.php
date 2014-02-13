<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

$controller = $app['controllers_factory'];

$controller->get('/', function () use ($app) {
	return $app['twig']->render('index.twig');
})
->bind('homepage');

return $controller;