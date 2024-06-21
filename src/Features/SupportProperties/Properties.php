<?php

namespace OrbtUI\Features\SupportProperties;

use OrbtUI\Features\SupportAttributes\SupportAttributes;
use OrbtUI\Features\SupportProtection\SupportProtection;

class Properties
{

    use SupportAttributes, SupportProtection;

    public function add($property, $value = null)
    {
        $this->attributes()->add($property, $value);
        return $this;
    }

    public function empty()
    {
        return empty($this->attributes()->all());
    }

    public function all()
    {

        $properties = [];

        foreach ($this->attributes()->all() as $property => $value) {
            array_push($properties, $value ? ($property . '="' . $value . '"') : $property);
        }

        return $properties;
    }

}
