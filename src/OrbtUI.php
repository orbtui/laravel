<?php

namespace OrbtUI;

use Illuminate\View\Component;

use OrbtUI\Traits\UseComponentProperties;
use OrbtUI\Traits\UseAlpine;
use OrbtUI\Traits\UseClasses;
use OrbtUI\Traits\UseLivewire;
use OrbtUI\Traits\UseStyles;

use Illuminate\View\View;
use Closure;

use Illuminate\View\ComponentAttributeBag;

class OrbtUI extends Component
{

    use UseComponentProperties, UseClasses, UseStyles, UseAlpine, UseLivewire;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return function(array $data) {

            $this->translate($data);

            view('ui::' . $this->component()->name(), [
                'classes' => $this->classes()->render(),
                'styles' => $this->styles()->render(),
                'alpine' => $this->alpine()->render(),
                'livewire' => $this->livewire()->render()
            ]);

        };

    }

    private function translate(array $data = [])
    {

        if (array_key_exists('componentName', $data)) {
            $this->componentName = $data['componentName'];
        }

        if (array_key_exists('attributes', $data)) {

            $component = $data['attributes'];

            if ($component instanceof ComponentAttributeBag) {

                $attributes = $component->getAttributes();

                foreach ($attributes as $key => $value) {

                    switch ($key) {

                        case $key == 'componentName' :
                            $this->component()->setName($value);

                        case str_starts_with($key, 'x-') :
                            $this->alpine()->add($key, $value);

                        case str_starts_with($key, 'wire') :
                            $this->livewire()->add($key, $value);

                        case str_starts_with($key, 'styles') :
                            $this->styles()->add($value);

                        case str_starts_with($key, 'className') :
                            $this->classes()->add($value);

                    }

                }

            }

        }

    }

}
