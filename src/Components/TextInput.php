<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TextInput extends OrbtUI {

    public function __construct(
        public ?string $size        = 'md',
        public ?string $labelText   = null,
        public ?string $helperText  = null,
        public ?string $value       = null,
        public ?string $placeholder = null,
        public ?bool   $readOnly    = false,
        public ?bool   $disabled    = false
    ) {

        $this->component()->view('forms.text-input');

        $this->classes()
            ->add('form-control');

        if ($this->value) {
            $this->properties()->add('value', $this->value);
        }

        if ($this->placeholder) {
            $this->properties()->add('placeholder', $this->placeholder);
        }

        if ($this->readOnly) {
            $this->properties()->add('readonly', 'readonly');
        }

        if ($this->disabled) {
            $this->properties()->add('disabled', 'disabled');
        }

    }

}
