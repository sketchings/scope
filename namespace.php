<?php
// class scope
include 'ClassScope.php';
include 'NamespaceScope.php';

use \sketchings\oop;

echo "STATIC CALL ClassScopeA" . '<br />' . PHP_EOL;
echo 'ClassScopeA::$class_number4: ' . ClassScopeA::$class_number4 . '<br />' . PHP_EOL;

$classA = new \sketchings\oop\NamespaceScopeA();
echo "FROM classA Object" . '<br />' . PHP_EOL;
echo '$classA->class_number1: ' . $classA->class_number1 . '<br />' . PHP_EOL;
//echo '$classA->class_number2: ' . $classA->class_number2 . '<br />' . PHP_EOL;
//echo '$classA->class_number3: ' . $classA->class_number3 . '<br />' . PHP_EOL;
echo '$classA::$class_number4: ' . $classA::$class_number4 . '<br />' . PHP_EOL;
//echo '$classA->class_number5: ' . $classA->class_number5 . '<br />' . PHP_EOL;
//echo '$classA->class_number6: ' . $classA->class_number6 . '<br />' . PHP_EOL;

$classB = new oop\NamespaceScopeB();
echo "FROM classB Object" . '<br />' . PHP_EOL;

$classB->displayProperties();