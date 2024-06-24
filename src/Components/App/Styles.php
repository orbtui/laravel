<?php

namespace OrbtUI\Components\App;

use OrbtUI\Features\SupportComponents\Component;
use OrbtUI\OrbtUI;

class Styles extends OrbtUI
{

    public function mount()
    {

        $this->component()->tag('link');

        $this->component()
             ->properties()
                ->add('href', '/orbtui/css/style.bundle.css')
                ->add('type', 'text/css')
                ->add('rel', 'stylesheet');

        $plugins = new Component('link');

        $plugins->properties()
                ->add('href', '/orbtui/css/plugins.bundle.css')
                ->add('rel', 'stylesheet')
                ->add('type', 'text/css');

        $this->component()->append($plugins);

    }

}
