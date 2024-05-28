<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\Breadcrumbs;

/**
 * @props $breadcrumbs
 */
trait UseBreadcrumbs
{

    private ?Breadcrumbs $b = null;
    public $breadcrumbs = [];

    public function breadcrumbs()
    {

        if (!$this->b) {
            $this->b = new Breadcrumbs();
        }

        $this->breadcrumbs = $this->b->get();

        return $this->b;

    }

}
