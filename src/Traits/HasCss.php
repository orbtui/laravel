<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Css;

/**
 * @props $style
 */
trait HasCss
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
