<?php

namespace OrbtUI\Components\Form;


use OrbtUI\OrbtUI as Component;

class Form extends Component
{

    protected function mount()
    {

        $this->tag('form');

        $this->parentOf(new Component());

    }

}
