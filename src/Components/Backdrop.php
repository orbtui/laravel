<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Backdrop extends OrbtUI {

    public function __construct(
        public ?string $showBackdrop = null
    )
    {

        $this->classes()
            ->add('modal-backdrop')
            ->add('fade');

        $this->alpine()
            ->data('{ showBackdrop: false }')
            ->class($this->showBackdrop . '? \'show\' : \'\' ')
            ->show($this->showBackdrop);

    }

}
