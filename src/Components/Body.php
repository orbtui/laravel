<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class Body extends OrbtUI
{

    public function __construct()
    {

        $this->classes()
            ->add('app-default');

        $this->properties()
            ->add('id', 'kt_app_body')
            ->add('data-kt-app-layout', 'light-sidebar')
            ->add('data-kt-app-header-fixed', 'true')
            ->add('data-kt-app-header-fixed-mobile', 'true')
            ->add('data-kt-app-sidebar-enabled', 'true')
            ->add('data-kt-app-sidebar-fixed', 'true')
            ->add('data-kt-app-sidebar-hoverable', 'true')
            ->add('data-kt-app-sidebar-push-header', 'true')
            ->add('data-kt-app-sidebar-push-toolbar', 'true')
            ->add('data-kt-app-sidebar-push-footer', 'true')
            ->add('data-kt-app-toolbar-enabled', 'true');

        $this->alpine()
            ->add('x-data', '{ openSidebar: $persist(0), fixedFooter: $persist(0) }')
            ->add('x-bind:data-kt-app-sidebar-minimize', 'openSidebar ? \'on\' : \'off\'')
            ->add('x-bind:data-kt-app-footer-fixed', 'fixedFooter ? \'true\' : \'false\'')
            ->add('x-bind:data-kt-app-footer-fixed-mobile', 'fixedFooter ? \'true\' : \'false\'');

    }

}
