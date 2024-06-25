<?php

namespace OrbtUI\Components\Forms;


use OrbtUI\OrbtUI as Component;

class Form extends Component
{

    public function __construct(
        public  string $method = 'POST',
        public ?string $route  = null,
        public ?string $action = null,
        public  string $target = '_self'
    ) {}

    protected function mount()
    {

        $this->tag('form');

        $this->parentOf(new Component());

    }

}
