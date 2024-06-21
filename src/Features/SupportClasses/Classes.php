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

    public function empty()
    {
        return empty($this->attributes()->all());
    }

    public function all()
    {

        $classes = [];

        foreach ($this->attributes()->all() as $attribute => $value) {
            array_push($classes, $attribute);
        }

        return $classes;
    }

}
