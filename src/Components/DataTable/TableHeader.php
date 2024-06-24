<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;
use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class TableHeader extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) {}

    protected function mount()
    {

        $this->component()->tag('th');

        $this->component()->child(new Component());

    }

}
