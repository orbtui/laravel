<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableBody extends OrbtUI
{

    public function __construct()
    {
        $this->component()->view('datatables.table-body');
    }

}
