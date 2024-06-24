<?php

namespace OrbtUI\Components\App;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Content extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) {}

    protected function mount()
    {

        $this->component()->tag('div');

        if ($this->blank) {

            $this->component()
                ->classes()
                    ->add('d-flex')
                    ->add('flex-center')
                    ->add('flex-column')
                    ->add('flex-column-fluid')
                    ->add('pb-15')
                    ->add('pb-lg-20');

            $this->component()->child(new Component());

        } else {

            $this->component()
                    ->classes()
                        ->add('app-content')
                        ->add('flex-column-fluid');

            $container = new Component('div');

            $container->classes()
                        ->add('app-container')
                        ->add('container-fluid');

            $container->child(new Component());

            $this->component()->child($container);

        }

    }

}
