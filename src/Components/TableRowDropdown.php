<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableRowDropdown extends OrbtUI
{

    public function __construct(public string $title = '')
    {

        if ($title == '') {
            $title = trans('ui::components.actions');
        }

        $this->classes()
            ->add('position-relative')
            ->protect([
                'position'
            ]);

        $this->styles()
            ->add('width: 0; min-width: fit-content');

    }

}
