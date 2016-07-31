<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
      'settings'=>[
        'displayErrorDetails' => true,
        'db'=>[
          'driver' =>'mysql',
          'host' => 'localhost:3306',
          'database' => 'EduApp',
          'username' => 'root',
          'password' => 'root',
          'charset' => 'utf8',
          'collation' => 'utf8_unicode_ci',
          'prefix' => '',
        ]
      ],

]);
$container = $app->getContainer();
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule){
  return $capsule;
};

require __DIR__ . '/../application/routes.php';
