<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UsePrefixProtection;

class Alpine
{

    use UsePrefixProtection;

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
