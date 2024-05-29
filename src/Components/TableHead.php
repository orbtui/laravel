<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableHead extends OrbtUI
{

    public function __construct()
    {
        $this->component()->view('datatables.table-head');
    }

}
