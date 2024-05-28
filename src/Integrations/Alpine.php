<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Alpine
{

    use UseProtection;

    private $attributes = [];
    private $skipped    = [];

    public function add($key, $value = null)
    {
        if (!$this->isProtected($key)) {
            array_push($this->attributes, $value ? $key . '="' . $value . '"' : $key);
        }

        return $this;
    }

    public function build()
    {
        return implode(' ', $this->attributes);
    }

}
