<?php

namespace OrbtUI\Components\Page;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class PageContent extends OrbtUI
{

    public function __construct(
        public bool $blank = false
    ) {

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

            $this->component()->append(new Component());

        } else {

            $this->component()
                ->classes()
                    ->add('app-content')
                    ->add('flex-column-fluid');

            $root = new Component('div');

            $root->classes()
                ->add('app-container')
                ->add('container-fluid');

            $root->append(new Component());

            $this->component()->append($root);

        }

    }

}
