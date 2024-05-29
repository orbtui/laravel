<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableSelectRow extends OrbtUI
{

    public function __construct(public string $value = '')
    {
        $this->component()->view('datatables.table-select-row');
    }

}
