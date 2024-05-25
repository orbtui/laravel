<?php

namespace OrbtUI\Components\App;

use OrbtUI\OrbtUI;

class Footer extends OrbtUI {


    public function __construct(string $backgroundColor = 'light')
    {
        $this->classes()->add('app-footer bg-opacity-95 shadow');
        $this->classes()->add('bg-' . $backgroundColor);
    }

}
