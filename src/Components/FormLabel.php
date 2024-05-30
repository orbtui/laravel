<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class FormLabel extends OrbtUI {

    public function __construct() {

        $this->component()->view('forms.form-label');

        $this->classes()
            ->add('form-label');

    }

}
