<?php

namespace OrbtUI\Components\DataTable;

use OrbtUI\Features\SupportAlpine\Alpine;

use OrbtUI\OrbtUI as Component;

class TableHead extends Component
{

    public function __construct(
        public bool $blank = false
    ) { }

    protected function mount()
    {

        $this->tag('thead');

        $this
            ->classes()
                ->add('bg-gray-300');

        $this->parentOf(new Component());

    }

}
