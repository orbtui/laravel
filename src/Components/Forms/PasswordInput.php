<?php

namespace OrbtUI\Components\Forms;

use OrbtUI\Features\SupportLivewire\Livewire;
use OrbtUI\OrbtUI as Component;

class PasswordInput extends Component
{

    public function __construct(
        public ?string $id           = null,
        public ?string $name         = null,
        public ?string $label        = null,
        public ?string $model        = null,
        public ?string $placeholder  = null,
        public ?string $value        = null,
        public  string $size         = 'md',
        public bool    $invalid      = false,
        public bool    $disabled     = false,
        public bool    $readOnly     = false,
        public bool    $solid        = false,
        public bool    $floating     = false,
    ) {}

    protected function mount()
    {

        if ($this->floating) {

            $this->tag('div');

            $this->classes()->push([
                'form-floating'
            ]);

            $input = new Component('input');

            $input->properties()->push([
                'type' => 'password',
                'autocomplete' => 'off'
            ]);

            $input->classes()->push([
                'form-control',
                'form-control-' . $this->size
            ]);

            if ($this->id) {
                $input->properties()->add('id', $this->id);
            }

            if ($this->model) {
                $input->livewire()->add(Livewire::MODEL, $this->model);
            }

            if ($this->solid) {
                $input->classes()->add('form-control-solid');
            }

            if ($this->invalid) {
                $input->classes()->add('is-invalid');
            }

            if ($this->disabled) {
                $input->properties()->add('disabled');
            }

            if ($this->readOnly) {
                $input->properties()->add('readonly', 'readonly');
            }

            $this->parentOf($input);

        } else {

            $this->tag('input');

            $this->properties()->add('type', 'text');

            $this->classes()->push([
                'form-control',
                'form-control-' . $this->size
            ]);

            if ($this->id) {
                $this->properties()->add('id', $this->id);
            }

            if ($this->model) {
                $this->livewire()->add(Livewire::MODEL, $this->model);
            }

            if ($this->solid) {
                $this->classes()->add('form-control-solid');
            }

            if ($this->invalid) {
                $this->classes()->add('is-invalid');
            }

            if ($this->disabled) {
                $this->properties()->add('disabled');
            }

            if ($this->readOnly) {
                $this->properties()->add('readonly', 'readonly');
            }

        }



        if ($this->label) {

            $label = new Label(
                for: $this->id,
                text: $this->label
            );

            if ($this->floating) {
                $this->parentOf($label);
            } else {

                $label->classes()->add('mb-1');

                $this->prepend($label);

            }


        }

    }

}
