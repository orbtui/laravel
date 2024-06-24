<?php

namespace OrbtUI\Components\Sidebar;


use OrbtUI\OrbtUI as Component;

class SidebarMenuGroup extends Component
{

    public function __construct(
        public ?string $label = null
    ) {}

    protected function mount()
    {

        $this->tag('div');

        $this->classes()->push([
            'menu-item pt-3'
        ]);

        $content = new Component('div');

        $content->classes()->push([
            'menu-content'
        ]);

        $heading = new Component('div');

        $heading->classes()->push([
            'menu-heading',
            'fw-bold',
            'text-uppercase',
            'fs-7'
        ]);

        $heading->append($this->label);

        $content->parentOf($heading);

        $this->parentOf($content);

    }

}
