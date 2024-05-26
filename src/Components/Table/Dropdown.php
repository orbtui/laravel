<?php

namespace OrbtUI\Components\Table;

use OrbtUI\OrbtUI;

class Dropdown extends OrbtUI {

    public function __construct(public string $title = '')
    {
        $this->classes()
            ->add('position-relative')
            ->protect([
                'position'
            ]);

        $this->styles()->add('width: 0; min-width: fit-content');

    }

}
