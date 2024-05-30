<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Icon extends OrbtUI
{

    public function __construct(
        string $kind = 'regular',
        string $name = 'notdef',
        ?string $color = null,
        ?string $size = null,
        ?string $rotate = null,
        ?string $animation = null,
    ) {

        $this->classes()
            ->add('uicons-' . $kind)
            ->add('uicons-' . $name)
            ->add('text-' . $color)
            ->add('p-0');

        if ($size) {
            $this->classes()->add('fs-' . $size);
        }

        if ($rotate) {
            $this->classes()->add('rotate-' . $rotate);
        }

        if ($animation) {
            $this->classes()->add('uicons-' . $animation);
        }

    }

}
