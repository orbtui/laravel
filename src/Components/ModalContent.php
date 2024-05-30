<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ModalContent extends OrbtUI
{

    public function __construct(

    ) {

        $this->component()->view('modals.modal-content');

        $this->classes()->add('modal-content');

    }

}
