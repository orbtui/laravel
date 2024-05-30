<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ModalDialog extends OrbtUI
{

    public function __construct(
        public string $size = 'md'
    ) {

        $this->component()->view('modals.modal-dialog');

        $this->classes()
            ->add('modal-dialog')
            ->add('modal-dialog-centered')
            ->add('modal-' . $this->size);

    }

}
