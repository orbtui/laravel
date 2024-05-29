<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ToolbarContainer extends OrbtUI
{

    public function __construct(public string $title = '')
    {

        $this->component()->view('toolbar.toolbar-container');

    }

}
