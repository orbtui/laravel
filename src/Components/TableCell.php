<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableCell extends OrbtUI
{

    public function __construct()
    {
        $this->component()->view('datatables.table-cell');
    }

}
