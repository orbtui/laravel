<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Style
{

    use UseProtection;

    private $styles = [];

    public function add($style)
    {
        array_push($this->styles, $style);
        return $this;
    }

    public function build()
    {
        return 'style="' . implode(' ', $this->styles) . '"';
    }

}
