<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Button extends OrbtUI
{

    public function __construct(public string $type = 'button', public string $color = 'primary', public string $size = 'sm')
    {

        $this->classes()
            ->add('btn')
            ->add('btn-' . $color)
            ->add('btn-' . $size);

    }

}
