<?php

namespace OrbtUI\Components\Image;


use OrbtUI\OrbtUI as Component;

class Image extends Component
{

    public function __construct(
        public string $source = ''
    ) {

        $this->tag('img');

        $this->properties()->push([
            'src' => $this->source
        ]);

    }

}
