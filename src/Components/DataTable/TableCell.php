<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;
use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class TableCell extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) {

        $this->component()->tag('td');

        $this->component()->append(new Component());

    }

}
