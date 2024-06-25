<?php

namespace OrbtUI\Components\Grid;


use OrbtUI\OrbtUI as Component;

class Column extends Component
{

    public function __construct(
        public ?string $sm = null,
        public ?string $md = null,
        public ?string $lg = null,
        public ?string $xl = null,
        public bool    $right = false,
        public bool    $left = false,
        public bool    $center = false,
    ) { }

    protected function mount()
    {

        $this->tag('div');

        $this->classes()->push([
            !$this->sm && !$this->md && !$this->lg && !$this->xl ? 'col' : '',
            $this->sm ? 'col-sm-' . $this->sm : '',
            $this->md ? 'col-md-' . $this->md : '',
            $this->lg ? 'col-lg-' . $this->lg : '',
            $this->xl ? 'col-xl-' . $this->xl : '',
            $this->right ? 'text-end' : '',
            $this->left ? 'text-start' : '',
            $this->center ? 'text-center' : '',
        ]);

        $this->parentOf(new Component());

    }

}
