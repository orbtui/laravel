<?php

namespace OrbtUI\Features\SupportAttributes;

class Attributes
{

    private $attributes = [];

    public function add($attribute, $value = null)
    {
        $this->attributes[$attribute] = $value;
        return $this;
    }

    public function remove($attribute)
    {
        array_slice($this->attributes, $attribute);
        return $this;
    }

    public function exists($attribute)
    {
        return in_array($attribute, $this->attributes);
    }

    public function all()
    {
        return $this->attributes;
    }

}
