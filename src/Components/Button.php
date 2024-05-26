<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Button extends OrbtUI {

    public function __construct(public string $type = 'button', string $color = 'primary', string $size = 'sm', string $onClick = '')
    {

        $this->classes()
            ->add('btn')
            ->add('btn-' . $color)
            ->add('btn-' . $size)
            ->protect([
                'btn'
            ]);

    }

}
