<?php

namespace OrbtUI\Components\App;

use OrbtUI\OrbtUI;

class Footer extends OrbtUI {

    public function __construct(string $backgroundColor = 'light')
    {

        $this->classes()
            ->add('app-footer bg-opacity-95 shadow')
            ->add('bg-' . $backgroundColor)
            ->protect([
                'app-footer'
            ]);

        $this->alpine()
            ->add('x-data', '{ showFooter: true }')
            ->add('x-show', 'showFooter')
            ->add('x-on:ui-table-items-selected.camel.window', 'showFooter = $event.detail.items.length === 0 ? true : false')
            ->add('x-transition')
            ->protect([
                'x-data',
                'x-show',
                'x-on:ui-table-items-selected.camel.window',
                'x-transition'
            ]);

    }

}
