<?php
namespace sketchings\oop;

class NamespaceScopeA extends \ClassScopeA
{
    public $namespace_number1 = 1.1;
    private $namespace_number2 = 1.2;
    protected $namespace_number3 = 1.3;
    public static $class_number4 = 401;
    protected static $class_number5 = 501;

    public function displayProperties()
    {
        echo '$this->class_number1: ' . $this->class_number1 . '<br />' . PHP_EOL;
        //echo '$this->class_number2: ' . $this->class_number2 . '<br />' . PHP_EOL;
        echo '$this->class_number3: ' . $this->class_number3 . '<br />' . PHP_EOL;
        //echo '$this->class_number4: ' . $this->class_number4 . '<br />' . PHP_EOL;
        //echo '$this->class_number5: ' . $this->class_number5 . '<br />' . PHP_EOL;
        //echo '$this->class_number6: ' . $this->class_number6 . '<br />' . PHP_EOL;

        /*echo 'parent::$class_number1: ' . parent::$class_number1 . '<br />' . PHP_EOL;
        echo 'parent::$class_number2: ' . parent::$class_number2 . '<br />' . PHP_EOL;
        echo 'parent::$class_number3: ' . parent::$class_number3 . '<br />' . PHP_EOL;
        echo 'parent::$class_number4: ' . parent::$class_number4 . '<br />' . PHP_EOL;
        echo 'parent::$class_number5: ' . parent::$class_number5 . '<br />' . PHP_EOL;
        echo 'parent::$class_number6: ' . parent::$class_number6 . '<br />' . PHP_EOL;/**/

        //echo 'self::$class_number1: ' . self::$class_number1 . '<br />' . PHP_EOL;
        //echo 'self::$class_number2: ' . self::$class_number2 . '<br />' . PHP_EOL;
        //echo 'self::$class_number3: ' . self::$class_number3 . '<br />' . PHP_EOL;
        echo 'self::$class_number4: ' . self::$class_number4 . '<br />' . PHP_EOL;
        echo 'self::$class_number5: ' . self::$class_number5 . '<br />' . PHP_EOL;
        //echo 'self::$class_number6: ' . self::$class_number6 . PHP_EOL;

        echo 'static::$class_number4: ' . static::$class_number4 . '<br />' . PHP_EOL;
        echo 'static::$class_number5: ' . static::$class_number5 . '<br />' . PHP_EOL;
        //echo 'static::$class_number6: ' . static::$class_number6 . PHP_EOL;
    }
}

class NamespaceScopeB extends NamespaceScopeA
{
    public static $class_number4 = 402;
    protected static $class_number5 = 502;
}