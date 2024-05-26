<?php

namespace OrbtUI\Components\Table;

use OrbtUI\OrbtUI;

class Header extends OrbtUI {

    public function __construct(public string $value = '')
    {
        $this->classes()->add('fw-bold');
    }

}
