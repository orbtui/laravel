<?php

namespace OrbtUI\Features\SupportClasses;

trait SupportStyles
{

    private ?Styles $styles = null;

    public function styles()
    {

        if (!$this->styles) {
            $this->styles = new Styles();
        }

        return $this->styles;

    }

}
