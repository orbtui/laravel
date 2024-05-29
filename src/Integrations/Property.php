<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Property
{

    use UseProtection;

    private $properties = [];
    private $skipped = [];

    public function add($property, $value)
    {
        if (!$this->isProtected($property)) {
            array_push($this->properties, $property . '="' . $value . '"');
        }
        return $this;
    }

    public function type($value)
    {
        if (!$this->isProtected('type')) {
            array_push($this->properties, 'type="' . $value . '"');
        }
        return $this;
    }

    public function build()
    {
        return implode(' ', $this->properties);
    }

}
