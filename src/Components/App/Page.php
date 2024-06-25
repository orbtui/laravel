<?php

namespace OrbtUI\Components\App;


use OrbtUI\OrbtUI as Component;

class Page extends Component
{

    public function __construct(
        public bool $blank = false
    ) {

        $this->tag('div');

        $this->classes()->push([
            'app-main',
            'flex-column',
            'flex-row-fluid'
        ]);

        $this->properties()->push([
            'id' => 'kt_app_main'
        ]);

        $root = new Component('div');

        $root->classes()->push([
            'd-flex',
            'flex-column',
            'flex-column-fluid',
            'mt-4',
            'mb-20',
            'mb-md-2'
        ]);

        $root->parentOf(new Component());

        $this->parentOf($root);

    }

}
