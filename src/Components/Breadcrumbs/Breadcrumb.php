<?php

namespace OrbtUI\Components\Breadcrumbs;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Breadcrumb extends OrbtUI
{

    protected function mount()
    {

        $this->component()->tag('div');

    }

}
