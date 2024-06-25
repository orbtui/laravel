<?php

namespace OrbtUI\Components\Button;

use OrbtUI\Components\Icon\Icon;
use OrbtUI\Features\SupportLivewire\Livewire;
use OrbtUI\OrbtUI as Component;

class Button extends Component
{

    public function __construct(
        public  string $color = 'primary',
        public  string $size = 'sm',
        public ?string $kind = null,
        public ?string $iconKind = 'regular',
        public ?string $iconName = null,
        public ?string $click = null
    ) {}

    protected function mount()
    {

        $this->tag('button');

        $this->classes()->push([
            'btn',
            'btn-' . $this->size,
            'btn-' . $this->color,
            $this->kind ? 'btn-' . $this->kind : ''
        ]);

        if ($this->click) {
            $this->livewire()->add(Livewire::ON_CLICK, $this->click);
        }

        $this->parentOf(new Component());

        if ($this->iconName) {

            $icon = new Icon(
                kind: $this->iconKind,
                name: $this->iconName,
                marginStart: 2,
                padding: 0
            );

            $this->parentOf($icon);

        }

    }

}
