<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;

use OrbtUI\OrbtUI as Component;

class Table extends Component
{

    public function __construct(
        public bool $blank = false
    ) { }

    protected function mount()
    {

        $this->tag('table');

        $this
            ->classes()
                ->add('table')
                ->add('table-striped')
                ->add('table-hover')
                ->add('rounded')
                ->add('gy-5')
                ->add('gs-7')
                ->add('mb-0');

        $this->parentOf(new Component());

    }

}
