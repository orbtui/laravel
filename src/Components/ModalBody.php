<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ModalBody extends OrbtUI
{

    public function __construct(

    ) {

        $this->component()->view('modals.modal-body');

        $this->classes()
            ->add('modal-body');

    }

}
