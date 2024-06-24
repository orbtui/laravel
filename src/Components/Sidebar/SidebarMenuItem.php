<?php

namespace OrbtUI\Components\Sidebar;

use Exception;
use OrbtUI\Components\Icon\Icon;
use OrbtUI\OrbtUI as Component;

class SidebarMenuItem extends Component
{

    public function __construct(
        public ?string $label  = null,
        public string $iconKind = 'regular',
        public ?string $iconName = null,
        public ?string $iconSize = '4',
        public ?string $route  = null,
        public string $link   = '#',
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

        $menuLink = null;

        if ($this->slot->isNotEmpty()) {
            $menuLink = new Component('span');
        } else {

            $menuLink = new Component('a');

            if ($this->route) {

                try {
                    $this->link = route($this->route);
                } catch (Exception $e) {
                    $this->link = '#';
                }

            }

            $menuLink->properties()->push([
                'href' => $this->link
            ]);

        }

        $menuLink->classes()->push([
            'menu-link',
            'text-hover-primary text-active-primary bg-hover-secondary bg-transparent',
            $this->active ? 'active' : '',
        ]);

        if ($this->iconName) {

            $menuIcon = new Component('span');

            $menuIcon->classes()->push([
                'menu-icon'
            ]);

            $icon = new Icon(
                kind: $this->iconKind,
                name: $this->iconName,
                size: $this->iconSize
            );

            $menuIcon->parentOf($icon);

            $menuLink->parentOf($menuIcon);

        } else {

            $menuBullet = new Component('span');

            $menuBullet->classes()->push([
                'menu-bullet'
            ]);

            $bullet = new Component('span');

            $bullet->classes()->push([
                'bullet',
                'bullet-dot'
            ]);

            $menuBullet->parentOf($bullet);

            $menuLink->parentOf($menuBullet);

        }

        $menuTitle = new Component('span');

        $menuTitle->classes()->push([
            'menu-title'
        ]);

        $menuTitle->content($this->label);

        $menuLink->parentOf($menuTitle);

        if ($this->slot->isNotEmpty()) {

            $menuArrow = new Component('span');

            $menuArrow->classes()->push([
                'menu-arrow'
            ]);

            $menuLink->parentOf($menuArrow);

        }

        $this->parentOf($menuLink);

        if ($this->slot->isNotEmpty()) {

            $submenu = new Component('div');

            $submenu->classes()->push([
                'menu-sub',
                'menu-sub-accordion'
            ]);

            $submenu->parentOf(new Component());

            $this->parentOf($submenu);

        }

    }

}
