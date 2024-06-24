<?php

namespace OrbtUI\Components\App;

use OrbtUI\OrbtUI as Component;

class App extends Component
{

    protected function mount()
    {

        $this->tag('body');

        $this->classes()->push([
            'app-default'
        ]);

        $this->properties()->push([
            'data-kt-app-layout'               => 'light-sidebar',
            'data-kt-app-header-fixed'         => 'true',
            'data-kt-app-sidebar-enabled'      => 'true',
            'data-kt-app-sidebar-fixed'        => 'true',
            'data-kt-app-sidebar-hoverable'    => 'true',
            'data-kt-app-sidebar-push-header'  => 'true',
            'data-kt-app-sidebar-push-toolbar' => 'true',
            'data-kt-app-sidebar-push-footer'  => 'true',
            'data-kt-app-toolbar-enabled'      => 'true'
        ]);

        $root = new Component('div');

        $root->properties()->push([
            'id' => 'kt_app_root'
        ]);

        $root->classes()->push([
            'd-flex',
            'flex-column',
            'flex-root',
            'app-root',
        ]);

        $page = new Component('div');

        $page->properties()->push([
            'id' => 'kt_app_page'
        ]);

        $page->classes()->push([
            'app-page',
            'flex-column',
            'flex-column-fluid'
        ]);

        $page->parentOf(new Component());

        $root->parentOf($page);

        $this->parentOf($root);

    }

}
