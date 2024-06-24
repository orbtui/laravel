<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;

use OrbtUI\OrbtUI as Component;

class TableBody extends Component
{

    public function __construct(
        public bool $blank = false
    ) { }

    protected function mount()
    {

        $this->tag('tbody');

        $this->parentOf(new Component());

    }

}
