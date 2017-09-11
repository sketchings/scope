<?php
// global scope
$global_number1 = 1;
$global_number2 = 2;
$global_number3 = 3;
$global_passed1 = 4;
$global_passed2 = 5;

echo 'GLOBAL' . '<br />' . PHP_EOL;
echo '$global_number1: ' . $global_number1 . '<br />' . PHP_EOL;
echo '$global_number2: ' . $global_number2 . '<br />' . PHP_EOL;
echo '$global_number3: ' . $global_number3 . '<br />' . PHP_EOL;
echo '$global_passed1: ' . $global_passed1 . '<br />' . PHP_EOL;
echo '$global_passed2: ' . $global_passed2 . '<br />' . PHP_EOL;

// function scope
function functionScope($passed1, &$passed2)
{
    echo 'INSIDE FUNCTION' . '<br />' . PHP_EOL;
    static $static = 0;
    echo 'static=' . $static . '<br />' . PHP_EOL;
    $static++;
    //extract($GLOBALS);
    global $new_number;
    $new_number = 1;
    $new_number++;
    $global_number1 = "test";
    echo '$global_number1: ' . $global_number1 . '<br />' . PHP_EOL;
    global $global_number2;
    echo '$global_number2: ' . $global_number2 . '<br />' . PHP_EOL;
    echo '$global_number3: ' . $GLOBALS['global_number3'] . '<br />' . PHP_EOL;
    echo '$global_passed1: ' . $global_passed1 . '<br />' . PHP_EOL;
    echo '$global_passed2: ' . $global_passed2 . '<br />' . PHP_EOL;

    $global_number1++;
    $global_number2++;
    $GLOBALS['global_number3']++;
    //$global_passed1++;
    //$global_passed2++;

    echo '$passed1: ' . $passed1 . '<br />' . PHP_EOL;
    echo '$passed2: ' . $passed2 . '<br />' . PHP_EOL;

    $passed1++;
    $passed2++;

    $function_number1 = 10;
    $function_number2 = 20;

    echo '$function_number1: ' . $function_number1 . '<br />' . PHP_EOL;
    echo '$function_number2: ' . $function_number2 . '<br />' . PHP_EOL;

    return $function_number2;
}
$function_number1 = functionScope($global_passed1, $global_passed2);

echo 'GLOBAL' . '<br />' . PHP_EOL;
echo '$new_number: ' . $new_number . '<br />' . PHP_EOL;
echo '$global_number1: ' . $global_number1 . '<br />' . PHP_EOL;
echo '$global_number2: ' . $global_number2 . '<br />' . PHP_EOL;
echo '$global_number3: ' . $global_number3 . '<br />' . PHP_EOL;
echo '$global_passed1: ' . $global_passed1 . '<br />' . PHP_EOL;
echo '$global_passed2: ' . $global_passed2 . '<br />' . PHP_EOL;

echo '$function_number1: ' . $function_number1 . '<br />' . PHP_EOL;
echo '$function_number2: ' . $function_number2 . '<br />' . PHP_EOL;

// namespaces