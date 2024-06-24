<?php

namespace OrbtUI\Features\SupportComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\ComponentSlot;
use OrbtUI\Features\SupportAlpine\SupportAlpine;
use OrbtUI\Features\SupportClasses\SupportClasses;
use OrbtUI\Features\SupportLivewire\SupportLivewire;
use OrbtUI\Features\SupportProperties\SupportProperties;

class Component
{

    use SupportProperties, SupportClasses, SupportAlpine, SupportLivewire;

    private ?string $tag = null;
    private ?array $antecedents = [];
    private ?array $childs = [];
    private ?array $predecessors = [];
    private ?ComponentSlot $slot = null;

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

    public function child($child)
    {
        array_push($this->childs, $child);
    }

    public function prepend($predecessor)
    {
        array_push($this->predecessors, $predecessor);
    }

    public function append($antecedent)
    {
        array_push($this->antecedents, $antecedent);
    }

    public function data(array $data)
    {

        if (array_key_exists('slot', $data)) {
            $this->slot = $data['slot'];
        }

    }

    public function childs()
    {
        return $this->childs;
    }

    public function antecedents()
    {
        return $this->antecedents;
    }

    public function predecessors()
    {
        return $this->predecessors;
    }

    public function build()
    {

        $content = `<<<'blade'`;

        foreach ($this->antecedents() as $antecedent) {

            if ($antecedent instanceof Component) {

                if ($antecedent->tag === 'slot') {
                    $content .= '{{ $slot }}';
                } else {
                    $content .= $antecedent->build();
                }

            } else {

                $content .= $antecedent;

            }

        }

        $content .= '<' . $this->tag;
        $content .= !$this->classes()->empty()    ? (' class="' . implode(' ', $this->classes()->all()) . '"') : '';
        $content .= !$this->properties()->empty() ? (' ' . implode(' ', $this->properties()->all()))                 : '';
        $content .= !$this->alpine()->empty()     ? (' ' . implode(' ', $this->alpine()->all()))                     : '';
        $content .= !$this->livewire()->empty()   ? (' ' . implode(' ', $this->livewire()->all()))                   : '';
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

        foreach ($this->predecessors() as $predecessor) {

            if ($predecessor instanceof Component) {

                if ($predecessor->tag === 'slot') {
                    $content .= '{{ $slot }}';
                } else {
                    $content .= $predecessor->build();
                }

            } else {

                $content .= $predecessor;

            }

        }

        foreach ($this->childs() as $child) {

        }

        $content .= `blade`;

        return $content;

    }

}
