<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Test\Application;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

$loader = require 'vendor/autoload.php';

AnnotationRegistry::registerAutoloadNamespace(
    'Test',
    __DIR__ . '/src'
);
AnnotationRegistry::registerAutoloadNamespace(
    'JMS',
    __DIR__ . '/vendor/jms/serializer/src'
);

AnnotationDriver::registerAnnotationClasses();

$app = new Application();
$app->main();
