<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class DropdownItems extends OrbtUI
{

    public function __construct(
        string $openDirection = 'bottom',
        public string $selectedItem = ''
    ) {

        $this->component()->view('dropdown.dropdown-items');

        $this->classes()
            ->add('menu')
            ->add('menu-sub')
            ->add('menu-sub-dropdown')
            ->add('menu-column')
            ->add('menu-rounded')
            ->add('menu-gray-800')
            ->add('menu-state-bg')
            ->add('fw-semibold')
            ->add('position-absolute')
            ->add('overflow-hidden')
            ->add('text-overflow-ellipsis')
            ->add(($openDirection == 'bottom' ? 'top' : 'bottom') . '-0')
            ->add('left-0')
            ->add('w-100')
            ->add('mh-250px')
            ->add('overflow-y-auto')
            ->add('pb-3')
            ->add('bg-light');

        $this->alpine()
            ->class('openItems ? \'show\' : \'\'')
            ->show('openItems')->transition();

        $this->styles()
            ->add('margin-bottom: 10px')
            ->add('margin-right: 20px');

    }

}
