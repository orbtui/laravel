<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Component;

trait UseComponents
{

    protected ?Component $component = null;

    public function component()
    {

        if (!$this->component) {
            $this->component = new Component();
        }

        return $this->component;

    }

}
