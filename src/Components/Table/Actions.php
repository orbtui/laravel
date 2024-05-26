<?php

namespace OrbtUI\Components\Table;

use OrbtUI\OrbtUI;

class Actions extends OrbtUI {

    public function __construct(public string $title = '')
    {
        $this->classes()
            ->add('position-relative')
            ->protect([
                'position'
            ]);

    }

}
