<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Alpine implements AlpineDirectives
{

    use UseProtection;

    private $attributes = [];
    private $skipped    = [];

    public function init($value = null)
    {
        return $this->push(AlpineDirectives::INIT, $value);
    }

    public function reference($value = null)
    {
        return $this->push(AlpineDirectives::REF, $value);
    }

    public function data($value = null)
    {
        return $this->push(AlpineDirectives::DATA, $value);
    }

    // Click Events

    public function on($event, $value)
    {
        return $this->push(AlpineDirectives::ON . $event, $value);
    }

    public function onClick($value = null)
    {
        return $this->push(AlpineDirectives::ON_CLICK, $value);
    }

    public function onClickAway($value = null)
    {
        return $this->push(AlpineDirectives::ON_CLICK_AWAY, $value);
    }

    public function onChange($value = null)
    {
        return $this->push(AlpineDirectives::ON_CHANGE, $value);
    }

    public function onChangeDebounce($value = null)
    {
        return $this->push(AlpineDirectives::ON_CHANGE_DEBOUNCE, $value);
    }

    public function show($value = null)
    {
        return $this->push(AlpineDirectives::SHOW, $value);
    }

    public function bind($directive, $value = null)
    {
        return $this->push(AlpineDirectives::BIND . $directive, $value);
    }

    public function class($value = null)
    {
        return $this->push(AlpineDirectives::BIND_CLASS, $value);
    }

    public function checked($value = null)
    {
        return $this->push(AlpineDirectives::BIND_CHECKED, $value);
    }

    public function transition($value = null)
    {
        return $this->push(AlpineDirectives::TRANSITION, $value);
    }

    public function remove($directive)
    {
        array_slice($this->attributes, $directive);
        return $this;
    }

    public function push($directive, $value)
    {
        if (!$this->isProtected($directive)) {
            $this->attributes[$directive] = $this->has($directive) ? ('; ' . $value) : $value;
        }
        return $this;
    }

    public function has($directive)
    {
        return array_key_exists($directive, $this->attributes);
    }

    public function build()
    {

        $directives = [];

        foreach ($this->attributes as $directive => $value) {
           array_push($directives, $directive . '="' . $value . '"');
        }

        return implode(' ', $directives);

    }

}
