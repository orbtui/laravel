<?php

namespace OrbtUI\Features\SupportProperties;

trait SupportProperties
{

    private ?Properties $properties = null;

    public function properties()
    {

        if (!$this->properties) {
            $this->properties = new Properties();
        }

        return $this->properties;

    }

}
