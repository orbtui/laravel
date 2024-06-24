<?php

namespace OrbtUI\Components\Grid;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Column extends OrbtUI
{

    public function __construct(
        public ?string $sm = null,
        public ?string $md = null,
        public ?string $lg = null
    ) { }

    protected function mount()
    {

        $this->component()->tag('div');

        if (!$this->sm && !$this->md && !$this->lg) {
            $this->component()
                ->classes()
                    ->add('col');
        }

        $this->component()->append(new Component());

    }

}
