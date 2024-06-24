<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;

use OrbtUI\OrbtUI as Component;

class TableHeader extends Component
{

    public function __construct(
        public bool $blank = false
    ) {}

    protected function mount()
    {

        $this->tag('th');

        $this->parentOf(new Component());

    }

}
