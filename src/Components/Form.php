<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Form extends OrbtUI
{

    public function __construct(

    ) {

        $this->component()->view('forms.form');

    }

}
