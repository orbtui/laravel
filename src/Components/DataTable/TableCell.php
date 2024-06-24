<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;

use OrbtUI\OrbtUI as Component;

class TableCell extends Component
{

    public function __construct(
        public bool $blank = false
    ) {}

    protected function mount()
    {

        $this->tag('td');

        $this->parentOf(new Component());

    }

}
