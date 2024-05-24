<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Icon extends OrbtUI {

    public function __construct(
        string $type = 'regular',
        string $name = 'notdef',
        string $size = '1',
        string $rotate = '',
        string $animation = '',
    ) {

        $this->classes()->add('fa-' . $type);
        $this->classes()->add('fa-' . $name);
        $this->classes()->add('fs-' . $size);

        if ($rotate) {
            $this->classes()->add('rotate-' . $rotate);
        }

        if ($animation) {
            $this->classes()->add('fa-' . $animation);
        }

    }

}
