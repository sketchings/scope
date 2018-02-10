<?php

class ClassScopeA extends AbstractScope
{
    const CLASS_CONSTANT = 'class constant';

    //public, protected, private
    //final, static

    public $myvar = 100;
    public static $staticvar = 200;
    private $privatevar = 300;

    protected function protectedMethod(){
        echo 'Protected Method';
    }

    public function publicMethod(){
        echo 'Public Method';
    }

    public function addPassed(&$var)
    {
        $var++;
        return $var;
    }

    public function addReference(&$var)
    {
        $var++;
        return $var;
    }

    public function addProperty($var)
    {
        ${$var}++;
        return $var;
    }

    public function addTo2($num)
    {
        $this->class_number2 += $num;
    }

    public function displayProperties()
    {
        echo 'parent constant: ' . parent::CLASS_CONSTANT . '<br />' . PHP_EOL;
        echo 'self constant: ' . self::CLASS_CONSTANT . '<br />' . PHP_EOL;
        echo 'static constant: ' . static::CLASS_CONSTANT . '<br />' . PHP_EOL;
        echo '$this->privatevar: '
            . '(' . gettype($this->privatevar) . ') '
            . $this->privatevar . '<br />' . PHP_EOL;
    }

    public static function staticFunction()
    {
        echo "Parent STATIC FUNCTION";
    }
}