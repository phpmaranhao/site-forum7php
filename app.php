<?php

require 'vendor/autoload.php';

use Silex\Application;

$app = new Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => 'views/']);
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new ForumPHPMA\Provider\RouterServiceProvider());
$app->register(new ForumPHPMA\Provider\ControllerServiceProvider());

return $app;