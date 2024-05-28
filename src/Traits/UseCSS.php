<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Css;

/**
 * @props $style
 */
trait UseCSS
{

    private ?Css $css = null;

    public function css()
    {

        if (!$this->css) {
            $this->css = new Css();
        }

        return $this->css;

    }

}
