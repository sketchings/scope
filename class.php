<?php
// class scope
require "src/AbstractScope.php";
require "src/ClassScopeA.php";
//AbstractScope required here will not be usable in ClassScopeA
require "src/ClassScopeB.php";

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