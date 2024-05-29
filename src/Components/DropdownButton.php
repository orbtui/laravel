<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class DropdownButton extends OrbtUI
{

    public function __construct(public string $color = 'primary', public string $size = 'sm')
    {

        $this->component()->view('dropdown.dropdown-button');

        $this->properties()->type('button');

        $this->classes()
            ->add('form-select')
            ->add('form-select-' . $color);

    }

}
