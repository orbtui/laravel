<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableCell extends OrbtUI
{

    public function __construct(
        public ?string $contentAlign = null
    )
    {

        $this->component()->view('datatables.table-cell');

        if ($this->contentAlign) {
            $this->classes()->add('text-' . $this->contentAlign);
        }

    }

}
