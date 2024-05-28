<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Clazz
{

    use UseProtection;

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
