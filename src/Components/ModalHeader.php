<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ModalHeader extends OrbtUI
{

    public function __construct(
        public ?string $open = null,
        public ?string $modalHeading = null,
        public ?string $modalLabel   = null
    ) {

        $this->component()->view('modals.modal-header');

        $this->classes()
            ->add('modal-header')
            ->add('d-block');

    }

}
