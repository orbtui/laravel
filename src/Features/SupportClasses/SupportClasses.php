<?php

namespace OrbtUI\Features\SupportClasses;

trait SupportClasses
{

    private ?Classes $classes = null;

    public function classes()
    {

        if (!$this->classes) {
            $this->classes = new Classes();
        }

        return $this->classes;

    }

}
