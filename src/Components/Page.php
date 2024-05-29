<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Page extends OrbtUI
{

    public function __construct(
        public ?string $setData = null
    ) {

        if ($this->setData) {
            $this->alpine()->data($this->setData);
        }

        $this->classes()
            ->add('d-flex')
            ->add('flex-column')
            ->add('flex-column-fluid');

    }

}
