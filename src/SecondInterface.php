<?php

interface SecondInterface extends FirstInterface
{
    //cannot add a second parameter, must be compatable with first interface
    public function InterfaceMethod($one);
    public function AdditionalMethod();
    public function publicMethod();
    public function addPassed(&$var);
}