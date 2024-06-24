<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;
use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Table extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) { }

    protected function mount()
    {

        $this->component()->tag('table');

        $this->component()
            ->classes()
                ->add('table')
                ->add('table-striped')
                ->add('table-hover')
                ->add('rounded')
                ->add('gy-5')
                ->add('gs-7')
                ->add('mb-0');

        $this->component()->child(new Component());

    }

}
