<?php

namespace OrbtUI\Components\Table\Dropdown;

use OrbtUI\OrbtUI;

class Item extends OrbtUI {

    public function __construct(public string $value = '', public string $fontSize = '', public string $iconType = '', public string $iconName = '', public string $iconSize = '4')
    {
        $this->classes()->add('menu-item px-3');
    }

}
