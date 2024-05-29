<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class DataTable extends OrbtUI
{

    public function __construct()
    {
        $this->component()->view('datatables.data-table');
    }

}
