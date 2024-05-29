<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Dropdown extends OrbtUI
{

    public function __construct(
        public string $ariaLabel = '',
        public string $openDirection = 'bottom',
        public bool   $disabled  = false,
        public string $id        = '',
        public string $initialSelectedItem = '',
        public string $selectedItem = '',
        public bool   $inline = false,
        public string $invalidText = '',
        public bool   $hideLabel = false,
        public string $helperText = '',
        public array  $items      = [],
        public string $itemToString = '',
        public string $itemToElement = '',
        public string $label     = '',
        public string $change   = '',
        public string $titleText = '',
        public bool   $invalid     = false
    ) {

        $this->component()->view('dropdown.dropdown');

        $this->classes()
            ->add('position-relative d-inline-block')
            ->protect([
                'position'
            ]);

        if ($this->invalid) {
            $this->classes()->invalid();
        }

        $this->alpine()
            ->data('{ openItems: false }')
            ->onClickAway('openItems = false');

    }

}
