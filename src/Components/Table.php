<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Table extends OrbtUI
{

    public function __construct(public bool $useCheckbox = false, bool $striped = false, bool $bordered = false, bool $hovered = false)
    {

        $this->classes()->add('table');

        if ($striped) {
            $this->classes()->add('table-striped');
        }

        if ($bordered) {
            $this->classes()->add('table-row-bordered');
        }

        if ($hovered) {
            $this->classes()->add('table-hover');
        }

        $this->classes()->add('gy-5 gs-7 mb-0');

    }

}
