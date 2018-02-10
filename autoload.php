<?php
// class scope
require __DIR__ . '/vendor/autoload.php';

echo "STATIC CALL ClassScopeA" . '<br />' . PHP_EOL;
echo 'ClassScopeA $staticvar: ' . ClassScopeA::$staticvar . '<br />' . PHP_EOL;

$classA = new \ClassScopeA();
echo "FROM classA Object" . '<br />' . PHP_EOL;
var_dump($classA);
$classA->displayProperties();

$classB = new ClassScopeB();
echo "FROM classB Object" . '<br />' . PHP_EOL;
var_dump($classB);
$classB->displayProperties();

//ClassScopeA::staticFunction();
//ClassScopeB::staticFunction();