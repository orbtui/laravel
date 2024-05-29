<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Livewire
{

    use UseProtection;

    private $attributes = [];
    private $skipped  = [];

    public function add($key, $value = null)
    {
        if (!$this->isProtected($key) && !in_array($key, $this->attributes)) {
            array_push($this->attributes, $value ? $key . '="' . $value . '"' : $key);
        }
        return $this;
    }

    public function ignore()
    {
        if (!$this->isProtected('wire:ignore') && !in_array('wire:ignore', $this->attributes)) {
            array_push($this->attributes, 'wire:ignore');
        }
        return $this;
    }

    public function ignoreSelf()
    {
        if (!$this->isProtected('wire:ignore.self') && !in_array('wire:ignore.self', $this->attributes)) {
            array_push($this->attributes, 'wire:ignore.self');
        }
        return $this;
    }

    public function build()
    {
        return implode(' ', $this->attributes);
    }

}
