<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Page extends OrbtUI
{

    public function __construct()
    {

        $this->classes()
            ->add('d-flex')
            ->add('flex-column')
            ->add('flex-column-fluid');

    }

}
