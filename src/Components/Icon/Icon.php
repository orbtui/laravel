<?php

namespace OrbtUI\Components\Icon;


use OrbtUI\OrbtUI as Component;

class Icon extends Component
{

    public function __construct(
        public string $kind = 'regular',
        public string $name = 'notdef',
        public ?string $size = null
    ) {

        $this->tag('i');

        $this->classes()->push([
            'uicons-' . $this->kind,
            'uicons-' . $this->name,
            $this->size ? 'fs-' . $this->size : ''
        ]);

    }

}
