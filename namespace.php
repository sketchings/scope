<?php
// class scope
require __DIR__ . '/vendor/autoload.php';

$classA = new \sketchings\scope\NamespaceScopeA();
echo "FROM NamespaceScopeA Object" . '<br />' . PHP_EOL;
var_dump($classA);
$classA->displayProperties();

use \sketchings\scope\NamespaceScopeB as blah;

$classB = new blah();
echo "FROM NamespaceScopeB Object" . '<br />' . PHP_EOL;
var_dump($classB);
$classB->displayProperties();