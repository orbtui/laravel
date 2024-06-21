<?php

namespace OrbtUI\Components\Header;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Header extends OrbtUI
{

    public function __construct()
    {

        $this->component()->tag('div');

        $this->component()
             ->properties()
                ->add('id', 'kt_app_header')
                ->add('data-kt-sticky', 'true')
                ->add('data-kt-sticky-activate', '{default: true, lg: true}')
                ->add('data-kt-sticky-name', 'app-header-minimize')
                ->add('data-kt-sticky-offset', `{default: '200px', lg: '0'}`)
                ->add('data-kt-sticky-animation', 'true');

        $this->component()
             ->classes()
                ->add('app-header');

        $this->component()->append(new Component('slot'));

    }

}
