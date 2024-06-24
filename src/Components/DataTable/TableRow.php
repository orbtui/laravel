<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;

use OrbtUI\OrbtUI as Component;

class TableRow extends Component
{

    public function __construct(
        public bool $blank = false
    ) {}

    protected function mount()
    {

        $this->tag('tr');

        $this->parentOf(new Component());

    }

}
