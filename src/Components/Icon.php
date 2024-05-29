<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Icon extends OrbtUI
{

    public function __construct(
        string $kind = 'regular',
        string $name = 'notdef',
        string $color = 'text-dark',
        string $size = '',
        string $rotate = '',
        string $animation = '',
    ) {

        $this->classes()
            ->add('uicons-' . $kind)
            ->add('uicons-' . $name)
            ->add('text-' . $color)
            ->add('p-0')
            ->protect(['uicons']);

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
