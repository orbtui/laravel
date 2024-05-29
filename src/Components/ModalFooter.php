<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ModalFooter extends OrbtUI
{

    public function __construct(
        public ?string $open = null,
        public ?string $primaryButtonText = null,
        public ?string $primaryButtonIcon = null,
        public ?string $primaryButtonClick = null,
        public ?string $secondaryButtonText = null,
        public ?string $secondaryButtonIcon = null,
        public ?string $secondaryButtonClick = null
    ) {

        $this->component()->view('modals.modal-footer');

        $this->classes()->add('modal-footer');

    }

}
