<?php

namespace OrbtUI\Features\SupportClasses;

use OrbtUI\Features\SupportAttributes\SupportAttributes;
use OrbtUI\Features\SupportProtection\SupportProtection;

class Classes
{

    use SupportAttributes, SupportProtection;

    public function add($class)
    {
        $this->attributes()->add($class);
        return $this;
    }

    public function push(array $classes)
    {

        foreach ($classes as $key => $value) {
            $this->attributes()->add($value, $value);
        }

        return $this;
    }

    public function empty()
    {
        return empty($this->attributes()->all());
    }

    public function all()
    {

        $classes = [];

        foreach ($this->attributes()->all() as $key => $value) {
            array_push($classes, $key);
        }

        return $classes;
    }

}
