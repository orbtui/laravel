<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableHeaderDropdown extends OrbtUI
{

    public function __construct()
    {
        $this->component()->view('datatables.table-header-dropdown');
    }

}
