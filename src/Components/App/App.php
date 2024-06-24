<?php

namespace OrbtUI\Components\App;

use OrbtUI\OrbtUI as Component;

class App extends Component
{

    public function __construct(

    ) {

        $this->tag('div');

        $this->classes()->push([
            'app-wrapper',
            'flex-column',
            'flex-row-fluid',
        ]);

        $this->parentOf(new Component());

    }

}
