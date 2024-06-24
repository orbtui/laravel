<?php

namespace OrbtUI\Components\Grid;

use OrbtUI\OrbtUI as Component;

class Grid extends Component
{

    protected function mount()
    {

        $this->tag('div');

        $this
            ->classes()
                ->add('row');

    }

}
