<?php

namespace OrbtUI;

use Illuminate\View\Component;

use OrbtUI\Traits\HasProperties;
use OrbtUI\Traits\HasClasses;
use OrbtUI\Traits\HasStyles;
use OrbtUI\Traits\InteractsWithAlpine;
use OrbtUI\Traits\InteractsWithLivewire;

use Illuminate\View\View;
use Closure;

use Illuminate\View\ComponentAttributeBag;

class OrbtUI extends Component
{

    use HasProperties, HasClasses, HasStyles, InteractsWithAlpine, InteractsWithLivewire;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return function(array $data) {

            $this->translate($data);

            return view($this->component()->name(), [
                'classAttributes'    => $this->classes()->render(),
                'styleAttributes'    => $this->styles()->render(),
                'alpineAttributes'   => $this->alpine()->render(),
                'livewireAttributes' => $this->livewire()->render()
            ]);

        };

    }

    protected function translate(array $data = [])
    {

        if (array_key_exists('componentName', $data)) {
            $this->component()->setName($data['componentName']);
        }

        if (array_key_exists('attributes', $data)) {

            $component = $data['attributes'];

            if ($component instanceof ComponentAttributeBag) {

                $attributes = $component->getAttributes();

                foreach ($attributes as $key => $value) {

                    switch ($key) {

                        case str_starts_with($key, 'x-') :
                            return $this->alpine()->add($key, $value);

                        case str_starts_with($key, 'wire') :
                            return $this->livewire()->add($key, $value);

                        case str_starts_with($key, 'styles') :
                            return $this->styles()->add($value);

                        case str_starts_with($key, 'className') :
                            return $this->classes()->add($value);

                    }

                }

            }

        }

    }

}
