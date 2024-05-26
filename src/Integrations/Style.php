<?php

namespace OrbtUI\Integrations;

use OrbtUI\Exceptions\StylesNotArrayException;

class Style
{

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
