<?php
abstract class AbstractScope
{
    const CLASS_CONSTANT = 'class constant';

    public $abstract_number1 = 101;
    protected $abstract_number2 = 201;
    private $abstract_number3 = 301;

    public function addPassed($var)
    {
        $var++;
        return $var;
    }

    abstract protected function protectedMethod();
    abstract public function publicMethod();
}

class ClassScopeA extends AbstractScope
{
    const CLASS_CONSTANT = 'class constant';
    public $class_number1 = 100;
    private $class_number2 = 200;
    protected $class_number3 = 300;
    public static $class_number4 = 400;
    protected static $class_number5 = 500;
    private static $class_number6 = 600;

    protected function protectedMethod(){
        echo 'Protected Method';
    }

    public function publicMethod(){
        echo 'Public Method';
    }

    public function addPassed($var)
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
        echo '$this->class_number1: ' . $this->class_number1 . '<br />' . PHP_EOL;
        echo '$this->class_number2: ' . $this->class_number2 . '<br />' . PHP_EOL;
        echo '$this->class_number3: ' . $this->class_number3 . '<br />' . PHP_EOL;
        //echo '$this->class_number4: ' . $this->class_number4 . '<br />' . PHP_EOL;
        //echo '$this->class_number5: ' . $this->class_number5 . '<br />' . PHP_EOL;
        //echo '$this->class_number6: ' . $this->class_number6 . '<br />' . PHP_EOL;
        /*if (class_parents($this)) {
            echo get_class($this) . ' has a PARENT' . '<br />' . PHP_EOL;
            var_dump(class_parents($this));
            //echo array_values(class_parents($this))[0]::$class_number1;
            echo ClassScopeA::$class_number4;
            parent::addPassed(1);
            //echo 'parent::$class_number1: ' . parent::$class_number1 . '<br />' . PHP_EOL;
            //echo 'parent::$class_number2: ' . parent::$class_number2 . '<br />' . PHP_EOL;
            //echo 'parent::$class_number3: ' . parent::$class_number3 . '<br />' . PHP_EOL;
            //echo 'parent::$class_number4: ' . parent::$class_number4 . '<br />' . PHP_EOL;
            //echo 'parent::$class_number5: ' . parent::$class_number5 . '<br />' . PHP_EOL;
            echo 'parent::$class_number6: ' . parent::$this->class_number6 . '<br />' . PHP_EOL;
        }/**/

        echo 'STATIC SELF'. '<br />' . PHP_EOL;
        //echo 'self::$class_number1: ' . self::$class_number1 . '<br />' . PHP_EOL;
        //echo 'self::$class_number2: ' . self::$class_number2 . '<br />' . PHP_EOL;
        //echo 'self::$class_number3: ' . self::$class_number3 . '<br />' . PHP_EOL;
        echo 'self::$class_number4: ' . self::$class_number4 . '<br />' . PHP_EOL;
        echo 'self::$class_number5: ' . self::$class_number5 . '<br />' . PHP_EOL;
        echo 'self::$class_number6: ' . self::$class_number6 . '<br />' . PHP_EOL;

        echo 'Late Static Binding' . '<br />' . PHP_EOL;
        //echo 'static::$class_number1: ' . static::$class_number1 . '<br />' . PHP_EOL;
        //echo 'static::$class_number2: ' . static::$class_number2 . '<br />' . PHP_EOL;
        //echo 'static::$class_number3: ' . static::$class_number3 . '<br />' . PHP_EOL;
        echo 'static::$class_number4: ' . static::$class_number4 . '<br />' . PHP_EOL;
        echo 'static::$class_number5: ' . static::$class_number5 . '<br />' . PHP_EOL;
        //echo 'static::$class_number6: ' . static::$class_number6 . '<br />' . PHP_EOL;
    }

    public static function staticFunction()
    {
        echo "Parent STATIC FUNCTION";
    }
}

class ClassScopeB extends ClassScopeA
{
    //public $class_number1;// = 1000;
    //public $class_number1=null;// = 1000;
    public $class_number1 = 1000;
    //private $class_number2 = 2000;
    protected $class_number3 = 3000;
    public static $class_number4 = 4000;
    protected static $class_number5 = 5000;
    private static $class_number6 = 6000;

    public static function staticFunction()
    {
        echo "IN STATIC FUNCTION";
        parent::staticFunction();
    }
}