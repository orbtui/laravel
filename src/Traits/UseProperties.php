<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Property;

/**
 * @props $style
 */
trait UseProperties
{

    private ?Property $property = null;

    public function properties()
    {

        if (!$this->property) {
            $this->property = new Property();
        }

        return $this->property;

    }

}
