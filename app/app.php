<?php

namespace crumba;

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/crumba.php';
require_once __DIR__ . '/data.php';

// $dotenv = new \Dotenv\Dotenv(__DIR__ . '/../');
// $dotenv->load();

class MyApplication extends \Silex\Application {
  use \Silex\Application\TwigTrait;
}

$app = new MyApplication;
$app['debug'] = true;

// Register the monolog logging service
$app->register(new \Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register Twig.
$app->register(new \Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views'
));

$app = new MyApplication();

$app->get('/', function () use ($app) {
  // return 'derp';
  // return $app->render('html.twig');
  // return $app['twig']->render('html.twig');
});

$crumba = new Crumba();
