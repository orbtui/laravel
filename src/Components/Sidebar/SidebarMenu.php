<?php

namespace OrbtUI\Components\Sidebar;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class SidebarMenu extends OrbtUI
{

    protected function mount()
    {

        $this->component()->tag('div');

        $this->component()
            ->classes()
                ->add('app-sidebar-menu')
                ->add('overflow-hidden')
                ->add('flex-column-fluid');

        $wrapper = new Component('div');

        $wrapper->classes()
            ->add('app-sidebar-wrapper');

        $scroll = new Component('div');

        $scroll->classes()
            ->add('scroll-y')
            ->add('my-5')
            ->add('mx-3');

        $menu = new Component('div');

        $menu->classes()
            ->add('menu')
            ->add('menu-column')
            ->add('menu-rounded')
            ->add('menu-sub-indention')
            ->add('fw-semibold')
            ->add('fs-6');

        $menu->child(new Component());

        $scroll->child($menu);

        $wrapper->child($scroll);

        $this->component()->child($wrapper);

    }

}
