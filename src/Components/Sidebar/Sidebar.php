<?php

namespace OrbtUI\Components\Sidebar;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Sidebar extends OrbtUI
{

    protected function mount()
    {

        $this->component()->tag('div');

        $this->component()
            ->classes()
                ->add('app-sidebar')
                ->add('flex-column')
                ->add('bg-light');

        $this->component()->child(new Component());

    }

}
