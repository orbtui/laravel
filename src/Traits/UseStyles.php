<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Style;

/**
 * @props $style
 */
trait UseStyles
{

    private ?Style $style = null;

    public function styles()
    {

        if (!$this->style) {
            $this->style = new Style();
        }

        return $this->style;

    }

}