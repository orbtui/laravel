<?php

namespace OrbtUI\Integrations;

use OrbtUI\Exceptions\ClassesNotArrayException;
use OrbtUI\Traits\UsePrefixProtection;

class Clazz
{

    use UsePrefixProtection;

    private $classes = [];
    private $skipped = [];

    public function add($class)
    {
        if (!$this->isProtected($class)) {
            array_push($this->classes, $class);
        }
        return $this;
    }

    public function build()
    {
        return 'class="' . implode(' ', $this->classes) . '"';
    }

}
