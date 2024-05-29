<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Modal extends OrbtUI
{

    public function __construct(
        public ?string $open = null,
        public ?string $modalHeading = null,
        public ?string $modalLabel   = null,
        public ?string $primaryButtonText = null,
        public ?string $primaryButtonIcon = null,
        public ?string $primaryButtonClick = null,
        public ?string $secondaryButtonText = null,
        public ?string $secondaryButtonIcon = null,
        public ?string $secondaryButtonClick = null,
    ) {

        $this->component()->view('modals.modal');

        $this->classes()->add('modal')->add('fade');

        $this->styles()->add('background-color: rgba(22, 22, 22, 0.5)');

        $this->alpine()
            ->class($this->open . ' ? \'show d-block\' : \'\' ')
            ->show($this->open)
            ->transition();

        $this->livewire()->ignoreSelf();

    }

}
