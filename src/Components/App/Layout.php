<?php

namespace OrbtUI\Components\App;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Layout extends OrbtUI
{

    protected function mount()
    {

        $this->component()->tag('div');

        $this->component()->classes()
                ->add('app-wrapper')
                ->add('flex-column')
                ->add('flex-row-fluid');

        $this->component()->child(new Component());

    }

}
