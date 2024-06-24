<?php

namespace OrbtUI\Components\Sidebar;


use OrbtUI\OrbtUI as Component;

class SidebarMenuItem extends Component
{

    public function __construct(
        public ?string $label  = null,
        public ?string $route  = null,
        public ?string $link   = null,
        public bool    $active = false
    ) {}

    protected function mount()
    {

        $this->tag('div');

        $this->classes()->push([
            'menu-item',
            $this->active ? 'here show' : '',
            $this->slot->isNotEmpty() ? 'menu-accordion' : ''
        ]);

        $this->properties()->push([
            'data-kt-menu-trigger' => 'click'
        ]);

        $menuLink = new Component('span');

            $menuLink->classes()->push([
                'menu-link',
                'menu-accordion',
                'active'
            ]);

        $menuTitle = new Component('span');

        $menuTitle->classes()->push([
            'menu-title'
        ]);

        $menuTitle->content($this->label);

        $menuLink->parentOf($menuTitle);

        $this->parentOf($menuLink);

    }

}
