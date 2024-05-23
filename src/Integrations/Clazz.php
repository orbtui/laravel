<?php

namespace OrbtUI\Integrations;

use OrbtUI\Exceptions\ClassesNotArrayException;

class Clazz
{

    private $classes = [];

    public function add($classes)
    {

        if (!is_array($classes)) {
            throw new ClassesNotArrayException();
        }

        $this->classes = $classes;

    }

    public function render()
    {
        return $this->classes;
    }

}
