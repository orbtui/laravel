<?php

namespace OrbtUI\Features\SupportComponents;

trait SupportComponents
{

    private ?Component $component = null;

    public function component()
    {

        if (!$this->component) {
            $this->component = new Component();
        }

        return $this->component;

    }

}
