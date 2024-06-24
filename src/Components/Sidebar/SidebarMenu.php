<?php

namespace OrbtUI\Components\Sidebar;


use OrbtUI\OrbtUI as Component;

class SidebarMenu extends Component
{

    protected function mount()
    {

        $this->tag('div');

        $this->classes()->push([
            'app-sidebar-menu',
            'overflow-hidden',
            'flex-column-fluid'
        ]);

        $wrapper = $this->createWrapper();

        $this->parentOf($wrapper);

    }

    private function createWrapper()
    {

        $wrapper = new Component('div');

        $wrapper->classes()->push([
            'app-sidebar-wrapper'
        ]);

        $wrapper->properties()->push([
            'id' => 'kt_app_sidebar_menu_wrapper'
        ]);

        $scroll = new Component('div');

        $scroll->classes()->push([
            'scroll-y',
            'my-5 mx-3',
            'mx-3',
        ]);

        $scroll->properties()->push([
            'data-kt-scroll' => 'true',
            'data-kt-scroll-activate' => 'true',
            ' data-kt-scroll-height' => 'auto',
            'data-kt-scroll-dependencies' => '#kt_app_sidebar_logo, #kt_app_sidebar_footer',
            'data-kt-scroll-wrappers' => '#kt_app_sidebar_menu',
            'data-kt-scroll-offset' => '5px',
            'data-kt-scroll-save-state' => 'true'
        ]);

        $menu = new Component('div');

        $menu->classes()->push([
            'menu',
            'menu-column',
            'menu-rounded',
            'menu-sub-indention',
            'fw-semibold',
            'fs-6',
        ]);

        $menu->properties()->push([
            'data-kt-menu' => 'true',
            'data-kt-menu-expand' => 'false',
        ]);

        $menu->parentOf(new Component());

        $scroll->parentOf($menu);

        $wrapper->parentOf($scroll);

        return $wrapper;

    }

}
