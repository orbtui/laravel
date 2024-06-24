<?php

namespace OrbtUI\Components\Sidebar;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class SidebarMenuItem extends OrbtUI
{

    protected function mount()
    {

        $this->component()->tag('div');

    }

}
