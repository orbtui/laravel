<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableRowDropdownItem extends OrbtUI
{

    public function __construct(
        public ?string $itemText = null,
        public ?string $renderIcon = null
    ) {

        $this->component()->view('datatables.table-row-dropdown-item');

        $this->classes()
            ->add('menu-item')
            ->add('px-3');

        $this->alpine()->onClick('open = false');

    }

}
