<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Separator extends OrbtUI {

    public function __construct()
    {
        $this->classes()->add('separator opacity-75');
    }

}
