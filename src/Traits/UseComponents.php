<?php

namespace OrbtUI\Traits;

use OrbtUI\Components\WebElementProps;
use OrbtUI\Integrations\Component;

trait UseComponents
{

    use WebElementProps;

    protected ?Component $component = null;

    public function component()
    {

        if (!$this->component) {
            $this->component = new Component();
        }

        return $this->component;

    }

}
