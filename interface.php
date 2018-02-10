<?php
require "src/AbstractScope.php";
require "src/ClassScopeA.php";
require "src/ClassScopeB.php";
require "src/FirstInterface.php";
require "src/SecondInterface.php";
require "src/InterfaceClass.php";

$interface = new InterfaceClass();

echo "STATIC CALL InterfaceClass" . '<br />' . PHP_EOL;
echo 'InterfaceClass $staticvar: ' . InterfaceClass::$staticvar . '<br />' . PHP_EOL;

echo "FROM interface Object" . '<br />' . PHP_EOL;
var_dump($interface);
$interface->displayProperties();
$interface->interfaceMethod('one');
$interface->additionalMethod();