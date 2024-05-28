<?php

namespace OrbtUI\Components;

use Exception;
use OrbtUI\OrbtUI;

class SidebarMenuItem extends OrbtUI
{

    public function __construct(public string $label = '', public string $iconType = '', public string $iconName = '', public string $iconSize = '3', public string $route = '', public bool $active = false, public bool $navigate = false)
    {

        $this->classes()
            ->add('menu-item');

        if ($active) {
            $this->classes()->add('show here');
        }

    }

    protected function mount()
    {

        if ($this->component()->child()) {
            $this->classes()->add('menu-accordion');
        }

    }

}
