<?php

namespace OrbtUI\Components\Table;

use OrbtUI\OrbtUI;

class Footer extends OrbtUI {


    public function __construct(string $backgroundColor = 'light')
    {
        $this->classes()->add('app-footer shadow');
        $this->classes()->add('bg-' . $backgroundColor);
    }

}
