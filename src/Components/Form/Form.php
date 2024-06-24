<?php

namespace OrbtUI\Components\Form;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Form extends OrbtUI
{

    protected function mount()
    {

        $this->component()->tag('form');

        $this->component()->child(new Component());

    }

}
