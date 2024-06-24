<?php

namespace OrbtUI\Components\Sidebar;

use OrbtUI\Components\Icon\Icon;
use OrbtUI\Components\Image\Image;
use OrbtUI\OrbtUI as Component;

class Sidebar extends Component
{

    public function __construct(
        public ?string $brand           = null,
        public ?string $brandLight      = null,
        public ?string $brandDark       = null,
        public ?string $brandSmall      = null,
        public ?string $brandSmallLight = null,
        public ?string $brandSmallDark  = null
    ) {

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

        $header = $this->createHeader();

        $brand = $this->createBrand();

        $header->parentOf($brand);

        $toggle = $this->createToggle();

        $header->parentOf($toggle);

        $this->parentOf($header);

        $this->parentOf(new Component());

    }

    private function createHeader()
    {

        $header = new Component('div');

        $header->properties()->push([
            'id' => 'kt_app_sidebar_logo'
        ]);

        $header->classes()->push([
            'app-sidebar-logo',
            'px-6'
        ]);

        return $header;

    }

    private function createBrand()
    {

        $brandContainer = new Component('a');

        $brandContainer->properties()->push([
            'href' => '#'
        ]);

        if ($this->brand && !($this->brandLight && $this->brandDark)) {

            $brand = new Image(
                source: $this->brand
            );

            $brand->classes()->push([
                'h-40px',
                'app-sidebar-logo-default'
            ]);

            $brandContainer->parentOf($brand);

        }

        return $brandContainer;

    }

    private function createToggle()
    {

        $toggle = new Component('div');

        $toggle->properties()->push([
            'id' => 'kt_app_sidebar_toggle',
            'data-kt-toggle' => 'true',
            'data-kt-toggle-state' => 'active',
            'data-kt-toggle-target' => 'body',
            'data-kt-toggle-name' => 'app-sidebar-minimize'
        ]);

        $toggle->classes()->push([
            'app-sidebar-toggle',
            'btn',
            'btn-icon',
            'btn-shadow',
            'btn-sm',
            'btn-color-muted',
            'btn-active-color-primary',
            'h-30px',
            'w-30px',
            'position-absolute',
            'top-50',
            'start-100',
            'translate-middle',
            'rotate',
        ]);

        $icon = new Icon(
            kind: 'light',
            name: 'arrow-left',
            size: '4'
        );

        $icon->classes()->push([
            'rotate-180'
        ]);

        $toggle->parentOf($icon);

        return $toggle;

    }

}
