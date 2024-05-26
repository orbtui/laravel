<?php

namespace OrbtUI\Components\Table;

use OrbtUI\OrbtUI;

class Header extends OrbtUI {

    public function __construct()
    {
        $this->classes()->add('fw-bold');
    }

}
