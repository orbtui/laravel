<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Checkbox extends OrbtUI
{

    public function __construct(public string $value = '')
    {

        $this->classes()->add('form-check-input');

    }

    protected function mount()
    {

    }

}
