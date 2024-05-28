<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Breadcrumb
{

    private $label;
    private $target;

    public function __construct(string $label = '', string $target = '')
    {
        $this->label = $label;
        $this->target = $target;
    }

    public function label()
    {
        return $this->label;
    }

    public function target()
    {
        return $this->target;
    }

}
