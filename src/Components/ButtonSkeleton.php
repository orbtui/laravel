<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class ButtonSkeleton extends OrbtUI
{

    public function __construct(
        public string  $kind            = 'primary',
        public string  $size            = 'sm',
        public ?string $renderIcon      = null,
        public ?string $iconDescription = null,
        public ?bool   $hasIconOnly     = false,
        public ?string $onClick         = null
    ) {

        $this->classes()->add('btn placeholder animate-pulse bg-gray-300')->add('btn-' . $this->kind)->add('btn-' . $this->size);

        if ($this->hasIconOnly) {
            $this->classes()->add('btn-flex')->add('py-3 px-3');
        }

        if ($this->onClick) {
            $this->alpine()->onClick($this->onClick);
        }

        $this->component()->view('buttons.button-skeleton');

    }

}
