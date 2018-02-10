<?php

interface FirstInterface
{
    //cannot redefine constant
    //const CLASS_CONSTANT = 'interface class constant';
    //interfaces can only contain public methods then all uses must be public
    public function InterfaceMethod($one);
}