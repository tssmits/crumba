<?php

namespace crumba;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/crumba.php';
require_once __DIR__ . '/data.php';

class MyApplication extends \Silex\Application {
  use \Silex\Application\TwigTrait;
}

$app = new MyApplication();

// Register the monolog logging service
$app->register(new \Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register Twig.
$app->register(new \Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app = new MyApplication();

$app->get('/', function () use ($app) {
  return 'Hello, World!';
});

$crumba = new Crumba();
