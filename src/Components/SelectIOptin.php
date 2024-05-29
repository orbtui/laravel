<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class SelectItem extends OrbtUI
{

    public function __construct(public string $page = '', public string $pageName = 'page')
    {

        $this->classes()
            ->add('menu-item px-3');


    }

}
