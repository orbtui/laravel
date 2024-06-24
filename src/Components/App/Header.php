<?php

namespace OrbtUI\Components\App;


use OrbtUI\OrbtUI as Component;

class Header extends Component
{

    protected function mount()
    {

        $this->tag('div');

        $this->properties()->push([
            'id'                       => 'kt_app_header',
            'data-kt-sticky'           => 'true',
            'data-kt-sticky-activate'  => `{default: true, lg: true}`,
            'data-kt-sticky-name'      => 'app-header-minimize',
            'data-kt-sticky-offset'    => `{default: '200px', lg: '0'}`,
            'data-kt-sticky-animation' => 'true'
        ]);

        $this->classes()->push([
            'app-header'
        ]);

        $container = new Component('div');

        $container->properties()->push([
            'id' => 'kt_app_header_container'
        ]);

        $container->classes()->push([
            'app-container',
            'container-fluid',
            'd-flex',
            'align-items-stretch',
            'justify-content-between',
        ]);

        $container->parentOf(new Component('slot'));

        $this->parentOf($container);

    }

}
