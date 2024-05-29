<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableContainer extends OrbtUI
{

    public function __construct()
    {
        $this->component()->view('datatables.table-container');
    }


}
