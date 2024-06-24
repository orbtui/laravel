<?php

namespace OrbtUI;

use Illuminate\View\Component as Blade;

use OrbtUI\Features\WithComponents;
use OrbtUI\Features\WithAlpine;
use OrbtUI\Features\WithClasses;
use OrbtUI\Features\WithLivewire;
use OrbtUI\Features\WithProperties;
use OrbtUI\Features\WithStyles;

use Illuminate\View\View;
use Closure;

class OrbtUI extends Blade
{

    use WithComponents, WithProperties, WithClasses, WithStyles, WithLivewire, WithAlpine;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return function(array $data) {

            if (array_key_exists('slot', $data)) {
                $this->slot = $data['slot'];
            }

            $this->mount();

            return $this->build();

        };

    }

    protected function mount() {}

}
