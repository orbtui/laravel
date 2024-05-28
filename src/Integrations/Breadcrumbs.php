<?php

namespace OrbtUI\Integrations;

use OrbtUI\Traits\UseProtection;

class Breadcrumbs
{

    use UseProtection;

    private $breadcrumbs = [];
    private $skipped = [];

    public function add(string $label, string $target = '')
    {
        if (!$this->isProtected($label)) {
            array_push($this->breadcrumbs, new Breadcrumb($label, $target));
        }
        return $this;
    }

    public function get()
    {
        return $this->breadcrumbs;
    }

}
