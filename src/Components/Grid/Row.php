<?php

namespace OrbtUI\Components\Grid;

use OrbtUI\OrbtUI;

class Row extends OrbtUI
{

    public function __construct()
    {

        $this->component()->tag('div');

        $this->component()
            ->classes()
                ->add('row');

    }

}