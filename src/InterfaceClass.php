<?php

class InterfaceClass extends ClassScopeB implements FirstInterface, SecondInterface
{
    const CLASS_CONSTANT = 'interface class constant';

    public $myvar = 100.0;
    public static $staticvar = 2;
    private $privatevar = 300.0;

    public function interfaceMethod($one)
    {
        echo 'Interface Method' . '<br />' . PHP_EOL;
        echo self::CLASS_CONSTANT . '<br />' . PHP_EOL;
        echo '$this->privatevar: '
            . '(' . gettype($this->privatevar) . ') '
            . $this->privatevar . '<br />' . PHP_EOL;
    }

    public function additionalMethod()
    {
        echo 'Additional Method';
    }

    //cannot override final
    //public function displayProperties(){}
}