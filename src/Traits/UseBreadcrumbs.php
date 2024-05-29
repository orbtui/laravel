<?php

namespace OrbtUI\Traits;

use OrbtUI\Integrations\BreadcrumbTrail;

trait UseBreadcrumbs
{

    private ?BreadcrumbTrail $trail = null;
    public $breadcrumbs = [];

    public function breadcrumbs()
    {

        if (!$this->trail) {
            $this->trail = new BreadcrumbTrail();
        }

        return $this->trail;

    }

}
