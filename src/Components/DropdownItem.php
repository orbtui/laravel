<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class DropdownItem extends OrbtUI
{

    public function __construct(
        public string $value = '',
        public string $onClick = '',
        public bool   $selected = false
    ) {

        $this->component()->view('dropdown.dropdown-item');

        $this->classes()
            ->add('d-flex')
            ->add('menu-item')
            ->add('menu-link')
            ->add('cursor-pointer')
            ->add('align-items-center')
            ->add('justify-content-center')
            ->add('px-3');

        if ($selected) {
            $this->classes()->add('active');
        }

        $this->alpine()->onClick($this->onClick ? $this->onClick . '; openItems = false' : 'openItems = false');

    }

}
