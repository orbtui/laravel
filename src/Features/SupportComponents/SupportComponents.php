<?php

namespace OrbtUI\Features\SupportComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\ComponentSlot;
use OrbtUI\OrbtUI as Component;

trait SupportComponents
{

    protected ?string $tag = null;

    protected ?array $antecedents  = [];
    protected ?array $childs       = [];
    protected ?array $predecessors = [];

    protected ?ComponentSlot $slot = null;

    public function __construct(string $tag = 'slot')
    {
        $this->tag    = $tag;
        $this->slot = new ComponentSlot();
    }

    public function tag($tag = 'div')
    {
        $this->tag = $tag;
        return $this;
    }

    public function parentOf($child)
    {
        array_push($this->childs, $child);
    }

    public function content($text)
    {
        array_push($this->childs, $text);
    }

    public function prepend($antecedent)
    {
        array_push($this->antecedents, $antecedent);
    }

    public function append($predecessor)
    {
        array_push($this->predecessors, $predecessor);
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

        $content = '';

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
        $content .= !$this->classes()->empty()    ? (' class="' . implode(' ', $this->classes()->all()) . '"')       : '';
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

        return Blade::compileString($content);

    }

}
