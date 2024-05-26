<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Image extends OrbtUI {

    public function __construct(public string $source = '', string $rounded = 'false')
    {

        if ($rounded == 'true') {
            $this->classes()
                ->add('rounded-circle');
        }

    }

}
