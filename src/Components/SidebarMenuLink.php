<?php

namespace OrbtUI\Components;

use Exception;
use OrbtUI\OrbtUI;

class SidebarMenuLink extends OrbtUI
{

    public function __construct(public string $tagName = 'a', string $route = '', bool $active = false, bool $navigate = false)
    {

        $this->classes()->add('menu-link')->add('bg-hover-light');

        $this->livewire()->protect(['wire:navigate']);

        if ($active) {

            $this->classes()->add('active');

        } else {

            if ($route) {

                try {

                    $this->properties()->add('href', route($route));

                } catch (Exception $e) {

                }

            }

        }

    }

    protected function mount()
    {

        // if (!$this->component()->child()) {
        //     $this->classes()->add('bg-hover-light');
        // }

    }

}
