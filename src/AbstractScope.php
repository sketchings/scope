<?php

abstract class AbstractScope
{
    const CLASS_CONSTANT = 'abstract class constant';

    //public, protected, private
    //final, static

    public $myvar = 101;

    public function addPassed(&$passed)
    {
        $passed++;
        return $passed;
    }

    abstract protected function protectedMethod();
    abstract public function publicMethod();
}