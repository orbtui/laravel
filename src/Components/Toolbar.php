<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Toolbar extends OrbtUI
{

    public function __construct(public string $title = '', public array $breadcrumbs = [])
    {

        $this->component()->view('toolbar.toolbar');

    }

}
