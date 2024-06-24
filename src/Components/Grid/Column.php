<?php

namespace OrbtUI\Components\Grid;


use OrbtUI\OrbtUI as Component;

class Column extends Component
{

    public function __construct(
        public ?string $sm = null,
        public ?string $md = null,
        public ?string $lg = null
    ) { }

    protected function mount()
    {

        $this->tag('div');

        if (!$this->sm && !$this->md && !$this->lg) {
            $this
                ->classes()
                    ->add('col');
        }

        $this->append(new Component());

    }

}
