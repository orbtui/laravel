<?php

namespace OrbtUI\Integrations;

use OrbtUI\Exceptions\ClassesNotArrayException;

class Clazz
{

    private $classes = [];

    public function add($class)
    {
       array_push($this->classes, $class);
    }

    public function build()
    {
        return implode(' ', $this->classes);
    }

}
