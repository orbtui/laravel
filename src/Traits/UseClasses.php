<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Clazz;

trait UseClasses
{

    protected $defaultColors = [
        'primary',
        'secondary',
        'info',
        'danger',
        'warning',
        'success',
        'light',
        'dark'
    ];

    protected $alignmentOptions = [
        'start',
        'end',
        'center'
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
