<?php

namespace OrbtUI\Integrations;

use OrbtUI\Exceptions\StylesNotArrayException;

class Style
{

    private $styles = [];

    public function add($style)
    {
        array_push($this->styles, $style);
    }

    public function build()
    {
        if (sizeof($this->styles) > 0) {
            return implode(' ', $this->styles);
        } else {
            return '';
        }
    }

}
