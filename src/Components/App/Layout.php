<?php

namespace OrbtUI\Components\App;


use OrbtUI\OrbtUI as Component;

class Layout extends Component
{

    protected function mount()
    {

        $this->tag('div');

        $this->classes()->push([
            'app-wrapper',
            'flex-column',
            'flex-row-fluid',
        ]);

        $this->parentOf(new Component());

    }

}
