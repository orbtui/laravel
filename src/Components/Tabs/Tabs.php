<?php

namespace OrbtUI\Components\Tabs;


use OrbtUI\OrbtUI as Component;

class Tabs extends Component
{

    public function __construct(
        public string $source = ''
    ) {

        $this->tag('div');


    }

}
