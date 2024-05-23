<?php

namespace OrbtUI\Integrations;

use OrbtUI\Exceptions\ClassesNotArrayException;

class Clazz
{

    public function add($classes)
    {

        if (!is_array($classes)) {
            throw new ClassesNotArrayException();
        }

    }

    public function render()
    {
        return '';
    }

}
