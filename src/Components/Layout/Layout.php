<?php

namespace OrbtUI\Components\Layout;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Layout extends OrbtUI
{

    public function __construct()
    {

        $this->component()->tag('body');

        $this->component()
            ->classes()
                ->add('app-default');

        $this->component()
            ->properties()
                ->add('data-kt-app-layout',               'light-sidebar')
                ->add('data-kt-app-header-fixed',         'true')
                ->add('data-kt-app-sidebar-enabled',      'true')
                ->add('data-kt-app-sidebar-fixed',        'true')
                ->add('data-kt-app-sidebar-hoverable',    'true')
                ->add('data-kt-app-sidebar-push-header',  'true')
                ->add('data-kt-app-sidebar-push-toolbar', 'true')
                ->add('data-kt-app-sidebar-push-footer',  'true')
                ->add('data-kt-app-toolbar-enabled',      'true');

        $root = new Component('div');

        $root->properties()
            ->add('id', 'kt_app_root');

        $root->classes()
            ->add('d-flex')
            ->add('flex-column')
            ->add('flex-root')
            ->add('app-root');

        $page = new Component('div');

        $page->properties()
            ->add('id', 'kt_app_page');

        $page->classes()
            ->add('app-page')
            ->add('flex-column')
            ->add('flex-column-fluid');

        $page->append(new Component());

        $root->append($page);

        $this->component()->append($root);

    }

}