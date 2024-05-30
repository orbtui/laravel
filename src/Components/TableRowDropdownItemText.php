<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableRowDropdownItemText extends OrbtUI
{

    public function __construct(
        public ?string $itemText = null,
        public ?string $renderIcon = null
    ) {

        $this->component()->view('datatables.table-row-dropdown-item-text');

        $this->classes()
            ->add('menu-title');

    }

}
