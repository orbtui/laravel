<?php

namespace OrbtUI\Components\Tabs;


use OrbtUI\OrbtUI as Component;

class TabItem extends Component
{

    public function __construct(
        public bool $selected = false
    ) {

        $this->tag('div');


    }

}
