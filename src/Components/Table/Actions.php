<?php

namespace OrbtUI\Components\Table;

use OrbtUI\OrbtUI;

class Actions extends OrbtUI {


    public function __construct(string $backgroundColor = 'light')
    {
        $this->classes()
            ->add('app-footer')
            ->add('bg-' . $backgroundColor);
    }

}
