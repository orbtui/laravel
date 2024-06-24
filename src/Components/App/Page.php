<?php

namespace OrbtUI\Components\App;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Page extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) {}

    protected function mount()
    {

        $this->component()->tag('div');

        $this->component()
            ->classes()
                ->add('app-main')
                ->add('flex-column')
                ->add('flex-row-fluid');

        $root = new Component('div');

        $root->classes()
            ->add('d-flex')
            ->add('flex-column')
            ->add('flex-column-fluid')
            ->add('mb-20')
            ->add('mb-md-2');

        $root->child(new Component());

        $this->component()->child($root);

    }

}
