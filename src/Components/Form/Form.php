<?php

namespace OrbtUI\Components\Form;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Form extends OrbtUI
{

    public function __construct()
    {

        $this->component()->tag('form');

        $this->component()->append(new Component());

    }

}
