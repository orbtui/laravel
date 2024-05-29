<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableSelectAll extends OrbtUI
{

    public function __construct()
    {
        $this->component()->view('datatables.table-select-all');
    }

}
