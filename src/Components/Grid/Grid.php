<?php

namespace OrbtUI\Components\Grid;

use OrbtUI\OrbtUI;

class Grid extends OrbtUI
{

    protected function mount()
    {

        $this->component()->tag('div');

        $this->component()
            ->classes()
                ->add('row');

    }

}
