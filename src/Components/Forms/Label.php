<?php

namespace OrbtUI\Components\Forms;


use OrbtUI\OrbtUI as Component;

class Label extends Component
{

    public function __construct(
        public ?string $for = null,
        public ?string $text = null
    ) {
        $this->mount();
    }

    protected function mount()
    {

        $this->tag('label');

        $this->properties()->push([
            'for' => $this->for
        ]);

        $this->content($this->text);

    }

}
