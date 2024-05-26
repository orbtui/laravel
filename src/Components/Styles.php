<?php

namespace OrbtUI\Components;

use Closure;
use Illuminate\View\View;
use OrbtUI\OrbtUI;

class Styles extends OrbtUI {

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $colors = config('orbtui.colors');

        foreach ($colors as $name => $color) {

            if (in_array($name, $this->defaultColors)) {
                $this->css()->add($name, $color);
            }

        }

        return view('ui::styles', [
            'customCss' => $this->css()->build()
        ]);

    }

}
