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

    public function fontWeight($weight)
    {
        if (!$this->isProtected('fw')) {
            array_push($this->classes, 'fw-' . $weight);
        }
        return $this;
    }

    public function fontSize($size)
    {
        if (!$this->isProtected('fs')) {
            array_push($this->classes, 'fs-' . $size);
        }
        return $this;
    }

    public function invalid()
    {
        if (!$this->isProtected('is-invalid')) {
            array_push($this->classes, 'is-invalid');
        }
        return $this;
    }

    public function build()
    {
        return 'class="' . implode(' ', $this->classes) . '"';
    }

}
