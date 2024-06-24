<?php

namespace OrbtUI\Components\App;


use OrbtUI\OrbtUI as Component;

class Content extends Component
{

    public function __construct(
        public bool $blank = false
    ) {}

    protected function mount()
    {

        $this->tag('div');

        if ($this->blank) {

            $this->classes()->push([
                'd-flex',
                'flex-center',
                'flex-column',
                'flex-column-fluid',
                'pb-15',
                'pb-lg-20',
            ]);

            $this->parentOf(new Component());

        } else {

            $this->classes()->push([
                'app-content',
                'flex-column-fluid'
            ]);

            $container = new Component('div');

            $container->classes()->push([
                'app-container',
                'container-fluid'
            ]);

            $container->parentOf(new Component());

            $this->parentOf($container);

        }

    }

}
