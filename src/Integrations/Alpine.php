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

    public function init($value = null)
    {
        if (!$this->isProtected('x-init')) {
            array_push($this->attributes, 'x-init="' . $value . '"');
        }
        return $this;
    }

    public function reference($value = null)
    {
        if (!$this->isProtected('x-ref')) {
            array_push($this->attributes, 'x-ref="' . $value . '"');
        }
        return $this;
    }

    public function data($value = null)
    {
        if (!$this->isProtected('x-data')) {
            array_push($this->attributes, 'x-data="' . $value . '"');
        }
        return $this;
    }

    // Click Events

    public function onClick($value = null)
    {
        if (!$this->isProtected('x-on:click')) {
            array_push($this->attributes, 'x-on:click="' . $value . '"');
        }
        return $this;
    }

    public function onClickAway($value = null)
    {
        if (!$this->isProtected('x-on:click.away')) {
            array_push($this->attributes, 'x-on:click.away="' . $value . '"');
        }
        return $this;
    }

    public function onChange($value = null)
    {
        if (!$this->isProtected('x-on:change')) {
            array_push($this->attributes, 'x-on:change="' . $value . '"');
        }
        return $this;
    }

    public function onChangeDebounce($value = null)
    {
        if (!$this->isProtected('x-on:change.debounce')) {
            array_push($this->attributes, 'x-on:change.debounce="' . $value . '"');
        }
        return $this;
    }

    public function show($value = null)
    {
        if (!$this->isProtected('x-show')) {
            array_push($this->attributes, 'x-show="' . $value . '"');
        }
        return $this;
    }

    public function class($value = null)
    {
        if (!$this->isProtected('x-bind:class')) {
            array_push($this->attributes, 'x-bind:class="' . $value . '"');
        }
        return $this;
    }

    public function checked($value = null)
    {
        if (!$this->isProtected('x-bind:checked')) {
            array_push($this->attributes, 'x-bind:checked="' . $value . '"');
        }
        return $this;
    }

    public function transition($value = null)
    {
        if (!$this->isProtected('x-transition')) {
            array_push($this->attributes, 'x-transition="' . $value . '"');
        }
        return $this;
    }

    public function build()
    {
        return implode(' ', $this->attributes);
    }

}
