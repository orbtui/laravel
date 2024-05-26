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
use OrbtUI\Traits\HasCss;

class OrbtUI extends Component
{

    use HasProperties, HasClasses, HasStyles, HasCss, InteractsWithAlpine, InteractsWithLivewire;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return function(array $data) {

            $this->translate($data);

            return view($this->component()->name(), [
                'classAttributes' => $this->classes()->build(),
                'styleAttributes' => $this->styles()->build(),
                'alpineAttributes' => $this->alpine()->build(),
                'livewireAttributes' => $this->livewire()->build()
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

                        // AlpineJS Attributes

                        case str_starts_with($key, 'x-') : $this->alpine()->add($key, $value); break;

                        // Livewire Attributes

                        case str_starts_with($key, 'wire') : $this->livewire()->add($key, $value); break;

                        // Styles Attributes

                        case $key == 'style' && !is_array($value) : $this->styles()->add($value); break;

                        // Classes Attributes

                        case $key == 'class'  && !is_array($value) : $this->classes()->add($value); break;

                        // Margin Attributes

                        case $key == 'margin'       : $this->classes()->add('m-' . $value); break;
                        case $key == 'marginTop'    : $this->classes()->add('mt-' . $value); break;
                        case $key == 'marginBottom' : $this->classes()->add('mb-' . $value); break;
                        case $key == 'marginStart'  : $this->classes()->add('ms-' . $value); break;
                        case $key == 'marginEnd'    : $this->classes()->add('me-' . $value); break;

                        // Padding Attributes

                        case $key == 'padding'       : $this->classes()->add('p-' . $value); break;
                        case $key == 'paddingTop'    : $this->classes()->add('pt-' . $value); break;
                        case $key == 'paddingBottom' : $this->classes()->add('pb-' . $value); break;
                        case $key == 'paddingStart'  : $this->classes()->add('ps-' . $value); break;
                        case $key == 'paddingEnd'    : $this->classes()->add('pe-' . $value); break;

                        // Color Attributes

                        case $key == 'color' && in_array($value, $this->defaultColors)            : $this->classes()->add('text-' . $value); break;
                        case $key == 'hoverColor' && in_array($value, $this->defaultColors)       : $this->classes()->add('text-hover-' . $value); break;
                        case $key == 'backgroundColor' && in_array($value, $this->defaultColors)  : $this->classes()->add('bg-' . $value); break;

                        // Alignment Attributes

                        case $key == 'align' && in_array($value, $this->alignmentOptions) : $this->classes()->add('text-' . $value); break;

                    }

                }

            }

        }

    }

}
