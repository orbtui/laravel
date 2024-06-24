<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;
use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class TableHead extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) {

        $this->component()->tag('thead');

        $this->component()
            ->classes()
                ->add('bg-gray-300');

        $this->component()->append(new Component());

    }

}
