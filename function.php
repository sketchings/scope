<?php
// global scope
$myvar = 1;

echo 'GLOBAL before function' . '<br />' . PHP_EOL;
echo '$myvar: ' . $myvar . '<br />' . PHP_EOL;

// function scope
//function functionScope($passed)
function functionScope(&$passed)
{
    $myvar = 2;
    $passed++;

    echo 'INSIDE FUNCTION' . '<br />' . PHP_EOL;

    echo 'Global $myvar: ' . $GLOBALS['myvar'] . '<br />' . PHP_EOL;
    echo '$myvar: ' . $myvar . '<br />' . PHP_EOL;
    echo '$passed: ' . $passed . '<br />' . PHP_EOL;

    global $myvar;
    $myvar++;
    echo 'Set global $myvar: ' . $myvar . '<br />' . PHP_EOL;

    return $passed;
}
$returned = functionScope($myvar);

echo 'GLOBAL after function' . '<br />' . PHP_EOL;
echo '$myvar: ' . $GLOBALS['myvar'] . '<br />' . PHP_EOL;
echo '$passed: ' . $passed . '<br />' . PHP_EOL;
echo '$returned: ' . $returned . '<br />' . PHP_EOL;