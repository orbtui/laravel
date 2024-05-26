<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UsePrefixProtection;

class Livewire
{

    use UsePrefixProtection;

    private $attributes = [];
    private $skipped  = [];

    public function add($key, $value = null)
    {
        if (!$this->isProtected($key) && !in_array($key, $this->attributes)) {
            array_push($this->attributes, $value ? $key . '="' . $value . '"' : $key);
        }
        return $this;
    }

    public function build()
    {
        return implode(' ', $this->attributes);
    }

}
