<?php

namespace OrbtUI\Features\SupportComponents;

use Illuminate\Support\Facades\Blade;
use OrbtUI\Features\SupportAlpine\SupportAlpine;
use OrbtUI\Features\SupportClasses\SupportClasses;
use OrbtUI\Features\SupportLivewire\SupportLivewire;
use OrbtUI\Features\SupportProperties\SupportProperties;

class Component
{

    use SupportProperties, SupportClasses, SupportAlpine, SupportLivewire;

    private ?string $tag = null;
    private ?array $childs = [];
    private bool $hasSlot = false;

    public function __construct(string $tag = 'slot', array $childs = [])
    {
        $this->tag    = $tag;
        $this->childs = $childs;
    }

    public function tag($tag = 'div')
    {
        $this->tag = $tag;
        return $this;
    }

    public function append($child)
    {
        array_push($this->childs, $child);
    }

    public function childs()
    {
        return $this->childs;
    }

    public function build()
    {

        $content = `<<<'blade'`;
        $content .= '<' . $this->tag;
        $content .= !$this->classes()->empty()    ? (' class="' . implode(' ', $this->classes()->all()) . '"') : '';
        $content .= !$this->properties()->empty() ? (implode(' ', $this->properties()->all()))                 : '';
        $content .= !$this->alpine()->empty()     ? (implode(' ', $this->alpine()->all()))                     : '';
        $content .= !$this->livewire()->empty()   ? (implode(' ', $this->livewire()->all()))                   : '';
        $content .= '>';

        foreach ($this->childs() as $child) {

            if ($child instanceof Component) {

                if ($child->tag === 'slot') {
                    $content .= '{{ $slot }}';
                } else {
                    $content .= $child->build();
                }

            } else {

                $content .= $child;

            }

        }

        $content .= '</' . $this->tag . '>';
        $content .= `blade`;

        return $content;

    }

}
