<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Test\Application;

$loader = require 'vendor/autoload.php';

AnnotationRegistry::registerAutoloadNamespace(
    'Test',
    __DIR__ . '/src'
);
AnnotationRegistry::registerAutoloadNamespace(
    'JMS',
    __DIR__ . '/vendor/jms/serializer/src'
);

$app = new Application();
$app->main();
