<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Button extends OrbtUI {

    public function __construct(string $color = 'primary')
    {
        $this->classes()->add('btn');
        $this->classes()->add('btn-' . $color);
    }

}
