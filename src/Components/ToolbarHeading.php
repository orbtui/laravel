<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ToolbarHeading extends OrbtUI
{

    public function __construct(public string $title = '', public array $breadcrumbs = [])
    {

        $this->component()->view('toolbar.toolbar-heading');

    }

}
