<?php

namespace OrbtUI\Components\Icon;


use OrbtUI\OrbtUI as Component;

class Icon extends Component
{

    public function __construct(

        public string $kind = 'regular',
        public string $name = 'notdef',
        public ?string $size = null,

        public ?string $marginStart = null,
        public ?string $padding = null

    ) {

        $this->tag('i');

        $this->classes()->push([
            'fa-' . $this->kind,
            'fa-' . $this->name,
            $this->size != null ? 'fs-' . $this->size : '',
            $this->marginStart != null ? 'ms-' . $this->marginStart : '',
            $this->padding != null ? 'p-' . $this->padding : ''
        ]);

    }

}
