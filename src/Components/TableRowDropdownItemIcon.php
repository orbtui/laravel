<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableRowDropdownItemIcon extends OrbtUI
{

    public function __construct(
        public ?string $itemText = null,
        public ?string $renderIcon = null
    ) {

        $this->component()->view('datatables.table-row-dropdown-item-icon');

        $this->classes()
            ->add('menu-badge');

    }

}
