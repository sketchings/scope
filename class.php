<?php
// class scope
include 'ClassScope.php';

echo "STATIC CALL ClassScopeA" . '<br />' . PHP_EOL;
echo 'ClassScopeAx$class_number4: ' . ClassScopeA::$class_number4 . '<br />' . PHP_EOL;

$classA = new ClassScopeA();

echo "FROM classA Object" . '<br />' . PHP_EOL;
$classA->displayProperties();

$classA2 = new ClassScopeA();
$classA2->class_number1="test";
echo "FROM classA2 Object" . '<br />' . PHP_EOL;
$classA2->displayProperties();

$classB = new ClassScopeB();
echo "FROM classB Object" . '<br />' . PHP_EOL;

var_dump($classB);
$classB->displayProperties();
ClassScopeA::staticFunction();
ClassScopeB::staticFunction();