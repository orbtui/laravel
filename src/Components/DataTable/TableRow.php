<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;
use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class TableRow extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) {

        $this->component()->tag('tr');

        $this->component()->append(new Component());

    }

}
