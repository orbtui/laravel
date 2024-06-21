<?php

namespace OrbtUI\Features\SupportAttributes;

trait SupportAttributes
{

    private ?Attributes $attributes = null;

    protected function attributes()
    {

        if (!$this->attributes) {
            $this->attributes = new Attributes();
        }

        return $this->attributes;

    }

}
