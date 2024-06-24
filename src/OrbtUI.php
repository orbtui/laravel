<?php

namespace OrbtUI;

use Illuminate\View\Component as Blade;

use Illuminate\View\View;
use Closure;
use OrbtUI\Features\SupportComponents\SupportComponents;

class OrbtUI extends Blade
{

    use SupportComponents;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {


        return function(array $data) {

            $this->component()->data($data);

            $this->mount();

            return $this->component->build();

        };

    }

    protected function build()
    {

    }

    protected function handle(array $data = [])
    {

        // foreach ($this->properties()->all() as $key => $value) {

        //     switch ($key) {

            // // AlpineJS Attributes

            // case str_starts_with($key, 'x-') : $this->alpine()->push($key, $value); break;
            // case $key == 'onChange'        && !is_array($value) : $this->alpine()->onChange($value); break;
            // case $key == 'onClick'         && !is_array($value) : $this->alpine()->onClick($value); break;
            // case $key == 'onClickAway'     && !is_array($value) : $this->alpine()->onClickAway($value); break;
            // case $key == 'classCondition'  && !is_array($value) : $this->alpine()->class($value); break;
            // case $key == 'transition'      && !is_array($value) : $this->alpine()->transition($value); break;

            // // Livewire Attributes

            // case $key == 'ignore'  && !is_array($value) : $this->livewire()->ignore(); break;
            // case $key == 'ignoreSelf'  && !is_array($value) : $this->livewire()->ignoreSelf(); break;

            // // Styles Attributes

            // case $key == 'style' && !is_array($value) : $this->styles()->add($value); break;

            // // Classes Attributes

            // case $key == 'className'  && !is_array($value) : $this->classes()->add($value); break;

            // // Margin Attributes

            // case $key == 'margin'       : $this->classes()->add('m-' . $value); break;
            // case $key == 'marginTop'    : $this->classes()->add('mt-' . $value); break;
            // case $key == 'marginBottom' : $this->classes()->add('mb-' . $value); break;
            // case $key == 'marginStart'  : $this->classes()->add('ms-' . $value); break;
            // case $key == 'marginEnd'    : $this->classes()->add('me-' . $value); break;

            // // Padding Attributes

            // case $key == 'padding'       : $this->classes()->add('p-' . $value); break;
            // case $key == 'paddingTop'    : $this->classes()->add('pt-' . $value); break;
            // case $key == 'paddingBottom' : $this->classes()->add('pb-' . $value); break;
            // case $key == 'paddingStart'  : $this->classes()->add('ps-' . $value); break;
            // case $key == 'paddingEnd'    : $this->classes()->add('pe-' . $value); break;

            // // Color Attributes

            // case $key == 'color' && in_array($value, $this->defaultColors)            : $this->classes()->add('text-' . $value); break;
            // case $key == 'backgroundColor' && in_array($value, $this->defaultColors)  : $this->classes()->add('bg-' . $value); break;

            // // Text Attributes

            // case $key == 'textColor' && in_array($value, $this->defaultColors)        : $this->classes()->add('text-' . $value); break;
            // case $key == 'textHoverColor' && in_array($value, $this->defaultColors)   : $this->classes()->add('text-hover-' . $value); break;
            // case $key == 'fontSize' && in_array($value, $this->defaultColors)         : $this->classes()->fontSize($value); break;
            // case $key == 'fontWeight' && in_array($value, $this->defaultColors)       : $this->classes()->fontWeight($value); break;

            // // Alignment Attributes

            // case $key == 'align' && in_array($value, $this->alignmentOptions) : $this->classes()->add('text-' . $value); break;

    //     }

    // }

        $this->mount();

    }

    protected function mount() {}


}
