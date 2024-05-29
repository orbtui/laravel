<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class TableActions extends OrbtUI
{

    public function __construct(string $backgroundColor = 'body')
    {

        $this->component()->view('datatables.table-actions');

        $this->properties()->add('id', 'app-footer');

        $this->classes()
            ->add('app-footer shadow')
            ->add('bg-' . $backgroundColor)
            ->protect([
                'app-footer'
            ]);

            $this->alpine()
                ->add('x-init', '$watch(\'items.length\', length => length > 0 ? $dispatch(\'ui-hide-footer\') : $dispatch(\'ui-show-footer\') )')
                ->add('x-data', '{
                        items: []
                    }')
                ->add('x-on:ui-table-items-selected.camel.window', 'items = $event.detail.items; fixedFooter = true')
                ->add('x-show', 'items.length > 0')
                ->add('x-transition');

    }


}
