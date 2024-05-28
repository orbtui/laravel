<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class CheckboxInput extends OrbtUI
{

    public function __construct()
    {
        $this->classes()->add('form-check form-check-custom form-check-solid form-check-sm cursor-pointer form-check-input ');
    }

}
