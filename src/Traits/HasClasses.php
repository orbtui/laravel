<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Clazz;

trait HasClasses
{

    protected $defaultColors = [
        'primary',
        'danger'
    ];

    private ?Clazz $clazz = null;

    public function classes()
    {

        if (!$this->clazz) {
            $this->clazz = new Clazz();
        }

        return $this->clazz;

    }

}
