<?php

namespace OrbtUI\Components;

use OrbtUI\Integrations\AlpineDirectives;
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

            // Fix Header
            ->add('data-kt-app-header-fixed', 'true')
            ->add('data-kt-app-header-fixed-mobile', 'true')

            // Enable Sidebar
            ->add('data-kt-app-sidebar-enabled', 'true')

            // Fix Sidebar
            ->add('data-kt-app-sidebar-fixed', 'true')
            ->add('data-kt-app-sidebar-hoverable', 'true')
            ->add('data-kt-app-sidebar-push-header', 'true')
            ->add('data-kt-app-sidebar-push-toolbar', 'true')
            ->add('data-kt-app-sidebar-push-footer', 'true')

            // Enable Toolbar
            ->add('data-kt-app-toolbar-enabled', 'true')

            // Enable Page Loading
            ->add('data-kt-app-page-loading-enabled', 'true')
            ->add('data-kt-app-page-loading', 'on');

        $this->alpine()
            ->data('{ openSidebar: $persist(0), fixedFooter: $persist(0) }')
            ->bind('data-kt-app-sidebar-minimize', 'openSidebar ? \'on\' : \'off\'')
            ->bind('data-kt-app-footer-fixed', 'fixedFooter ? \'true\' : \'false\'')
            ->bind('data-kt-app-footer-fixed-mobile', 'fixedFooter ? \'true\' : \'false\'');

    }

}
