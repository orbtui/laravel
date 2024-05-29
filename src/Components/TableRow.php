<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableRow extends OrbtUI
{

    public function __construct()
    {
        $this->component()->view('datatables.table-row');
    }

}
