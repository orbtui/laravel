<?php

namespace OrbtUI\Components\App;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Header extends OrbtUI
{

    protected function mount()
    {

        $this->component()->tag('div');

        $this->component()->properties()
                ->add('id', 'kt_app_header')
                ->add('data-kt-sticky', 'true')
                ->add('data-kt-sticky-activate', '{default: true, lg: true}')
                ->add('data-kt-sticky-name', 'app-header-minimize')
                ->add('data-kt-sticky-offset', `{default: '200px', lg: '0'}`)
                ->add('data-kt-sticky-animation', 'true');

        $this->component()
             ->classes()
                ->add('app-header');

        $container = new Component('div');

        $container->classes()
            ->add('app-container')
            ->add('container-fluid')
            ->add('d-flex')
            ->add('align-items-stretch')
            ->add('justify-content-between');

        $container->child(new Component('slot'));

        $this->component()->child($container);

    }

}
