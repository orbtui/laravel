<?php

namespace OrbtUI\Components\Button;


use OrbtUI\OrbtUI as Component;

class Button extends Component
{

    public function __construct(
        public string $kind = 'primary',
        public string $size = 'sm'
    ) {}

    protected function mount()
    {

        $this->tag('button');

        $this->classes()->push([
            'btn',
            'btn-' . $this->size,
            'btn-' . $this->kind
        ]);

        $this->parentOf(new Component());

    }

}
