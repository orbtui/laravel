<?php

namespace OrbtUI\Components\Sidebar;


use OrbtUI\OrbtUI as Component;

class Sidebar extends Component
{

    protected function mount()
    {

        $this->tag('div');

        $this->classes()->push([
            'app-sidebar',
            'flex-column',
            'bg-light'
        ]);

        $this->properties()->push([
            'id' => 'kt_app_sidebar',
            'data-kt-drawer' => 'true',
            'data-kt-drawer-name' => 'app-sidebar',
            'data-kt-drawer-activate' => `{default: true, lg: false}`,
            'data-kt-drawer-overlay' => 'true',
            'data-kt-drawer-width' => '225px',
            'data-kt-drawer-direction' => 'start',
            'data-kt-drawer-toggle' => '#kt_app_sidebar_mobile_toggle'
        ]);

        $this->parentOf(new Component());

    }

}
