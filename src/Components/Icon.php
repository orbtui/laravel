<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

use Illuminate\View\View;
use Closure;

class Icon extends OrbtUI {

    private $type;
    private $name;
    private $size;

    public function __construct(string $type = 'regular', string $name = '', string $size = '1')
    {
        $this->type = $type;
        $this->name = $name;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        if ($this->type) {
            $this->classes()->add('fa-' . $this->type);
        }

        if ($this->name) {
            $this->classes()->add('fa-' . $this->name);
        }

        if ($this->size) {
            $this->classes()->add('fs-' . $this->size . 'x');
        }

        return view('ui::icon', [
            'classAttributes'    => $this->classes()->mount()
        ]);

    }

}
