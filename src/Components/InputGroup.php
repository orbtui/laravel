<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class InputGroup extends OrbtUI {

    public function __construct() {

        $this->component()->view('forms.input-group');

        $this->classes()
            ->add('input-group')
            ->add('input-group-solid');

    }

}
