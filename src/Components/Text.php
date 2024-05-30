<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Text extends OrbtUI
{

    public $tag = 'p';

    public function __construct(
        public ?string $kind = 'parapraph',
        public ?string $size = null,
        public ?string $weight = 'normal'
    ) {

        $this->component()->view('text');

        if ($this->kind === 'paragraph') {
            $this->tag = 'p';
        } else {
            $this->tag = 'h1';
        }

        $this->classes()
            ->add('mb-0')
            ->add('fw-' . $this->weight);

        if ($this->size) {
            $this->classes()->add('fs-' . $this->size);
        }

    }


}
