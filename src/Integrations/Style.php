<?php

namespace OrbtUI\Integrations;

use OrbtUI\Exceptions\StylesNotArrayException;

class Style
{

    public function add($styles)
    {

        if (!is_array($styles)) {
            throw new StylesNotArrayException();
        }

    }

    public function render()
    {
        return '';
    }

}
